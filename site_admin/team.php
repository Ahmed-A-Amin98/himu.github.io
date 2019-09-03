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

<!-- start table Team -->
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Employee</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="add_team_form">
			          <div class="form-group">
			            <label for="select" class="form-control-label">select image</label>
			            <input type="file" class="form-control  btn-primary" id="img_add" name="img_add">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">Name</label>
					    <input type="text" class="form-control" placeholder="Name" id="name_add" name="name_add" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">Position</label>
					    <input type="text" class="form-control" placeholder="Position" id="pos_add" name="pos_add" aria-describedby="basic-addon1">
			          </div>
			           <div class="form-group">
			            <label for="content-text" class="form-control-label">description</label>
					    <input type="text" class="form-control  " placeholder="content" id="desc_add" name="desc_add" aria-describedby="basic-addon1">
			          </div>
			         
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" id="add_btn" class="btn btn-primary">Add Employee </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	

		<!-- model Edit  -->
		<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="Employee" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">edit Employee</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="edit_team_form">
		      
				<div class="form-group">
										<img width="50px" height="50px" src="" id="img_edit" name="img_edit">
									</div>
		          <div class="form-group">
		            <label for="select" class="form-control-label">select img</label>
		            <input type="file" class="form-control  btn-info" id="upload_img" name="img_edit" 
		            onchange="changeimg();">
		          </div>
		          <div class="form-group">
		            <label for="heading-text" class="form-control-label">Name</label>
				    <input type="text" class="form-control" placeholder="heading" id="name_edit" name="name_edit" aria-describedby="basic-addon1">
				     <input type="hidden" class="form-control" id="id_edit" name="id_edit">
		          </div>
		          <div class="form-group">
		            <label for="content-text" class="form-control-label">Job</label>
				    <input type="text" class="form-control" placeholder="content" id="pos_edit" name="pos_edit" aria-describedby="basic-addon1">
		          </div>
		           <div class="form-group">
		            <label for="content-text" class="form-control-label">description</label>
				    <input type="text" class="form-control  " placeholder="content" id="desc_edit" name="desc_edit" aria-describedby="basic-addon1">
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" id="edit_btn" class="btn btn-info">Edit Employee </button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- end modal edit -->	
		<!--model Delete -->

		<div class="form col-lg-10 col-md-offset-2 marg">

<div class="modal fade" id="deleteteam" tabindex="-1" role="dialog" aria-labelledby="addsliderLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addsliderLabel">Delete Employee</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div>Are you sure you want to delete this Employee?</div>

				<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_team_form">
					<div class="form-group">
						<input type="hidden" class="form-control" id="deleted_id" name="deleted_id">
					</div>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="delete_btn"> Delete Employee </button>
			</div>
		</div>
	</div>
</div>
</div>
<!-- end model Delete -->	

		<?php
			require 'connect_database.php';
			$sq1 = "select * from team";
			$result = $conn->query($sq1);
			?>

		<div class="col-lg-10 col-md-offset-2">	
			<table class="table ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>name</th>
			      <th>Position</th>
			      <th>Description</th>
			      <th>Image</th>
			      <th> Edit</th>
			      <th>Delete</th>
			      <th>Details</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php
						foreach ($result as $key => $value) {
							?>

						<tr>
							<th scope="row"><?php echo $key + 1; ?></th>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['position']; ?></td>
							<td><?php echo $value['description']; ?></td>
							<td><img width="50" height="50" src="../course_site/images/our-team/<?php echo $value['img']; ?>">
							</td>

							<td><button data-id="<?php echo $value['id']; ?>" data-name="<?php echo $value['name']; ?>" data-desc="<?php echo $value['description']; ?>" data-position="<?php echo $value['position']; ?>" data-img="<?php echo $value['img']; ?>" id="edit" type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>

							<td><button data-team_id="<?php echo $value['id']; ?>" id="delete" class="btn btn-danger" data-toggle="modal" data-target="#deleteteam"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
							<td><a href="team_details.php?id=<?php echo $value['id']?> " id="details" class="btn btn-info"><i class="fa fa fa-exclamation-circle" aria-hidden="true"></i></a></td>
						</tr>
						<?php } ?>
			</table>
		</div>
	</div>
</div>	
<!-- end table Employee -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 

$(document).on('click', '#add_btn', function(a) {
			var data = new FormData(document.getElementById('add_team_form'));
			$.ajax({
					type: 'POST',
					url: "add_team.php",
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



	
		$(document).on('click', '#edit_btn', function(a) {
			var data = new FormData(document.getElementById('edit_team_form'));
			$.ajax({
					type: 'POST',
					url: "edit_team.php",
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

		
		$(document).on('click', '#edit', function(a) {
			var id = $(this).data("id");
			var name = $(this).data("name");
			var desc = $(this).data("desc");
			var position = $(this).data("position");
			var img = $(this).data("img");

			$('#id_edit').val(id);
			$('#name_edit').val(name);
			$('#desc_edit').val(desc);
			$('#pos_edit').val(position);
			$('#img_edit').attr('src', '../course_site/images/our-team/' + img);

		});


		$(document).on('click', '#delete_btn', function(a) {
			var data = new FormData(document.getElementById('delete_team_form'));
			$.ajax({
					type: 'POST',
					url: "delete_team.php",
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
			a.preventDefault();

		});

		$(document).on('click', '#delete', function(a) {
			var id = $(this).data("team_id");

			$('#deleted_id').val(id);
		});


		</script>
	<script type="text/javascript">

		function changeimg() 
		{
			var onRead = new FileReader();
			onRead.readAsDataURL(document.getElementById("upload_img").files[0]);
			onRead.onload = function(ofREvent){
			document.getElementById("img_edit").src = ofREvent.target.result;
		}
		}
 		</script>

</body>
</html>
