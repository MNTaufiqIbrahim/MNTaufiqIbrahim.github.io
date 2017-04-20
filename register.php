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
					<div class="col-md-6 left">
						<a href="main.php" class="btn btn-default" name="home">Home</a>
					</div>
					<div class="col-md-6 right">
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					
					<form method="POST" class="registerForm" action="sql.php">
						<div class="form-group"><b>Fill in the form.</b></div>
						<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="name" id="name" class="form-control" placeholder= "Fullname" required/> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="ic_no" id="ic_no" class="form-control" placeholder="I/C No." /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" name="email" id="email" class="form-control" placeholder="Email" required /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
								<input type="text" name="phone" id="phone" class="form-control" placeholder="Phone No." required /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input type="text" name="address" id="address" class="form-control" placeholder="Address" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input type="text" name="city" id="city" class="form-control" placeholder="City" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input type="text" name="state" id="state" class="form-control" placeholder="State" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<select id="country" name="country" class="form-control">
									<option>Hong Kong</option>
									<option>India</option>
									<option>Indonesia</option>
									<option>Japan</option>
									<option>Malaysia</option>
									
								</select>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="username" id="username" class="form-control" placeholder="Username" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" name="password" id="password" class="form-control" placeholder="Password" /> 
							</div>
							<button class='btn btn-primary' name='btnRegister' id = 'btnRegister'>Register</button>
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