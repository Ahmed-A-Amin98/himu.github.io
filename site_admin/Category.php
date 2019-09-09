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
<!-- start table slider -->
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add to Categories</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="add_cat_form">
			          <div class="form-group">
			            <label for="name_add" class="form-control-label">Name</label>
			            <input type="text" class="form-control  btn-secondary" id="name_add" name="name_add">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" id="add_btn" class="btn btn-primary">Add Category </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	

	<!-- model Edit  -->
    <div class="form col-lg-10 col-md-offset-2 ">
				<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="EditLabel">Edit Category</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="edit_cat_form">
									<div class="form-group">
										<input type="hidden" class="form-control" id="id_edit" name="id_edit">
								
									<div class="form-group">
                                    <label for="name_edit" class="form-control-label">Name</label>
										<input type="text" class="form-control" placeholder="Name" name="name_edit" id="name_edit" aria-describedby="basic-addon1">
									</div>
								
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit"  id="edit_btn" class="btn btn-primary"> Edit Category </button>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- end modal edit -->
            <!--model Delete -->

			<div class="form col-lg-10 col-md-offset-2 marg">

<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="addsliderLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addsliderLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div>Are you sure you want to delete this Category?</div>

                <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data" id="delete_cat_form">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_delete" name="id_delete">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="delete_btn"> Delete Category </button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end model Delete -->


		<?php
			require 'connect_database.php';
			$sq1 = "select * from category";
			$result = $conn->query($sq1);
			?>
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>Name</th>
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
							<td><?php echo $value['name']; ?></td>
							

							<td><button data-id="<?php echo $value['id']; ?>" data-name="<?php echo $value['name']; ?>" id="edit" type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>

							<td><button data-cat_id="<?php echo $value['id']; ?>" id="delete" class="btn btn-danger" data-toggle="modal" data-target="#Delete"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
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
			var data = new FormData(document.getElementById('add_cat_form'));
			$.ajax({
					type: 'POST',
					url: "add_category.php",
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
			var data = new FormData(document.getElementById('edit_cat_form'));
			$.ajax({
					type: 'POST',
					url: "edit_category.php",
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

			$('#name_edit').val(name);
			$('#id_edit').val(id);
	

		});
        $(document).on('click', '#delete_btn', function(a) {
			var data = new FormData(document.getElementById('delete_cat_form'));
			$.ajax({
					type: 'POST',
					url: "delete_category.php",
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
			var id = $(this).data("cat_id");

			$('#id_delete').val(id);
		});

 </script>
</body>
</html>