<?php
include("connect.php");	
$user_name=$_SESSION['log_user'];
$sql = "SELECT * FROM admin where ad_username='$user_name'";
					$result = mysqli_query($con, $sql);
					$rows=mysqli_fetch_assoc($result);
					$name=$rows["ad_username"];
					?>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<div class="menupad">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="addnew.php">Add New</a></li>
<li><a href="">Search</a>
<ul>
<li><a href="search.php">Simple Search</a></li>

</ul>
</li>
<li><a href=""><?php echo $name; ?></a>
<ul>
<li><a href="logout.php">Logout</a></li>
</ul>
</li>
</ul>
</div>
</body>
</html>
