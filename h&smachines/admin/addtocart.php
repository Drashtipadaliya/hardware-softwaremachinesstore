
 
<?php
session_start();
if(!isset($_SESSION['user']))
{
/*echo "<script>alert('first must be in login');
location.href='login1.php';</script>";
*/}
?>
  
<?php
    include "config.php";
	 $email=$_SESSION['user'];
	$cnm=$_POST['pname'];
    $pr=$_POST['price'];
	$img=$_POST['img'];
    $qty=$_POST['qty'];
   
	
 $qry="INSERT INTO `cart`( `pname`, `image`, `qty`, `price`, `email`) VALUES ('$cnm','$img','$qty','$pr','$email')";
//echo $qry;
$a=mysqli_query($con,$qry);
	if($a>0)
	{
		echo "<script>alert('Your Product is add in to cart Succesfully');location.href='view-cart.php';</script>";
	}
	else
	{
		echo "<script>alert('Not..');</script>";
	}
		  
  ?>
  	 









<!--
 
<form action="addtocart.php" method="post">
<input type="hidden" name="pname" value="<?php /*echo htmlspecialchars($rec[6]); ?>">
                        <input type="hidden" name="price" value="<?php echo htmlspecialchars($rec[6]); ?>">
                        <input type="hidden" name="cnm" value="<?php echo htmlspecialchars($rec[1]); ?>">
                        <input type="hidden" name="img" value="<?php echo htmlspecialchars($rec[3]); */?>">
                        <div class="form-group">
                            <label for="qty">Enter Quantity:</label>
                            <input type="number" name="qty" id="qty" min="1" value="1" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary cart-btn">Add to Cart</button>
                    </form>
                
          