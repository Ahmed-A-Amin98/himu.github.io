<?php 
	 require '../site_admin/connect_database.php';
	 $sq1= "select * from team";
			  $result=$conn->query($sq1);	
			  	?>

<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Meet The Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
					</div>
				</div>
				<div id="team-carousel" class="carousel slide" data-interval="false">
					<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					<div class="carousel-inner team-members">
                        
                    <div class="row item active">
                    <?php                   foreach ($result as $key => $value){ 
                        $id = $value['id'];
                         $sq2= "select * from team_social 
                         inner join social_media on team_social.social_id = social_media.id
                         where team_id= $id ";
                         $links=$conn->query($sq2);	
                        ?>

							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/<?php echo $value['img']; ?> " alt="team member" />
									<h4><?php echo $value['name'] ?></h4>
									<h5><?php echo $value['position'] ?></h5>
									<p><?php echo $value['description'] ?></p>
									<div class="socials">
                                    <?php       foreach ($links as $key => $link){  ?>

										<a href="<?php echo $link['link']?>"><i class="fa <?php echo $link['icon']?>"></i></a>
                                    <?php } ?>
									</div>
								</div>
                            </div>
                    <?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#Our-Team-->