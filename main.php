<?php
	session_start();
	$user_check=$_SESSION['login_user'];
	if(!isset($user_check)){
		header("location:index.php");
	}
?>
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
	<script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Do you want to continue ?");
               if( retVal == true ){
                  window.location = 'sql.php?action=delete';
                  return true;
               }
               else{
                  //document.write ("User does not want to continue!");
                  return false;
               }
            }
         //-->
      </script>
	
  </head>
  <body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 header">
					
					<div class="col-md-6 left">
						<a href="main.php" class="btn btn-default" name="main">Home</a>
					</div>
					<div class="col-md-6 right">
						<a href="sql.php?action=logout" class="btn btn-danger" name="logout">Logout</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<?php
						//show form when update button clicked
						if(isset($_GET['action'])){
							
							class MyDB extends SQLite3
							   {
								  function __construct()
								  {
									 $this->open('soding.db');
								  }
							   }
							   $db = new MyDB();
							   if(!$db){
								  echo $db->lastErrorMsg();
							   } else {
								  //echo "Opened database successfully\n";
							   }

							   $sql ="SELECT * from user_info WHERE username='$user_check'";

							   $ret = $db->query($sql);
							   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
								  
							   
					?>
						<form method="POST" class="registerForm" action="sql.php">
						<div class="form-group"><b>Update Your Profile.</b></div>
						<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name']; ?>" placeholder= "Fullname" required/> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="ic_no" id="ic_no" class="form-control" value="<?php echo $row['ic_no']; ?>" placeholder="I/C No." /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email" required /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
								<input type="text" name="phone" id="phone" class="form-control" value="<?php echo $row['phone_no']; ?>" placeholder="Phone No." required /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input type="text" name="address" id="address" class="form-control" value="<?php echo $row['address']; ?>" placeholder="Address" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input type="text" name="postal_code" id="postal_code" class="form-control" value="<?php echo $row['postal_code']; ?>" placeholder="Postal Code" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input type="text" name="city" id="city" class="form-control" value="<?php echo $row['city']; ?>" placeholder="City" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input type="text" name="state" id="state" class="form-control" value="<?php echo $row['state']; ?>" placeholder="State" /> 
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<select id="country" name="country" class="form-control">
									<option><?php echo $row['country'];?></option>
									<option>Hong Kong</option>
									<option>India</option>
									<option>Indonesia</option>
									<option>Japan</option>
									<option>Malaysia</option>
								</select>
							</div>
							<div class="form-group input-group" style="display:none;">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username'];?>"placeholder="Username" /> 
							</div>
							<button class='btn btn-primary' name='btnUpdate' id='btnRegister'>Update</button>
					</form>
					<?php	
							}
							   //echo "Operation done successfully\n";
							   $db->close();
						}else{
							
					?>
						
						<table class="table">
							<thead>
								<tr>
									<td>Your Information</td>
									<td><a href="main.php?action=update">Update Profile</a></td>
									<td><a href="#" onclick="getConfirmation();">Delete Profile</a></td>
								</tr>
							</thead>
							<tbody>
							<?php
								class MyDB extends SQLite3
							   {
								  function __construct()
								  {
									 $this->open('soding.db');
								  }
							   }
							   $db = new MyDB();
							   if(!$db){
								  echo $db->lastErrorMsg();
							   } else {
								  //echo "Opened database successfully\n";
							   }

							   $sql ="SELECT * from user_info WHERE username='$user_check'";

							   $ret = $db->query($sql);
							   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
								?>	
								<tr>
									<td>Name</td>
									<td colspan='2'><?php echo $row['name'];?></td>
								</tr><tr>
									<td>I/C No.</td>
									<td colspan='2'><?php echo $row['ic_no'];?></td>
								</tr><tr>
									<td>Email</td>
									<td colspan='2'><?php echo $row['email'];?></td>
								</tr><tr>
									<td>Phone No.</td>
									<td colspan='2'><?php echo $row['phone_no'];?></td>
								</tr><tr>
									<td>Address</td>
									<td colspan='2'><?php echo $row['address'];?></td>
								</tr><tr>
									<td>Postal Code</td>
									<td colspan='2'><?php echo $row['postal_code'];?></td>
								</tr><tr>
									<td>City</td>
									<td colspan='2'><?php echo $row['city'];?></td>
								</tr><tr>
									<td>State</td>
									<td colspan='2'><?php echo $row['state'];?></td>
								</tr><tr>
									<td>Country</td>
									<td colspan='2'><?php echo $row['country'];?></td>
								</tr><tr>
									<td>Username</td>
									<td colspan='2'><?php echo $row['username'];?></td>
								</tr>
							   <?php } ?>
							</tbody>
						</table>
					<?php		
						}
					?>
					
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