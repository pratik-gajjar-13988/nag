
<?php
		$page="aboutus";
		$title="About us";
		require_once('header.php');
		include('Admin/conn.php');
		$query="select * from pages where page_nm='about_us'";
		$result=mysqli_query($link,$query)  or die("Error fetching data.".mysqli_error($link));
		$row=mysqli_fetch_assoc($result);
		$desc=$row['page_desc'];
		
?>
		<div class="container about_container">
            
                <div class="panel panel-primary">
				  <div class="panel-heading">About us</div>
                  <div class="panel-body">
                    <p class="about_us_info">
                        <?php echo $desc; ?>
                    </p>
                  </div>
                </div>
              
           
		</div>
          
<?php
	require('footer.php');
?>