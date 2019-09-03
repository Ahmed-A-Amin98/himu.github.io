<?php 
	 require '../site_admin/connect_database.php';
	 $sq1= "select * from client";
			  $result=$conn->query($sq1);	
			  	?>
			  		

<section id="clients" class="parallax-section">
    <div class="container">
        <div class="clients-wrapper">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Clients Say About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                </div>
            </div>
            <div id="clients-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $first = true;
                    foreach ($result as $key => $value) {
                        echo "$first";

                        if ($first) {
                            $first = false; ?>
                            }
                            <li data-target="#clients-carousel" data-slide-to="<?php echo $key; ?>" class='active'></li>

                        <?php } else {         ?>
                            <li data-target="#clients-carousel" data-slide-to="<?php echo $key; ?>"></li>
                    <?php


                        }
                    } ?>
                </ol> <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                    foreach ($result as $key => $value) {
                        echo "$first";
                        if ($first) {
                            $first = false;
                            ?>
                            <div class="item active">
                                <div class="single-client">
                                    <div class="media">
                                        <img class="pull-left" src="images/clients/<?php echo $value['img'];?>" alt="">
                                        <div class="media-body">
                                            <blockquote>
                                                <p><?php echo $value['description'];?></p><small><?php echo $value['name'];?></small><a href="<?php echo $value['website'];?>"><?php echo $value['website'];?></a>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            } else {
                                ?>
                            <div class="item <?php if($key == 0) echo'active';?>">
                                <div class="single-client">
                                    <div class="media">
                                        <img class="pull-left" src="images/clients/client1.jpg" alt="">
                                        <div class="media-body">
                                            <blockquote>
                                                <p><?php echo $value['description'];?></p><small><?php echo $value['name'];?></small><a href="<?php echo $value['website'];?>"><?php echo $value['website'];?></a>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#clients-->