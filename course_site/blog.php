<?php 
	 require '../site_admin/connect_database.php';
	 $sq1= "select blog.* , team.name as team_name from blog inner join team on team_id =team.id";
			  $result=$conn->query($sq1);	
			  	?>

					<section id="blog"> 
						<div class="container">
							<div class="row text-center clearfix">
								<div class="col-sm-8 col-sm-offset-2">
									<h2 class="title-one">Our Blog</h2>
									<p class="blog-heading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								</div>
							</div> 
							<div class="row">
                                <?php foreach ($result as $key => $value){  ?>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/blog/<?php echo $value['img']; ?>" alt="" />
										<h2><?php echo $value['title']; ?></h2>
										<ul class="post-meta">
											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> <?php echo $value['team_name']; ?></li>
											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> <?php echo $value['created_at']; ?></li>
										</ul>
										<div class="blog-content">
											<p><?php echo $value['description']; ?></p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-detail">Read More</a>
									</div>
									<div class="modal fade" id="blog-detail" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<img src="images/blog/<?php echo $value['img']; ?>" alt="" />
													<h2><?php echo $value['title']; ?></h2>
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
												</div> 
											</div>
										</div>
									</div>
                                </div>
                                <?php } ?>
								</div> 
							</div> 
						</section> <!--/#blog-->