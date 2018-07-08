<!DOCTYPE html>

<?php

  include("auth.php");	
	require_once('Admin/conn.php');
	
	
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Gallery | <?php echo $title; ?></title>
    <link href="images/icon.png" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"/>
	
  </head>
  <body>
  
	
		
      <div class="social-icon-area">
            <ul class="social-icons">
                <li><a href="<?php echo $socialdetails['facebook']; ?>" class="btn azm-social azm-size-48 azm-long-shadow azm-facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php echo $socialdetails['twitter']; ?>" class="btn azm-social azm-size-48 azm-long-shadow azm-twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo $socialdetails['linkedin']; ?>" class="btn azm-social azm-size-48 azm-long-shadow azm-linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?php echo $socialdetails['insta']; ?>" class="btn azm-social azm-size-48 azm-long-shadow azm-instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
            
				</div>
				
     <nav class="navbar transparent navbar-static-top">
		 		
		 	
				<div class="navbar-header">
						<a href="userhome.php" class="navbar-brand"><img style="max-width:100%;max-height: 100%;" src="images/logo.png"></a>
      	</div>
			
				<ul class="nav navbar-nav">
				
				<li <?php if($page=="index") echo 'class="active"' ?>><a href="userhome.php">Home <span class="sr-only">(current)</span></a></li>
				
				<li class="dropdown <?php if($page=="arts") echo "active" ?>">
				  <a href="gallery.php" class="dropdown-toggle <?php if($page=="arts") echo "active" ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Arts <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="oil_paintings.php">Oil Paintings</a></li>
					<li><a href="water_paintings.php">Water Paintings</a></li>
					<li><a href="clay_paintings.php">Clay Paintings</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="gallery.php">Gallery</a></li>
				  </ul>
				</li>
				<li <?php if($page=="cart") echo 'class="active"' ?>><a href="cart.php">Cart</a></li>
				<li <?php if($page=="aboutus") echo 'class="active"' ?>><a href="about_us.php">About us</a></li>
				<li <?php if($page=="contact_us") echo 'class="active"' ?>><a href="contact_us.php">Contact us</a></li>
			  </ul>
				<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a href="gallery.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['email']." "; ?> <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="logout.php">Logout</a></li>
					 </ul>
				</li>
				</ul>
		
</div>
		  
		</nav>