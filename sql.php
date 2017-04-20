
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
	
		
	if(isset($_POST["btnRegister"])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$ic_no = $_POST['ic_no'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$postal_code = $_POST['postal_code'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		$sql_check ="SELECT * from user_info WHERE username = '$username'";

		$ret_check = $db->query($sql_check);
		$row_check = $ret_check->fetchArray(SQLITE3_ASSOC);
		
 		if(!empty($row_check)){ 				//check if username value has existed in database
			
			echo "<script type='text/javascript'>";
			  
			echo "alert('Username has existed!');";
			echo "window.history.back();";
			echo "</script>";
			
			
		}else{									// if username not exist, insert data to database
			
			
			//create  
			$sql ="INSERT INTO user_info (name,ic_no,email,phone_no,address,postal_code,city,state,country,username,password) 
			VALUES ('$name', '$ic_no', '$email', '$phone', '$address', '$postal_code', '$city', '$state', '$country', '$username', 
			'$password')"; 
				
			$ret = $db->exec($sql);
			if(!$ret){
			   echo $db->lastErrorMsg();
			} else {
			   
			   echo "<script type='text/javascript'>";
			  
			   echo "alert('You have successfully registered');";
			   echo "window.location = 'index.php';";
			   echo "</script>";
			}
			$db->close();
			
			
			
			
		}	
		

		
	}else if(isset($_POST["btnLogin"])){ // execute when button login clicked
		
		$uname = $_POST['username'];
		$pword = md5($_POST['password']);
		$sql_check = "SELECT * from user_info WHERE username = '$uname' AND password = '$pword'";

		  
		$ret_check = $db->query($sql_check);
		$row_check = $ret_check->fetchArray(SQLITE3_ASSOC);
		
 		if(!empty($row_check)){ 				//check if username value has existed in database
			header("location:main.php");
			session_start();// Starting Session
			// Storing Session
			$_SESSION['login_user']=$uname;
			
		}else{									// if username not exist, insert data to database
			
			
			   
			   //alert when username or password wrong
			   echo "<script type='text/javascript'>";
			   echo "alert('Wrong username or password');";
			   echo "window.location = 'index.php';";
			   echo "</script>";
			
			
		}	
		   
		   
		   
		   
		   //echo "Operation done successfully\n";
		   $db->close();
		
		
		
	}else if(isset($_POST['btnUpdate'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$ic_no = $_POST['ic_no'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$postal_code = $_POST['postal_code'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$username = $_POST['username'];
		
		
		$sql ="UPDATE user_info SET name = '$name', ic_no = '$ic_no', email = '$email', 
		phone_no = '$phone', address = '$address', postal_code = '$postal_code', 
		city = '$city', state = '$state', country='$country' WHERE username = '$username'";
	   $ret = $db->exec($sql);
	   if(!$ret){
		  echo $db->lastErrorMsg();
	   } else {
		  //echo $db->changes(), " Record updated successfully\n";
		  
		echo "<script type='text/javascript'>";	  
		echo "alert('Your profile have been updated');";
		echo "window.location = 'main.php';";
		echo "</script>";
		  
	   }
		
	}else if(isset($_GET['action'])){
		
		if($_GET['action'] == 'logout'){
			session_start();
			if(session_destroy()) // Destroying All Sessions
			{
			header("Location: index.php"); // Redirecting To Home Page
			}
			
		}else if($_GET['action'] == 'delete'){
			session_start();
			$user_check=$_SESSION['login_user'];
			$sql ="DELETE from user_info where username='$user_check'";
			$ret = $db->exec($sql);
			if(!$ret){
				echo $db->lastErrorMsg();
			} else {
				session_start();
				if(session_destroy()) // Destroying All Sessions
				{
				header("Location: index.php"); // Redirecting To Home Page
				}
			}
			
		}
		
	}else{
		
		echo "Invalid command";
		
	}	
	
			
		
   
   
?>