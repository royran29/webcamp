<?php include_once 'includes/templates/header.php'; ?>

        <section class="section container">
            <h2>Events Calendar</h2>
            
            <?php 
                try{
                    require_once('includes/functions/db_conection.php');
                    $sql = 'select evento_id, nombre_evento, fecha_evento, hora, cat_evento, icono, nombre_invitado, apellido_invitado ';
                    $sql .= 'from eventos ';
                    $sql .= 'inner join categoria_evento ';
                    $sql .= 'on eventos.id_cat_evento = categoria_evento.id_categoria ';
                    $sql .= 'inner join invitados ';
                    $sql .= 'on eventos.id_inv = invitados.invitado_id ';
                    $sql .= 'order by evento_id';
                    $result = $conn->query($sql);
            

                }catch(\Exception $e){
                    echo $e->getMessage;
                }

            ?>

            <div class="calendar">
                <?php
                    /*Group the events by date in a multidimentional array*/
                    $calendar = array();
                    while($events = $result->fetch_assoc()){ 
                        $date = $events['fecha_evento'];
                        $event = array(
                            'titulo' => $events['nombre_evento'],
                            'fecha' => $events['fecha_evento'],
                            'hora' => $events['hora'],
                            'categoria' => $events['cat_evento'],
                            'icono' =>  $events['icono'],
                            'invitado' => $events['nombre_invitado'] . ' ' . $events['apellido_invitado']
                        );

                        $calendar[$date][] = $event;
                    }
                ?>
                <?php foreach ($calendar as $day => $event_list) {?>  
                    <h3>
                        <i class="fa fa-calendar-alt"></i>
                        <?php 

                             //Unix
                            //setlocale(LC_TIME, 'es_ES.UTF-8');

                            //windows
                            setlocale(LC_TIME, 'spanish');

                            echo strftime('%A, %d de %B del %Y', strtotime($day)); 
                        ?>
                    </h3>
                    
                    <?php foreach ($event_list as $event) { ?>
                        <div class="day">
                            <p class="title"><?php echo  $event['titulo']; ?></p>

                            <p class="hour">
                                <i class="fas fa-clock" aria-hidden="true"></i>
                                <?php echo $event['fecha'] . ' ' . $event['hora']; ?>
                            </p>

                            <p>
                                <i class="<?php echo 'fas ' .  $event['icono'] ?>" aria-hidden="true"></i>
                                <?php echo  $event['categoria']; ?>
                            </p>

                            <p>
                                <i class="far fa-user" aria-hidden="true"></i>
                                <?php echo $event['invitado']; ?>
                            </p>
                        </div>
                    <?php } //end foreach events ?>
                <?php } //end foreach days ?>
            </div>

            <?php 
                $conn->close();
            ?>
        </section>

   <?php include_once 'includes/templates/footer.php'; ?>