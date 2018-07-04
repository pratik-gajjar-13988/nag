<?php
	$page="index";
	$title="Home";
	require_once('header.php');
	$conn=mysqli_connect("localhost","root","","art_gallery");
	if(mysqli_connect_error())
	{
		echo "connection error".mysqli_connect_error();
		exit;

	}
?>		
		<div  style="margin: 100px;">
		 
		
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="images/1.jpg" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/2.jpg" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/3.jpg" alt="Flower">
					</div>
				  </div>
				  
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
			
			
		  </div>
		
		  <div class="home_info">
			<div class="container recent_product">
                <div class="panel panel-primary">
				    <div class="panel-heading">New Arrivals</div>
				        <div class="panel-body">
								<ul class="products">
								<?php

	$sql = "SELECT * FROM art_items WHERE new_flag=1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	// output data of each row
   		 while($row = mysqli_fetch_assoc($result)) { ?>
			<li class="product">
        				<a href="#">
            				<img src="<?php echo $row['source']; ?>" class="img-thumbnail home_img" alt="Cinque Terre">
            				<h4><?php echo $row['name']; ?></h4>
							<p>Rs. <?php echo $row['price']; ?></p>
						</a>
						<button type="button" class="btn-add-cart">Add to Cart</button>
    		</li>
       		<?php
    	}
	} else {
    	echo "0 results";
	}
	mysqli_close($conn);
?>	

   				

   							 </ul>
                           
                        </div>
                </div>
			</div>
			
		  </div>
			</div>
<?php

	require('footer.php');
?>	
