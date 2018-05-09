<?php include_once 'includes/templates/header.php'; ?>
        <!-- Middle text description -->
        <section class="section container">
            <h2>The best web development conference</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempora vitae ipsum consequuntur magni at! Molestias et, assumenda fugiat ab laudantium voluptatibus. Molestias, earum! Beatae fuga impedit adipisci deserunt magnam?</p>
        </section>

        <!-- Schedule of event -->
        <section class="program">
            <div class="video-container">
                <video autoplay loop poster="img/bg-talleres.jpg">
                    <source src="video/video.mp4" type="video/mp4">
                    <source src="video/video.webm" type="video/webm">
                    <source src="video/video.ogv" type="video/ogg">
                </video>
            </div>

            <div class="program-content">
                <div class="container">
                    <div class="event-program">
                        <h2>Event Program</h2>
                        <?php 
                            try{
                                require_once('includes/functions/db_conection.php');
                                $sql = 'select * from categoria_evento';
                                $result = $conn->query($sql);
                            }catch(\Exception $e){
                                echo $e->getMessage;
                            }
                        ?>

                        <nav class="program-menu">
                            <?php while($cat = $result->fetch_array(MYSQLI_ASSOC)) {?>
                                <a href="#<?php echo strtolower($cat['cat_evento'])?>">
                                    <i class="fas <?php echo $cat['icono'] ?>"></i><?php echo ($cat['cat_evento'])?>
                                </a>
                            <?php } ?>
                        </nav>

                        <?php 
                            try{
                                    require_once('includes/functions/db_conection.php');
                                    $sql = 'select evento_id, nombre_evento, fecha_evento, hora, cat_evento, icono, nombre_invitado, apellido_invitado ';
                                    $sql .= 'from eventos ';
                                    $sql .= 'inner join categoria_evento ';
                                    $sql .= 'on eventos.id_cat_evento = categoria_evento.id_categoria ';
                                    $sql .= 'inner join invitados ';
                                    $sql .= 'on eventos.id_inv = invitados.invitado_id ';
                                    $sql .= 'and eventos.id_cat_evento = 1 ';
                                    $sql .= 'order by evento_id limit 2; ';

                                    $sql .= 'select evento_id, nombre_evento, fecha_evento, hora, cat_evento, icono, nombre_invitado, apellido_invitado ';
                                    $sql .= 'from eventos ';
                                    $sql .= 'inner join categoria_evento ';
                                    $sql .= 'on eventos.id_cat_evento = categoria_evento.id_categoria ';
                                    $sql .= 'inner join invitados ';
                                    $sql .= 'on eventos.id_inv = invitados.invitado_id ';
                                    $sql .= 'and eventos.id_cat_evento = 2 ';
                                    $sql .= 'order by evento_id limit 2; ';

                                    $sql .= 'select evento_id, nombre_evento, fecha_evento, hora, cat_evento, icono, nombre_invitado, apellido_invitado ';
                                    $sql .= 'from eventos ';
                                    $sql .= 'inner join categoria_evento ';
                                    $sql .= 'on eventos.id_cat_evento = categoria_evento.id_categoria ';
                                    $sql .= 'inner join invitados ';
                                    $sql .= 'on eventos.id_inv = invitados.invitado_id ';
                                    $sql .= 'and eventos.id_cat_evento = 3 ';
                                    $sql .= 'order by evento_id limit 2; ';
                           
                                    $conn->multi_query($sql);
                                }
                                catch(\Exception $e){
                                    echo $e->getMessage;
                                }
                        ?>
                        <?php 
                            do {
                                $result = $conn->store_result();
                                $row = $result->fetch_all(MYSQLI_ASSOC); ?>

                                <?php $i = 0; ?>
                                <?php foreach($row as $event): ?>

                                    <?php if($i % 2 == 0) {?>
                                        <div id="<?php echo strtolower($event['cat_evento']) ?>" class="info hide clearfix">
                                    <?php } ?>

                                            <div class="event-detail">
                                                <h3><?php echo utf8_encode($event['nombre_evento']) ?></h3>
                                                <p><i class="fas fa-clock"></i><?php echo $event['hora'] ?></p>
                                                <p><i class="fas fa-clock"></i><?php echo $event['fecha_evento'] ?></p>
                                                <p><i class="fas fa-user"><?php echo $event['nombre_invitado'] . " " . $event['apellido_invitado'] ?></i></p>
                                            </div>
                                        
                                    <?php if($i % 2 == 1) {?>
                                            <a href="calendar.php" class="button float-right">More</a>
                                        </div> 
                                    <?php } ?>

                                    <?php $i++ ?>
                                <?php endforeach ?>
                                <?php $result->free() //liberar memoria consulta ?>
                        <?php } while ($conn->more_results() && $conn->next_result());?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Guests -->
        <?php include_once 'includes/templates/guests.php'; ?>

        <!-- Counter, parallax-->
        <div class="counter parallax">
            <div class="container">
                <ul class="event-resume clearfix">
                    <li>
                        <p class="number">0</p>Guests
                    </li>
                    <li>
                        <p class="number">0</p>Workshops
                    </li>
                    <li>
                        <p class="number">0</p>Days
                    </li>
                    <li>
                        <p class="number">0</p>Conferences
                    </li>
                </ul>
            </div>
        </div>

        <!-- Prices -->
        <section class="section prices">
            <h2>Prices</h2>
            <div class="container">
                <ul class="prices-list clearfix">
                    <li>
                        <div class="price-table">
                            <h3>One day</h3>
                            <p class="number">$30</p>
                            <ul>
                                <li>Free snacks</li>
                                <li>All Conferences</li>
                                <li>All workshops</li>
                            </ul>
                            <a href="#" class="button hollow">Buy</a>
                        </div>
                    </li>
                    <li>
                        <div class="price-table">
                            <h3>All days</h3>
                            <p class="number">$50</p>
                            <ul>
                                <li>Free snacks</li>
                                <li>All Conferences</li>
                                <li>All workshops</li>
                            </ul>
                            <a href="#" class="button">Buy</a>
                        </div>
                    </li>
                    <li>
                        <div class="price-table">
                            <h3>Two days</h3>
                            <p class="number">$45</p>
                            <ul>
                                <li>Free snacks</li>
                                <li>All Conferences</li>
                                <li>All workshops</li>
                            </ul>
                            <a href="#" class="button hollow">Buy</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <div class="map" id="map"></div>

        <!-- Testimonials -->
        <section class="section">
            <h2>Testimonials</h2>
            <div class="testimonials container clearfix">
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae perferendis repellat reiciendis recusandae facere officiis consequatur iste corrupti, quae eum autem dicta voluptas eligendi assumenda ex culpa consequuntur, in suscipit!</p>
                        <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt="Testimonial" >
                            <cite>Oswaldo Aponte Escobando<span>Asesor en @prisma</span></cite>
                        </footer>
                    </blockquote>
                </div>
        
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae perferendis repellat reiciendis recusandae facere officiis consequatur iste corrupti, quae eum autem dicta voluptas eligendi assumenda ex culpa consequuntur, in suscipit!</p>
                        <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt="Testimonial" >
                            <cite>Oswaldo Aponte Escobando<span>Asesor en @prisma</span></cite>
                        </footer>
                    </blockquote>
                </div>
    
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae perferendis repellat reiciendis recusandae facere officiis consequatur iste corrupti, quae eum autem dicta voluptas eligendi assumenda ex culpa consequuntur, in suscipit!</p>
                        <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt="Testimonial" >
                            <cite>Oswaldo Aponte Escobando<span>Asesor en @prisma</span></cite>
                        </footer>
                    </blockquote>
                </div> 
            </div>
        </section>

        <!-- Newsletter, parallax -->
        <div class="newsletter parallax">
            <div class="content container">
                <p>Subscribe to Newsletter </p>
                <h3>TPCAMP</h3>
                <a href="#mc_embed_signup" class="btn_newsletter button transparent">Register</a>
            </div>
        </div>
        
        <!-- Countdown -->
        <section class="section">
            <h2>Countdown</h2>
            <div class="countdown container">
                <ul class="clearfix">
                    <li><p id="days" class="number"></p> days</li>
                    <li><p id="hours" class="number"></p> hours</li>
                    <li><p id="minutes" class="number"></p> minutes</li>
                    <li><p id="seconds" class="number"></p> seconds</li>
                </ul>
            </div>
        </section>
        
<?php include_once 'includes/templates/footer.php'; ?>
 