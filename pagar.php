<?php

if(!isset($_POST['producto'], $_POST['precio'])){
    exit('Hubo un error');
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

$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (int) $precio;
$envio = 0;
$total = $precio + $envio;

//Crear instacia de pago
$compra = new Payer();
//establecer el metodo de pago
$compra->setPaymentMethod('paypal');

//Crear instacia de producto o item
$articulo = new Item();

$articulo->setName($producto)//Nombre del producto
         ->setCurrency('USD')//moneda
         ->setQuantity(1)//cantidad
         ->setPrice($precio);//precio

//Instacia de lista de articulos
$listaArticulos = new ItemList();
//agregando articulos a la lista
$listaArticulos->setItems(array($articulo));

//Detalles de los productos
$detalles = new Details();
$detalles->setShipping($envio)
         ->setSubtotal($precio);


//Estableciendo la cantidad
$cantidad = new Amount();
$cantidad->setCurrency('USD')
         ->setTotal($total)
         ->setDetails($detalles); //recibe una instacia de Details 

//Transaccion
$transaccion = new Transaction();
$transaccion->setAmount($cantidad)//instacia de Amount
            ->setItemList($listaArticulos) //instacia de ItemList
            ->setDescription('Pago ')//texto q sale al cobrar
            ->setInvoiceNumber(uniqid());//numero de factura.. uniqid es como un ramdon solo para ejemplo


//Urls para direccionar cuando se hace el pago
$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . '/pago_finalizado.php?exito=true') //url a direccionar una vez aprovado el pago
              ->setCancelUrl(URL_SITIO . '/pago_finalizado.php?exito=false');//url a direccinar cuando el usuario cancela la operacion o hay un error

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