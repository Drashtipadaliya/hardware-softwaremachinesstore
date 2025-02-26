<?php
								
	include "config.php";
	
		$id=$_GET['id'];
		$qry="delete from cart where id='$id'";
		$qq=mysqli_query($con,$qry);
										
										
		if($qq>0)
		{
			echo "<script>location.href='view-cart.php';</script>";
		}
		else
		{
			echo "record not deleted...";
		}
	

?>

