<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>
	<?php require "header.php" ;?>
<!-- start  about -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#about" data-whatever="@mdo">Add To Section</button>
			<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="aboutLabel">New Section</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
				  <div class="modal-body">
			        <form id="add_section_form">
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title:</label>
					    <input type="text" class="form-control" placeholder="title" name="title" id="add_section_title" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="pragraph-text" class="form-control-label">Description:</label>
					    <input type="text" class="form-control" placeholder="Description" name="description" id="add_desc" aria-describedby="basic-addon1">
					  </div>
					  <div class="form-group">
			            <label for="pragraph-text" class="form-control-label">Section name:</label>
					    <input type="text" class="form-control" placeholder="Section name" name="section_name" id="add_section_name" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" id="Add_Section_btn" class="btn btn-primary">Add Section </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	

		<!--model Delete -->

		<div class="form col-lg-10 col-md-offset-2 marg">

<div class="modal fade" id="deletesection" tabindex="-1" role="dialog" aria-labelledby="addsliderLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addsliderLabel">Delete Section</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div>Are you sure you want to delete this section?</div>

				<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_section_form">
					<div class="form-group">
						<input type="hidden" class="form-control" id="deleted_section_id" name="deleted_section_id">
					</div>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="delete_section_btn"> Delete Section </button>
			</div>
		</div>
	</div>
</div>
</div>
<!-- end model Delete -->
	<!-- model Edit  -->
	<div class="form col-lg-10 col-md-offset-2 ">
				<div class="modal fade" id="Editsection" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="EditLabel">Edit Slider</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="edit_section_form">
									<div class="form-group">
										<input type="hidden" class="form-control" id="edited_section_id" name="edited_section_id">
									</div>
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="title" name="edited_title" id="edited_title" aria-describedby="basic-addon1">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Description" name="edited_description" id="edited_description" aria-describedby="basic-addon1">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Section name" name="edited_section_name" id="edited_section_name" aria-describedby="basic-addon1">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit"  id="edit_section_btn" class="btn btn-primary"> Edit Section </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal edit -->

		<!-- show table about -->

		<?php
			require 'connect_database.php';
			$sq1 = "select * from section";
			$result = $conn->query($sq1);
			?>
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>description</th>
				      <th>Section name</th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
					
				  <?php
						foreach ($result as $key => $value) {
							?>

						<tr>
							<th scope="row"><?php echo $key + 1; ?></th>
							<td><?php echo $value['title']; ?></td>
							<td><?php echo $value['description']; ?></td>
							<td><?php echo $value['section_name']; ?></td>
							</td>

							<td><button data-sectionid="<?php echo $value['id']; ?>" data-title="<?php echo $value['title']; ?>" data-description="<?php echo $value['description']; ?>" data-section_name="<?php echo $value['section_name']; ?>"  id="Edit_section" type="button" class="btn btn-info" data-toggle="modal" data-target="#Editsection" data-whatever="@mdo" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>

							<td><button data-section_id="<?php echo $value['id']; ?>" id="delete_section" class="btn btn-danger" data-toggle="modal" data-target="#deletesection"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
						</tr>
						<?php } ?>
					  
				</table>
			</div>
		</div>
	</div>	
<!-- end show table about -->

<!--  -->

<!-- start  skills -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 ">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#skills" data-whatever="@mdo">Add To Skills</button>
			<div class="modal fade" id="skills" tabindex="-1" role="dialog" aria-labelledby="Edieskiles" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="Edieskiles">New Skills</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="add_skill_form">
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title:</label>
					    <input type="text" class="form-control" placeholder="title" name="Name" id="add_title" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="pragraph-text" class="form-control-label">rate:</label>
					    <input type="text" class="form-control" placeholder="rate" name="skill_value" id="add_rate" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" id="Add_Skill_btn" class="btn btn-primary">Add Skills </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

		
			<!--model Delete -->

			<div class="form col-lg-10 col-md-offset-2 marg">

				<div class="modal fade" id="deleteskill" tabindex="-1" role="dialog" aria-labelledby="addsliderLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="addsliderLabel">Delete Skill</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<div>Are you sure you want to delete this skill?</div>

								<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_skill_form">
									<div class="form-group">
										<input type="hidden" class="form-control" id="deleted_id" name="deleted_id">
									</div>
								</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" id="delete_btn"> Delete Skill </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end model Delete -->
			<!-- model Edit  -->
			<div class="form col-lg-10 col-md-offset-2 ">
				<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="EditLabel">Edit Slider</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="edit_skill_form">
									<div class="form-group">
										<input type="hidden" class="form-control" id="edited_id" name="edited_id">
									</div>
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="heading" name="edited_Name" id="edited_Name" aria-describedby="basic-addon1">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="pragraph" name="edited_skill_value" id="edited_skill_value" aria-describedby="basic-addon1">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit"  id="edit_btn" class="btn btn-primary"> Edit Skill </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal edit -->

		<!--  show table skills -->
		<?php
			require 'connect_database.php';
			$sq1 = "select * from skill";
			$result = $conn->query($sq1);
			?>
		
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>rate </th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				  <?php
						foreach ($result as $key => $value) {
							?>

						<tr>
							<th scope="row"><?php echo $key + 1; ?></th>
							<td><?php echo $value['Name']; ?></td>
							<td><?php echo $value['skill_value']; ?></td>
							</td>

							<td><button data-id="<?php echo $value['id']; ?>" data-x="<?php echo $value['Name']; ?>" data-skill_value="<?php echo $value['skill_value']; ?>"  id="Edit" type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>

							<td><button data-skill_id="<?php echo $value['id']; ?>" id="delete" class="btn btn-danger" data-toggle="modal" data-target="#deletesection"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
						</tr>
						<?php } ?>
		</table>
			</div>
		</div>
	</div>	
<!-- end table skllis -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 

 $(document).on('click', '#Add_Skill_btn', function(a) {
			var data = new FormData(document.getElementById('add_skill_form'));
			$.ajax({
					type: 'POST',
					url: "add_skills.php",
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

		$(document).on('click', '#delete', function(a) {
			var id = $(this).data("skill_id");

			$('#deleted_id').val(id);
		});


		$(document).on('click', '#delete_btn', function(a) {
			var data = new FormData(document.getElementById('delete_skill_form'));
			$.ajax({
					type: 'POST',
					url: "delete_skill.php",
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

		$(document).on('click', '#Edit', function(a) {
			var id = $(this).data("id");
			var Name = $(this).data("x");
			var skill_value = $(this).data("skill_value");
			$('#edited_Name').val(Name);
			$('#edited_id').val(id);
			$('#edited_skill_value').val(skill_value);

		});


		
		$(document).on('click', '#edit_btn', function(a) {
			var data = new FormData(document.getElementById('edit_skill_form'));
			$.ajax({
					type: 'POST',
					url: "edit_skill.php",
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




		$(document).on('click', '#Add_Section_btn', function(a) {
			var data = new FormData(document.getElementById('add_section_form'));
			$.ajax({
					type: 'POST',
					url: "add_section.php",
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
		$(document).on('click', '#delete_section', function(a) {
			var id = $(this).data("section_id");

			$('#deleted_section_id').val(id);
		});

		$(document).on('click', '#delete_section_btn', function(a) {
			var data = new FormData(document.getElementById('delete_section_form'));
			$.ajax({
					type: 'POST',
					url: "delete_section.php",
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
		$(document).on('click', '#Edit_section', function(a) {
			var id = $(this).data("sectionid");
			var title = $(this).data("title");
			var description = $(this).data("description");
			var section_name= $(this).data("section_name");
			$('#edited_title').val(title);
			$('#edited_section_name').val(section_name);
			$('#edited_section_id').val(id);
			$('#edited_description').val(description);

		});
		$(document).on('click', '#edit_section_btn', function(a) {
			var data = new FormData(document.getElementById('edit_section_form'));
			$.ajax({
					type: 'POST',
					url: "edit_section.php",
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
</body>
</html>