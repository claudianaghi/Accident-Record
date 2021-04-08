<?php
include("connect.php");
?>
<html>
<head>
<title>Police Accident Records Management System
</title>
<style>
#txt
{
	width:250px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}

#btn
{
	background-color:#1e5799;
	border-style:none;
	width:100px;
	height:30px;
	border-radius:4px;
	color:white;
}
#btn:hover{
background-color:#1e5700;
color:#000;
}
.loginpad
{
padding-left:20px;
}
</style>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<center>
<h1>Police Accident Records Management System</h1>
<hr>
  <div class="container">
  <br>
	<br>
	<br>
	<br>
	<div class="section"><br>
	
	<div class="loginpad">
	<br>
	<form action="" method="post">
		<input type="text" name="user" id="txt" placeholder="Username" required>
		<br>
		<br>
		<input type="Password" id="txt" name="pwd" placeholder="Password" required>
		<br>
		<br>
		<input type="submit" name="btnlogin" id="btn" value="Login">
		</form>
	</div>
	</div>
  </div>
  
</center>
 <?php
if(isset($_POST["btnlogin"]))
{
function validate_input($data) 
		{
  			 $data = trim($data);
  			 $data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
			$uname = validate_input($_POST["user"]);
			$pwd = validate_input($_POST["pwd"]);
		if($uname =="" || $pwd=="")
		{
			echo "<script> alert('Please Fill The required Field!');</script>";
			return;
		}
		else
		{
			$sql = "SELECT * FROM admin where ad_username='$uname' and ad_password='$pwd'";
					$result = mysqli_query($con, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
   						session_start();
						$_SESSION['log_user']=$uname;
						setcookie('user_n',$uname,time() + 86400*30,'/');
						setcookie('user_p',$pwd,time() + 86400*30,'/');
						header("location:home.php");
					} 
					else
					{  				
						echo "<script> alert('Invalid Username or Password!');</script>";
						return;
					}		
}
}
?>
</body>
</html>