<?php
	$page="cart";
	$title="Cart";
	require_once('header.php');
	$email = trim($_SESSION['email']);
	$total=0;
	if (isset($_GET['item_id'])){
			
		$itemid = trim($_REQUEST['item_id']);
		
	
		
		$query = "SELECT * FROM `cart` WHERE email LIKE '$email' And item_id=$itemid";
		$result = mysqli_query($link,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows==1){
			$query2 = "UPDATE `cart` SET quantity = quantity + 1 WHERE email Like '$email' And item_id=$itemid";
			$result2 = mysqli_query($link,$query2) or die(mysql_error());
		}else{
			$query2 = "INSERT INTO `cart`(`item_id`, `email`, `quantity`)
			 VALUES ($itemid,'$email', 1)";
			$result2 = mysqli_query($link,$query2) or die(mysql_error());
		}
	}


	
?>
	  
      <div class="container cart-container">
				<div class="panel panel-primary">
				  <div class="panel-heading">Cart</div>
				  <div class="panel-body">
					<table class="table cart_table" align="center">
					  <tr style="font-weight:bolder">
						<td></td>
						<td></td>
						<td>Product</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Total</td>
						</tr>
	<?php

	$sql = "SELECT * FROM `cart` WHERE email LIKE '$email'";
	$result2 = mysqli_query($link, $sql);

	if (mysqli_num_rows($result2) > 0) {
    	// output data of each row
   		 while($cartrow = mysqli_fetch_assoc($result2)) {
				$item = $cartrow['item_id'];
				
				$sql2 = "SELECT * FROM `art_items` WHERE item_id=$item";
				$result3 = mysqli_query($link, $sql2);
		
				$itemrow = mysqli_fetch_assoc($result3)
					?>
					  <tr>
						<td>	
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</td>
						<td>
							<img src="<?php echo $itemrow['source']; ?>" alt="<?php echo $itemrow['name']; ?>" class="my_cart_items"/>
						</td>
						<td>
							<p><?php echo $itemrow['name']; ?></p>
						</td>
						<td>
							<p>Rs. <?php echo $itemrow['price']; ?></p>
						</td>
						<td>
							<div class="input-group q_item_group">
							  <div class="input-group-addon add" onclick="btnClick('+')">+</div>
								<center><lable id="q_item" ><?php echo $cartrow['quantity']; ?></lable></center>
							  <div class="input-group-addon remove" onclick="btnClick('-')">-</div>
							</div>
						</td>
						<td>
							<p>Rs. <span id="total_price"><?php $total = $total + ($cartrow['quantity']*$itemrow['price']) ; echo $cartrow['quantity']*$itemrow['price']; ?></span></p>
						</td>
						</tr>
						<?php }
						}
						?>

					  <tr>
						<td colspan="4"> <p> Grand Total : Rs. <?php echo $total; ?></p> </td>
						<td><button>Update Cart</button></td>
						<td><button>Proceed to Checkout</button></td>
					  </tr>
					</table>
						
				  </div>
				</div>	
      </div>
			
		 
		  

	<script type="text/javascript">
		
		function btnClick(x)
		{
			if(x=='+')
			{
				var a=document.getElementById("q_item").innerHTML;
				document.getElementById("q_item").innerHTML=parseInt(a)+1;
			}
			else
			{
				document.getElementById("q_item").innerHTML-=1;
			}
		}
	</script>
<?php

	require('footer.php');
?>