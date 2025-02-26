<?php
echo $id=$_GET['id'];
include'config.php';
	mysqli_query($con,"DELETE FROM `team` WHERE id=$id");
	
	header("location:view-tm.php");
?>