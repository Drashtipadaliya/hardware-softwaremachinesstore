  	<?php include "header.php";
	 ?>
	
		<?php
		 
 
     include"config.php";
	 $id=$_GET['id'];
	   $qry="delete from cart where id='$id' && pname='$cm'";	 
	       
	     $a=mysqli_query($con,$qry);
		 if($a>0)
		 {
		    echo "<script>alert('product delete....');location.href='view-cart.php';</script>";
			}
			else
			{
			  echo "product not delete..";
			  }
			 
			  
   ?>
   
   
   <?php include "footer.php"; ?>
	 
	 
	
	 

	   
	  
 