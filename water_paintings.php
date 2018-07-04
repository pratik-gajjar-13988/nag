<?php
	$page="arts";
	$title="Arts";
	require_once('header.php');
	$conn=mysqli_connect("localhost","root","","art_gallery");
	if(mysqli_connect_error())
	{
		echo "connection error".mysqli_connect_error();
		exit;

	}
 ?>

<div class="container about_container">
    <div class="panel panel-primary">
		<div class="panel-heading">Water Paintings</div>
			<div class="panel-body">
                <ul class="products">
<?php

	$sql = "SELECT * FROM art_items WHERE category LIKE 'water'";
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
<?php
	require('footer.php');
?>