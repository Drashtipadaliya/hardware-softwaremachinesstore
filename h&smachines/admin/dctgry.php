<?php
								
	include "config.php";
	
		$id=$_GET['id'];
		$qry="delete from category where id='$id'";
		$qq=mysqli_query($con,$qry);
		//$row = mysqli_fetch_assoc($qq);								
										
		if($qq>0)
		{
			echo "<script>alert(' category deleted');location.href='ctgry.php';</script>";
		}
		else
		{
			echo "<script>alert(' not deleted');location.href='view-cty.php';</script>";
		}
?>