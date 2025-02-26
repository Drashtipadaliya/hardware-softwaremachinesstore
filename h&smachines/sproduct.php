<?php
	include "header.php";
	
	if(!isset($_SESSION['uname']))
	{
		echo "<script>alert('First must be login'); location.href='login.php'; </script>";
	}
?>



  <section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container" style="margin-top:110px">
          
                
            </div>

          
<?php include "config.php";
	
if(isset($_SESSION['user']))
{
	echo "<b><h4>Welcome : ".$_SESSION['uname']."</h4></b>";
}
else
{
	echo "<b><h4>Welcome : Guest"."</h4></b>";
}
?>

	<?php
		
		$id="";
		//if(isset($_GET['pid']))
		//{
			$id=$_GET['id'];
			
		$qry="select * from product where id=$id";
		
		$qq=mysqli_query($con,$qry);
		$row = mysqli_fetch_array($qq);
		
		
		//}
	 
	?>
	
	
	<!-- ##### Testimonial Area Start ##### -->
    <section class="testimonial-area section-padding-100">
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="row align-items-center" style="margin-left:-10%;margin-right:200px">
                                <div class="col-12 col-md-8">
                                    <div class="testimonial-thumb" >
										<div class="img-zoom-container">
						 
                  <img src="../img/<?php echo $row[3]; ?>" style="margin-left:100px;height:60%; width:60%;" alt="" id="myimage">
										 </div>



                                    </div>
									
                                </div>
								
							

                                <div class="col-12 col-md-4">
                                    <div class="testimonial-content" >
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2><b><?php echo $row[1];?></b></h2><br />	
											<span><b>Price: </b><?php  echo $row[2];  ?> Rs./-</span><br /><br />
                                            <h4><b>Detail: </b></h4> <p>&clubs; <?php  echo $row['dcn']; ?>
</p><br />
<form action="addtocart.php" method="post">
<input type="hidden" name="pname" value="<?php echo htmlspecialchars($row[1]); ?>">
                        <input type="hidden" name="price" value="<?php echo htmlspecialchars($row[2]); ?>">
                       
                        <input type="hidden" name="img" value="<?php echo htmlspecialchars($row[3]); ?>">
                        <div class="form-group">
                            <label for="qty">Enter Quantity:</label>
                            <input type="number" name="qty" id="qty" min="1" value="1" class="form-control">
                        </div>
						<button type="submit" class="btn btn-primary cart-btn">Add to Cart</button>
                    </form>
                
          
											
									<h2> </h2>
											</td>
											</tr>
											</table>
											</form>
                                        </div>
                                        
                                        <div class="testimonial-author-info">
                                            
                                    </div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									
    </section>
    <!-- ##### Testimonial Area End ##### -->
	
	<?php
			include "footer.php";
	?>