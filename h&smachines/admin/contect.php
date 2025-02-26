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
										$qry="select * from team where id='$id'";
										$qq=mysqli_query($con,$qry);
										$rec=mysqli_fetch_array($qq);
									}
								
								?><div class="contenter">
<div class="row">
								<div  class="col-md-6 bg-white mt-5 m-auto shadow font-monospace border border-info">
								<div class="mb-3">
<p class="text-center fw-bold fs-2 text-warning p-2  bg-secondary">CONTECT US DETAIL</p>
</div>
<form method="post" enctype="multipart/form-data">
								<div class="md-3">
							<label for="">COMPANY NAME:</label>
							<input type="text" class="form-control" id="register-name" placeholder="Enter company name" name="cunm" value="<?php if(isset($_GET['id'])){ echo $rec[1]; } ?>">
								</div>
                                <div class="md-3">
							<label for="">ADDRESS:</label>
							<input type="text" class="form-control" id="register-name" placeholder="Enter company address" name="dtil" value="<?php if(isset($_GET['id'])){ echo $rec[2]; } ?>">
								</div>
                                
									<div class="md-3">
							<label for="">MOBILE NO:</label>
							<input type="text" class="form-control" id="register-name" placeholder="Enter company mobile no" name="mn" value="<?php if(isset($_GET['id'])){ echo $rec[3]; } ?>">
								</div>
								<div class="md-3">
							<label for="">EMAIL ID:</label>
							<input type="text" class="form-control" id="register-name" placeholder="Enter company emailID" name="eml" value="<?php if(isset($_GET['id'])){ echo $rec[4]; } ?>">
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
		
		$tnm=$_POST['cunm'];
		$dtl=$_POST['dtil'];
		$wk=$_POST['mn'];
		
		
        $eml=$_POST['eml'];
		$qry="INSERT INTO `call`( `name`, `address`, `mobileno`, `email`)VALUES('$tnm','$dtl','$wk','$eml')";
		//echo $qry;
		$a=mysqli_query($con,$qry);
		//echo $a;
		if($a>0)
		{
			echo "<script>alert('category inserted');</script>";		
		}
		else
		{   echo $qry;
			echo "not";
		}
		
	}
?>

   
<?php

	if(isset($_POST['update']))
	{
		include "config.php";
		
		$tnm=$_POST['tnm'];
			$image=$_FILES['img']['name'];
		
	
			
		$qry="update team set name='$snm' where id='$id'";
			
			$a=mysqli_query($con,$qry);
	
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