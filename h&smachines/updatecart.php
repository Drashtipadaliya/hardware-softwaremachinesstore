<?php
include "header.php";
?>
      
   <!--contact -->
  
<?php
include "config.php";
$email=$_SESSION['user'];
$id=$_POST['id'];
$qty=$_POST['qty'];

$qry="update cart set qty='$qty' where id='$id'";
//echo $qry;
$q=mysqli_query($con,$qry);
if($q>0)
{
	echo "<script>location.href='view-cart.php';</script>";
}
else
{

	echo "<script>alert('not');</script>";
}

?>
 <?php 
 include "footer.php";
 ?>