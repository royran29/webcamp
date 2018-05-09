 <?php //This code have to be here for avoid double insertions with refresh
 if(isset($_POST['submit'])): ?>
    <?php 
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $gift = $_POST['gift'];
        $total = $_POST['total'];
        $date = date('Y-m-d H:i:s');
        //Orders
        $shirts = $_POST['shirt'];
        $stickers = $_POST['stickers'];
        $tickets = $_POST['tickets'];
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
            $stmt->close();
            $conn->close();
            //Esto es para evitar un doble insercion con un refresh.
            //Para q funcione el codigo php debe estar arriba sin q 
            //nada haya sido enviado al navegador y sin lineas vacias
            header('Location: validate_registry.php?success=1');
        }
        catch(\Exception $e){
            echo $e->getMessage;
        }
    ?>
<?php endif ?>
<?php include_once 'includes/templates/header.php'; ?>

<section class="section container">
    <h2>Registration Summary</h2>
    <?php 
        if(isset($_GET['success'])){
            if($_GET['success'] == 1){
                echo "Successful registration";
            }
        }
    ?>
   
</section>
 <?php include_once 'includes/templates/footer.php'; ?>