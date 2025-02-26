<?php
include "header.php";
?>
<?php
if(!isset($_SESSION['user']))
{
   echo "<script>alert('first must be login');location.href='login.php';</script>";
   
}
?>
 <a href="adelete.php" onclick="return checkDelete()"></a>
<?php
 include "config.php";

    $email=$_SESSION['user'];
	 $qry="delete from register where email='$email'";
	 $a=mysqli_query($con,$qry);
	
	 if($a>0)
	 {
	     echo "<script >alert('Account deleting with your data and details thank you for comming of our website  ');</script>";
		 session_destroy();
		 echo "<script>location.href='fpage.php';</script>";

	 }
	 else
	 {
	       echo "<script>alert('Account Not Deleted........');</script>";
	 }

?>


<?php
include "footer.php";
?>