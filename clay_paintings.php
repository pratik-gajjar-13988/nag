<?php
	$page="arts";
	$title="Arts";
	require_once('header.php');
	
 ?>

<div class="container about_container">
    <div class="panel panel-primary">
		<div class="panel-heading">Clay Paintings</div>
			<div class="panel-body">
                <ul class="products">
<?php

	$sql = "SELECT * FROM art_items WHERE category LIKE 'clay'";
	$result = mysqli_query($link, $sql);

	if (mysqli_num_rows($result) > 0) {
    	// output data of each row
   		 while($row = mysqli_fetch_assoc($result)) { ?>
			<li class="product">
        				<a href="#">
            				<img src="<?php echo $row['source']; ?>" class="img-thumbnail home_img" alt="Cinque Terre">
            				<h4><?php echo $row['name']; ?></h4>
							<p>Rs. <?php echo $row['price']; ?></p>
						</a>
						<a href="cart.php?item_id=<?php echo $row['item_id']; ?>" class="btn btn-success">Add to Cart</a>
    		</li>
       		<?php
    	}
	} else {
    	echo "0 results";
	}
	
?>	

   				
    			</ul>
			</div>
        </div>
	</div>
</div>	
<?php
	require('footer.php');
?>