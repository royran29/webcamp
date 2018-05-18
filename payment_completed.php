
<?php include_once 'includes/templates/header.php'; ?>
<section class="section container">
    <h2>Registration Summary</h2>
    <?php 
         $resultado = $_GET['exito'];
         $payment = $_GET['paymentId'];
         $id_pago = (int) $_GET['id_pago'];

         if($resultado == 'true'){
             echo 'El pago se realizó con éxito <br>';
             echo 'El id es ' . $payment;

            require_once('includes/functions/db_conection.php');
            //Insert with staments
            //This way helps to aviod SQL Injection
            $stmt = $conn->prepare("UPDATE registrados SET pagado = ? WHERE id_registrado = ?");
            $pay = 1;
            $stmt->bind_param("ii", $pay, $id_pago);
            $stmt->execute();
            $stmt->close();
            $conn->close();

         }
         else{
             echo 'El pago no se realizó';
         }
    ?>
   
</section>
 <?php include_once 'includes/templates/footer.php'; ?>