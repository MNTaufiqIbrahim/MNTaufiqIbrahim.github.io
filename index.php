<!DOCTYPE html>
<html lang="en">
  <head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SodingApps</title>

    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<style>
		

	</style>
	
  </head>
  <body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 header">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					
					<form method="POST" class="loginForm" action="sql.php">
						<div class="form-group form-text"><b>Welcome to SodingApps! Please Login</b></div>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="username" id="username" class="form-control" placeholder="Username" />
							
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" />
							
						</div>
						<input type="submit" name="btnLogin" id="btnLogin" value="Login" class="btn btn-info" />
						<br><br>
						<br><br>
						<a class="btn btn-default register" id="registerPage" href="register.php">Register</a>
					</form>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
  </body>
</html>