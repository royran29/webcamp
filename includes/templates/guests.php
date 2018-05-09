<?php 
    try{
        require_once('includes/functions/db_conection.php');
        $sql = 'select * from invitados';
        $result = $conn->query($sql);

    }catch(\Exception $e){
        echo $e->getMessage;
    }

?>

<section class="guests container section">
    <h2>Our Guests</h2>
    <ul class="guests-list clearfix">
        <?php while($guests = $result->fetch_assoc()){ ?>  
            <li>
                <div class="guest">
                    <a class="guest-info" href="#guest<?php echo $guests['invitado_id']?>">
                        <img src="img/<?php echo $guests['url_imagen']?>" alt="Guest Image">
                        <p><?php echo $guests['nombre_invitado'] . ' ' . $guests['apellido_invitado']?></p>
                    </a>
                </div>
            </li>
            <div style="display: none">
                <div id="guest<?php echo $guests['invitado_id']?>" class="guest-info">
                    <h2><?php echo $guests['nombre_invitado'] . ' ' . $guests['apellido_invitado']?></h2>
                    <img src="img/<?php echo $guests['url_imagen']?>" alt="Guest Image">
                    <p><?php echo $guests['descripcion']?></p>
                </div>
            </div>
        <?php }?>
    </ul>
</section>

<?php 
    $conn->close();
?>