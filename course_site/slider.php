	 <?php 
	 require '../site_admin/connect_database.php';
	 $sq1= "select * from slider";
			  $result=$conn->query($sq1);	
			  	?>
			  		
	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<?php
				$first =true ;
				   foreach ($result as $key => $value){ 
				echo "$first";

				if($first)
				{
					$first = false; ?>
				}
				<li data-target="#main-carousel" data-slide-to="<?php echo $key;?>" class='active'></li>
				
			<?php }
			else{ 		?>
					<li data-target="#main-carousel" data-slide-to="<?php echo $key;?>"></li>
			<?php
			

			}
		} ?>
				
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<?php
                  foreach ($result as $key => $value){
					  echo "$first";
					  if($first){
						  $first=false;
						  ?>
						  <div class="item active" style="background-image: url(images/slider/<?php echo $value['img']; ?>)">
						  	<div class="carousel-caption"> 
								<div> 
							<h2 class="heading animated bounceInDown"><?php echo $value['title'];?></h2> 
							<p class="animated bounceInUp"><?php echo $value['description'];?></p> 
							<a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a> 
								</div> 
							</div> 
						  </div>
					  <?php 
					  } else{ 
			  	?>
				<div class="item <?php if($key == 0) echo'active';?>" style="background-image: url(images/slider/<?php echo $value['img']; ?>)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown"><?php echo $value['title'];?></h2> 
							<p class="animated bounceInUp"><?php echo $value['description'];?></p> 
							<a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a> 
						</div> 
					</div> 
				</div>
			<?php }
			} ?>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidn-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--/#home-->