<?php

if(!isset($_POST['submit'])){
    exit('There was a mistake');
}

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

require 'includes/paypal.php';


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $gift = $_POST['gift'];
    $total = $_POST['total'];
    $date = date('Y-m-d H:i:s');

    //Orders
    $extra = $_POST['extra'];

    $shirts = $_POST['extra']['shirt']['amount'];
    $shirtPrice = $_POST['extra']['shirt']['price'];

    $stickers = $_POST['extra']['stickers']['amount'];
    $stickerPrice = $_POST['extra']['stickers']['price'];
   
    $tickets = $_POST['tickets'];
    $numTickets = $tickets;

    include_once 'includes/functions/functions.php';

    $order = products_json($tickets, $shirts, $stickers);

    //Events
    $events = $_POST['register'];
    $register = events_json($events);
    try{
        require_once('includes/functions/db_conection.php');
        //Insert with staments
        //This way helps to aviod SQL Injection
        $stmt = $conn->prepare("INSERT INTO registrados(nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $name, $lastName, $email, $date, $order,$register, $gift, $total);
        $stmt->execute();
        $id_registry = $stmt->insert_id;
        $stmt->close();
        $conn->close();
        //Esto es para evitar un doble insercion con un refresh.
        //Para q funcione el codigo php debe estar arriba sin q 
        //nada haya sido enviado al navegador y sin lineas vacias
       // header('Location: validate_registry.php?success=1');
    }
    catch(\Exception $e){
        echo $e->getMessage;
    }
}
//Crear instacia de pago
$compra = new Payer();
//establecer el metodo de pago
$compra->setPaymentMethod('paypal');

//Crear instacia de producto o item
/*$articulo = new Item();
$articulo->setName($producto)//Nombre del producto
         ->setCurrency('USD')//moneda
         ->setQuantity(1)//cantidad
         ->setPrice($precio);//precio*/

$i = 0;
$shoppingList = array();
foreach ($numTickets as $key => $value) {
    if ((int)$value['amount'] > 0) {
        ${"articulo$i"} = new Item();
        $shoppingList[] = ${"articulo$i"};
        ${"articulo$i"}->setName("Pass: " . $key)//Nombre del producto
                    ->setCurrency('USD')//moneda
                    ->setQuantity((int)$value['amount'])//cantidad
                    ->setPrice((int)$value['price']);//precio}
                    
        $i++;
    }
}

foreach ($extra as $key => $value) {
    if ((int)$value['amount'] > 0) {

        if ($key == 'shirt') {
            $price = (float) $value['price'] * .93;//tiene descuento
        }else{
            $price = (int) $value['price'];
        }

        ${"articulo$i"} = new Item();
        $shoppingList[] = ${"articulo$i"};
        ${"articulo$i"}->setName("Extras: " . $key)//Nombre del producto
                    ->setCurrency('USD')//moneda
                    ->setQuantity((int)$value['amount'])//cantidad
                    ->setPrice($price);//precio}
        $i++;
    }
}

//Instacia de lista de articulos
$listaArticulos = new ItemList();
//agregando articulos a la lista
$listaArticulos->setItems($shoppingList);

//Details
//en este caso no es necesario xq no hay subtotal
/*$details = new Details();
$details->setShipping(0)
        ->setSubTotal($total);*/

//Estableciendo la cantidad
$cantidad = new Amount();
$cantidad->setCurrency('USD')
         ->setTotal($total);

//Transaccion
$transaccion = new Transaction();
$transaccion->setAmount($cantidad)//instacia de Amount
            ->setItemList($listaArticulos) //instacia de ItemList
            ->setDescription('Pago GDLWEBCAMP')//texto q sale al cobrar
            ->setInvoiceNumber($id_registry);//numero de factura.. uniqid es como un ramdon solo para ejemplo



//Urls para direccionar cuando se hace el pago
$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/payment_completed.php?exito=true&id_pago={$id_registry}") //url a direccionar una vez aprovado el pago
              ->setCancelUrl(URL_SITIO . "/payment_completed.php?exito=false&id_pago={$id_registry}");//url a direccinar cuando el usuario cancela la operacion o hay un error

//Realizar el pago
$pago = new Payment();
$pago->setIntent('sale')
     ->setPayer($compra)//recibe una instacia de Payer
     ->setRedirectUrls($redireccionar)//recibe instacia de RedirectUrls
     ->setTransactions(array($transaccion));//recibe un array con instacias de Transaction

try{
    $pago->create($apiContext);
}
catch(PayPal\Exception\PayPalConnectionException $pce){
    echo '<pre>';
    print_r(json_decode($pce->getData()));
    exit;
    echo '</pre>';
}

$aprovado = $pago->getApprovalLink();

//realiza el redireccionamiento
header("Location: {$aprovado}");
?>