<?php
	include "header.php";
?>	
<br/>
<br/>
<br/>
<br/>





 
                        	<?php if(isset($_GET['id'])){
					?>
					  
						<?php } else{
						
                        ?>
						<?php
					}?>
                    
					 



 
	<?php
								
									include "config.php";
									if(isset($_GET['id']))
									{
										$id=$_GET['id'];
										$qry="select * from service where id='$id'";
										$qq=mysqli_query($con,$qry);
										$rec=mysqli_fetch_array($qq);
									}
								
								?><div class="contenter">
<div class="row">
								<div  class="col-md-6 bg-white mt-5 m-auto shadow font-monospace border border-info">
								<div class="mb-3">
<p class="text-center fw-bold fs-2 text-warning p-2  bg-secondary">SERVICE</p>
</div>
<form method="post" enctype="multipart/form-data">
								<div class="md-3">
							<label for="">ServiceName:</label>
							<input type="text" class="form-control" id="register-name" placeholder="Enter Service" name="sname" value="<?php if(isset($_GET['id'])){ echo $rec[1]; } ?>">
								</div>
                                
									<div class="md-3">
						<label for="">Image:</label>
	    			    <input type="file" class="form-control" id="register-name"   placeholder="Image" name="image"> <?php if(isset($_GET['id'])){ ?> <img src="../img/<?php echo $rec[2];?>"> <?php } ?>
                                    </div>
                                
									<div class="md-3">
							<label for="">ServiceDetail:</label>
							<input type="text" class="form-control" id="register-name" placeholder="Enter details" name="dtil" value="<?php if(isset($_GET['id'])){ echo $rec[3]; } ?>">
								</div>
                                
								<?php
										if(isset($_GET['id']))
										{
										?>
										
                                	<input type="submit" class="btn btn-primary btn-lg btn-block bg-danger my-4" name="update" value="EDIT">
										
									<?php }
									else { ?>
										
									
                                    
                                <input type="submit" class="btn btn-primary btn-lg btn-block bg-danger my-4" name="submit" value="ADD">
								<?php
										
									}?>
								
								 </form>
                    </div>
                </div>
									
							
                                
                            
                        
									
      
    <!-- ##### Contact Area End ##### -->
	
<!--- footer file ---->
<br/>
<br/>
<br/>
<br/>
<?php
	include "footer.php";
?>
   
 
<?php

	if(isset($_POST['submit']))
	{
		include "config.php";
		
		$snm=$_POST['sname'];
		$image=$_FILES['image']['name'];
		
		move_uploaded_file($_FILES['image']['tmp_name'],"../../img/".$image);
		$dtl=$_POST['dtil'];
		$qry="INSERT INTO `service`(`name`, `image`, `details`) VALUES ('$snm','$image','$dtl')";
		echo $qry;
		$a=mysqli_query($con,$qry);
		if($a>0)
		{
			echo "<script>alert('category inserted');</script>";		
		}
		else
		{
			echo "not";
		}
		
	}
?>

   
<?php

	if(isset($_POST['update']))
	{
		include "config.php";
		
		$snm=$_POST['sname'];
			$image=$_FILES['image']['name'];
		
		if($image=="")
		{
			$qry="update service set name='$snm',image='$image' where id='$id'";
			//echo $qry;
			move_uploaded_file($_FILES['image']['tmp_name'],"../../img/".$image);
			$a=mysqli_query($con,$qry);
			if($a>0)
			{
				echo "<script>alert('category updated..');location.href='viewcategory.php';</script>";		
			}
			else
			{
				echo "not";
			}
		}
		else 
		{
			
			$qry="update service set name='$snm' where id='$id'";
			
			$a=mysqli_query($con,$qry);
		}
			if($a>0)
			{
				echo "<script>alert('category updated..');</script>";		
			}
			else
			{
				echo "not";
			}
		
	
	}
?>