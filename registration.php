<!DOCTYPE html>
<?php
require_once('Admin/conn.php');
session_start();
	if (isset($_REQUEST['email'])){
			// removes backslashes
			$email = trim($_REQUEST['email']);
			$firstname = trim($_REQUEST['fnm']);
			$lastname = trim($_REQUEST['lnm']);
			$gender = trim($_REQUEST['gender']);
			$password = trim($_REQUEST['pwd']);
			$confpassword = trim($_REQUEST['confirmpwd']);
			$contactno = trim($_REQUEST['contact']);
			$addr1 = trim($_REQUEST['add1']);
			$addr2 = trim($_REQUEST['add2']);
			$addr3 = trim($_REQUEST['add3']);
			if( $password !=$confpassword){
				header("Location: registration.php");
			}else{
				$query = "INSERT INTO `user_reg`(`fname`, `lname`, `gender`, `contact`, `email`, `password`, `add1`, `add2`, `add3`)
				VALUES ('$firstname','$lastname','$gender','$contactno','$email','".md5($password)."','	$addr1','	$addr2','	$addr3')";
				$result = mysqli_query($link,$query);
				if($result){
					$_SESSION['email'] = $email;
					// Redirect user to index.php
					header("Location: userhome.php");
				}else{
					header("Location: registration.php");
				}
			}
	}else{

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration</title>
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
				<li><a href="#" style="color:#fff"><span class="glyphicon glyphicon-user"></span> Registration</a><li>
				<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="container">
			<div class="panel panel-primary admin-login">
				<div class="panel-heading">
					<h3>Registration</h3>
				</div>
				<div class="panel-body">
				<form class="form-horizontal" role="form" id="register" method="post">
					  <div class="form-group">
						<label class="control-label col-sm-3" for="FirstName">First Name</label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="fnm" placeholder="Enter First Name" required>
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					 					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="LastName">Last Name</label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="lnm" placeholder="Enter Last Name" required>
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="LastName">Gender</label>
						<div class="col-sm-8">
							<label class="radio-inline"><input type="radio" name="gender" value="Male" checked="checked">Male</label>
							<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					
					  <div class="form-group">
						<label class="control-label col-sm-3" for="ContactNo">Contact No</label>
						<div class="col-sm-8">
						  <input type="number" class="form-control" name="contact" placeholder="Enter Contact No" required>
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="email">Email</label>
						<div class="col-sm-8">
						  <input type="email" class="form-control" name="email" placeholder="Enter email" required>
						</div>
					  <div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					
					  <div class="form-group">
						<label class="control-label col-sm-3" for="pwd">Set Password</label>
						<div class="col-sm-8"> 
						  <input type="password" class="form-control" name="pwd" placeholder="Enter password" required>
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					
					  <div class="form-group">
						<label class="control-label col-sm-3" for="conpwd">Confirm Password</label>
						<div class="col-sm-8"> 
						  <input type="password" class="form-control" name="confirmpwd" placeholder="Enter confirm password" required>
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					
						
					  </div>
					 
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="address">Address</label>
						<div class="col-sm-8"> 
						  <input type="text" class="form-control" name="add1" placeholder="Address 1" required>
                          <input type="text" class="form-control" name="add2" placeholder="Address 2">
                          <input type="text" class="form-control" name="add3" placeholder="Address 3 (Optional)">
						</div>
					  </div>
					  <div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" name="submit" class="btn btn-success">Submit</button>
						</div>
					  </div>
					</form>
				
				</div>
			</div>
		</div>
		<?php
}
			require_once('Admin/dbconclose.php');
		?>
		
	</body>
</html>