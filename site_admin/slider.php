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
	<title>slider</title>
</head>

<body>
	<?php require "header.php"; ?>+
	<!-- start table slider -->
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addslider" data-whatever="@mdo">
					Add To slider</button>
				<div class="modal fade" id="addslider" tabindex="-1" role="dialog" aria-labelledby="addsliderLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="addsliderLabel">New Slider</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="add_slider_form">
									<div class="form-group">
										<input type="file" class="form-control  btn-warning" name="img_slider">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="heading" name="title" aria-describedby="basic-addon1">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="pragraph" name="desc" aria-describedby="basic-addon1">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" id="add_btn"> Add Slider </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--model Delete -->

			<div class="form col-lg-10 col-md-offset-2 marg">

				<div class="modal fade" id="deleteslider" tabindex="-1" role="dialog" aria-labelledby="addsliderLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="addsliderLabel">Delete Slider</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<div>Are you sure you want to delete this slider?</div>

								<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_slider_form">
									<div class="form-group">
										<input type="hidden" class="form-control" id="deleted_id" name="deleted_id">
									</div>
								</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" id="delete_btn"> Delete Slider </button>
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
								<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="edit_slider_form">
									<div class="form-group">
										<input type="hidden" class="form-control" id="edited_id" name="edited_id">
									</div>

									<div class="form-group">
										<img width="50px" height="50px" src="" id="edited_img" name="edited_img">
									</div>

									<div class="form-group">
										<input type="file" class="form-control  btn-info" name="edited_img" id="upload_img" onchange="changeimg();">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="heading" name="edited_title" id="edited_title" aria-describedby="basic-addon1">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="pragraph" name="edited_desc" id="edited_desc" aria-describedby="basic-addon1">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit"  id="edit_btn" class="btn btn-primary"> Edit Slider </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal edit -->
			<?php
			require 'connect_database.php';
			$sq1 = "select * from slider";
			$result = $conn->query($sq1);
			?>
			<div class="col-lg-10 col-md-offset-2">
				<table class="table ">
					<thead>

						<tr>
							<th>ID</th>
							<th>Heading</th>
							<th>Paragraph</th>
							<th>Image</th>
							<th>Edit</th>
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
							<td><img width="50" height="50" src="../course_site/images/slider/<?php echo $value['img']; ?>">
							</td>

							<td><button data-id="<?php echo $value['id']; ?>" data-title="<?php echo $value['title']; ?>" data-desc="<?php echo $value['description']; ?>" data-img="<?php echo $value['img']; ?>" id="edit" type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>

							<td><button data-slider_id="<?php echo $value['id']; ?>" id="delete" class="btn btn-danger" data-toggle="modal" data-target="#deleteslider"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
						</tr>
						<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<!-- end table slider -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	


		$(document).on('click', '#add_btn', function(a) {
			var data = new FormData(document.getElementById('add_slider_form'));
			$.ajax({
					type: 'POST',
					url: "add_slider.php",
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
			var data = new FormData(document.getElementById('edit_slider_form'));
			$.ajax({
					type: 'POST',
					url: "edit_slider.php",
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

		$(document).on('click', '#delete_btn', function(a) {
			var data = new FormData(document.getElementById('delete_slider_form'));
			$.ajax({
					type: 'POST',
					url: "delete_slider.php",
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
			var id = $(this).data("slider_id");

			$('#deleted_id').val(id);
		});

		$(document).on('click', '#edit', function(a) {
			var id = $(this).data("id");
			var title = $(this).data("title");
			var desc = $(this).data("desc");
			var img = $(this).data("img");

			$('#edited_title').val(title);
			$('#edited_id').val(id);
			$('#edited_desc').val(desc);
			$('#edited_img').attr('src', '../course_site/images/slider/' + img);

		});
	</script>
	<script type="text/javascript">
		function changeimg() 
		{
			var onRead = new FileReader();
			onRead.readAsDataURL(document.getElementById("upload_img").files[0]);
			onRead.onload = function(ofREvent){
			document.getElementById("edited_img").src = ofREvent.target.result;
		}

		}
		
	</script>
</body>

</html>