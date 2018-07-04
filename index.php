<?php

		require_once('Admin/conn.php');
		session_start();
	
		if (isset($_POST['email'])){
			
			$email = trim($_REQUEST['email']);
			$password = trim($_REQUEST['password']);
		
			//Checking is user existing in the database or not
			$query = "SELECT * FROM `user_reg` WHERE email='$email' and password='".md5($password)."'";
			$result = mysqli_query($link,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			if($rows==1){
				$_SESSION['email'] = $email;
				// Redirect user to index.php
				header("Location: userhome.php");
			}else{
				header("Location: index.php");
			}
		}else{
?>


<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="images/icon.png" rel="icon">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse top-menu">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">NAG</a>
			</div>
			<div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Registration</a><li>
				<li><a href="#" style="color:#fff"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="container">
			<div class="panel panel-primary admin-login">
				<div class="panel-heading"><h3>Login</h3></div>
				<div class="panel-body">
				<form class="form-horizontal" method="post" role="form">
					  <div class="form-group">
						<label class="control-label col-sm-3">Email</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-3">Password</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="password" placeholder="Enter Password" required>
						</div>
					  </div>
					  
					  <div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-9">
						  <button type="submit" class="btn btn-success">Login</button>
						  
						</div>
					  </div>
					 </form>
				</div>
			</div>
		</div>
		</body>
</html>
<?php
		}
	require_once('Admin/dbconclose.php');
?>