
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
		<header class="loging">
		<div class="container-fluid">
			<div class="edit ">
				<div class="ads ">
					<h3>Admin Panal</h3>
				</div>
				<form action="control.php" method="POST">
					<div class="form-group">
						<input type="text" name="username" id="username" placeholder="username" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" id="password" placeholder="password" class="form-control">
					</div>
					
					<div class="form-group">
						<input type="submit" id="login" class="form-control btn btn-info" value="Login Now">
					</div>
					
				</form>
			</div>
		</div>
	</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/JavaScript">
		$(document).on('click','#login',function(e){
			var username=$('#username').val();
			var password=$('#password').val();

			$.ajax({
				url:"himu.php",
				type:"post",
				data:{username:username,password:password},
				success:function(data){

					if (data=="T"){
						window.location.assign("control.php");
					}
					else{
						alert("failed");
					}
				}
			});
			e.preventDefault();
		});
	</script>
</body>
</html>