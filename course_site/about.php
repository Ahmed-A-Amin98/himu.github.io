<?php 
require '../site_admin/connect_database.php';
$sq1 = "select * from skill";
$skills = $conn->query($sq1);

$sq2 = "select * from with_us";
$with_us1 = $conn->query($sq2);

?>

<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">Why With Us?</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<div class="about-us">
			<div class="row">
				<div class="col-sm-6">
					<h3>Why with us?</h3>
					<ul class="nav nav-tabs">
                        <?php foreach ($with_us1 as $key => $value) {?>
						<li class="tab-pane fade in <?php if($key==0) echo "active" ?>"><a href="#<?php echo $value["title"]?>" data-toggle="tab"><i class="fa <?php echo $value["icon"]?>"></i> <?php echo $value["title"]?></a></li>
                        <?php }?>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in <?php if($key==0) echo "active" ?>" id="<?php echo $value["title"]?>">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/<?php echo $value["img"]?>" alt="about us"> 
								<div class="media-body">
									<p><?php echo $value["description"]?></p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-sm-6">
					<h3>Our Skills</h3>
					<div class="skill-bar">
                        <?php 
                        foreach ($skills as $key => $skill) {

                        ?>
						<div class="skillbar clearfix " data-percent="90%">
							<div class="skillbar-title">
								<span><?php echo $skill['Name']?></span>
							</div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent"><?php echo $skill['skill_value']?></div>
                        </div> <!-- End Skill Bar -->
                        <?php } ?>
                    </div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#about-us-->