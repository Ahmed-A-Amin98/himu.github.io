<?php 
	 require '../site_admin/connect_database.php';
	 $sq1= "select * from service";
			  $result=$conn->query($sq1);	
			  	?>


<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
                            <?php                   foreach ($result as $key => $value){  ?>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa <?php echo $value['icon'] ?>"></i>
									<h2><?php echo $value['title'] ?></h2>
									<p> <?php echo $value['description']  ?> </p>
								</div>
                            </div>
                            
                            <?php } ?>
							
                        </div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#service-->