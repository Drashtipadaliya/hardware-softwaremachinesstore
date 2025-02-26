 <?php
  	include'header.php';
  ?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<body>
<section>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-0 bread">is this done!?</h1>
			<h4 class="text-secondary">WHATS NEW? CAN YOU SUGGESTION!</h4>
          </div>
        </div>
      </div>
    </div> 

<div class="contenter">
 <div class="row">   
   <div class="col-md-6 bg-white mt-5 m-auto shadow font-monospace border border-info">
  			<form action="#" method="post" class="bg-white p-5 contact-form">
			  <h3 class="text-warning text-center fs-3 fw-bold my-3">GIVES YOUR SUGGESTION</h3>
					  <div class="form-group">
					  <label>NAME</label>
						<span></span>
						<input type="text" name="name"class="form-control" required="" placeholder="YOUR NAME">
						
					</div>
					<div class="form-group">
					<label>EMAIL</label>
						<span></span>
						<input type="email" name="email" class="form-control" required="" placeholder="YOUR EMAIL"> 
						
					</div> 
					  <div class="form-group">
					  <label>SUBJECT</label>
						<span></span> 
			
						 <label for="formGroupExampleInput"class="form-select" class="form-label">OPTIONS</label>
						 <select class="form-select"  value="<?php if(isset($_GET['id'])){ echo $rec[5]; } ?>" name="pages" required>
  
    <option value="">Select</option>
      <?php
						   include ("config.php") ;
                            $query = "SELECT * FROM category";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $selected = (isset($rec['category']) && $rec['category'] == $row['category']) ? 'selected' : '';                                echo "<option value='".$row['category']."' $selected>".$row['category']."</option>";
                              }
                              ?>
    </select>


					</div>
					 <div class="form-group">
					 <label>MESSAGE</label>
						<span></span>
						<textarea name="message" class="form-control" cols="20" rows="7" required="" placeholder="MESSAGE"></textarea>
						</div>	 
						<div class="md-3">
					<input type="submit" value="SUBMIT" class="w-100 bg-danger md-3 fs-4 text-white" name="submit"></div>
				</form>
			</div>
		</div>
	</div> 	
    
    </section>      


		  <section class="ftco-section contact-section bg-light">
		  
		  <class="col-md-6 d-flex">
		  <a href=" https://www.google.com/maps/d/viewer?mid=1B1lAsUpYFg82Je7XN1_cxRPf1UU&hl=en_US&ll=21.843640760307327%2C82.75998700000001&z=4">
	 </a>	
          	<div id="map" class="bg-white"></div>
			  <?php
				include "config.php";
				//$cnm=$_GET['cname'];
	$qry="select * from cnt";
	$qq=mysqli_query($con,$qry);
	while($rec=mysqli_fetch_array($qq))
	{

	?> 	
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          
          <div class="col-md-3 d-flex">
          	<div class="info bg-primary p-4">
	            <span class="text-white">COMPANY NAME:</span>  <p class="text-primary bg-dark"><?php echo $rec[1];?></p> 
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-primary p-4">
	          <span class="text-white">ADDRESS:</span>   <p class="text-primary bg-dark"><?php echo $rec[2];?></p> 
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-primary p-4">
	            <span class="text-white">PHONE:</span> <p class="text-primary bg-dark"><?php echo $rec[3];?></p> 
	        </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-primary p-4">
	            <span class="text-white">EMAIL:</span> <p class="text-primary bg-dark"><?php echo $rec[4];?></p> 
	        </div>
          </div>
		  <?php }?>
</div>
</section>
   
    <section class="ftco-gallery ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
             <h2 class="mb-4">Follow Us On Instagram</h2>
            <p>Physical system that uses power to apply forces and control movement to perform an action.</p>
        		</div>
     		</div>
    	</div>
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>

</section>
</body>

</html>

<?php
if(isset($_POST['submit']))
{ 
    include"config.php";
	
      $name=$_POST["name"];
	  $email=$_POST["email"];
	  $subject=$_POST["subject"];
	  $message=$_POST["message"];
	 
	 
	  $sql="insert into contect(name,email,subject,message) values('$name','$email','$subject','$message')";
	 $a=mysqli_query($con,$sql);

		 	if($a>0)
		 	{
		 		echo"<script>alert('Thanks for contact..');location.href='fpage.php';</script>";
		 	}
			else
			{
				echo"<script>alert('Please try again...');</script>";
			}
	}		
		  ?>
		  
	<?php
		include'footer.php';
	?>

    