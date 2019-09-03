<?php 
	 require '../site_admin/connect_database.php';
	 $sq1= "select * from contact";
			  $result=$conn->query($sq1);	
			  	?>
<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Contact With Us</h2>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="contact-details">
									<div class="pattern"></div>
									<div class="row text-center clearfix">
										<div class="col-sm-6">
											<div class="contact-address"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>
												<div class="social-icons">
													<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
													<a href="#"><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
										</div>
										<div class="col-sm-6"> 
											<div id="contact-form-section">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="contact-form" class="contact" name="contact-form" method="post" action="#">
													<div class="form-group">
														<input  id="name" type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
														<div class="form-group">
															<input id="email" type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
														</div> 
														<div class="form-group">
															<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
														</div> 
														<div class="form-group">
															<button id="send_message" type="submit" class="btn btn-primary">Send</button>
														</div>
													</form> 
												</div>
											</div>
										</div>
									</div>
								</div> 
							</section> <!--/#contact--> 

							<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

							<script type="text/javascript">
		
		
$(document).on('click', '#send_message', function(a) {
			var data = new FormData(document.getElementById('contact-form'));
			
			$.ajax({
					type: 'POST',
					url: "message.php",
					data: data,
					async: false,
					processData: false,
					contentType: false,
				})
				.done(function(data) {
					console.log(data);
					if (data == "success") {
						window.location.reload();
					} else {
						alert("failed");

					}
				});
		});



  </script>