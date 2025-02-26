<?php
  	include'header.php';
	  
	  
		 

  	include'config.php';
  ?>
   <br/>

	<div class='container-fluid'>
		
<div class='col-md-15 '>
	
	<div class='row border-red'>
	<div class="container">
	  
	  <div class="row no-gutters slider-text align-items-center justify-content-center">
		<div class="col-md-9 ftco-animate text-center">
		<h1 class="mb-0 bread">Shop</h1> 	
		<p class="breadcrumbs"><span class="text-uppercase text-white bg-dark"><a href="index.php">buying and shelling to product </a></span> <span class="text-uppercase text-black bg-primary">not only buying but it is life time partenar</span></p>
		  



		</div>
	  
	</div>
  </div>
	<?php
			include"config.php";
			$r=mysqli_query($con,"select * from product");
			while($row=mysqli_fetch_array($r)){
		

//
	//		if($check_page === "laptop")
			
		//	{
			
			
			?> <div class="col-md col-lg-4 m-automb-6">
			<form method="post" action="icart.php">
			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex  ">
    				<div class="product d-flex-column  ">
			<div class="card m-auto bg-secondary" style="width:20rem; ">
			
			<div class="product d-flex-column col-sm-13" >
			<img    src="../img/<?php echo $row['image'];?>"  class="img-prod rounded-circle mx-auto " width="200px" height="150px" class="card-img-top" alert="gjk">
			<div class="overlay"></div>
			
			<div class="text py-3 pb-4 px-3">
			<div class="d-flex ">
			<div class="cat">
			<span>H&S MACHINE</span>
			</div>
			<div class="rating">
			<p class="text-right mb-4">
			<a href="#"><span class="ion-ios-star-outline"></span></a>
			<a href="#"><span class="ion-ios-star-outline"></span></a>
			<a href="#"><span class="ion-ios-star-outline"></span></a>
			<a href="#"><span class="ion-ios-star-outline"></span></a>
			<a href="#"><span class="ion-ios-star-outline"></span></a>
			</p>
			</div>
			</div>
			</div>
			
			<div class="card-body text-center">
			<div class="overlay"></div>
			<div class="text py-1 pb-1 px-1 ">
			<div class="d-flex px-3 border border-black">
			<div class="cat">
			
			<h3 class="card-title fw-bold text-dark  fs-1" align="center"><?php echo $row['pname'];?></h3>
			<input type="hidden"  name="pname"value="<?php echo $row['pname'];?>">
			<div class="pricing py-1 mr-0 " >
			<p class="card-title fw-bold text-dark fs-1" align="center"> RS:<?php echo $row['price'];?>
			<input type="hidden"  name="price" value="<?php echo $row['price'];?>">
			</p>
			
			
			
			<p class="card-title fw-bold text-dark fs-1" align="center">QUENTY:<?php echo $row['qnty'];?></p>
			</div>
			</div> 
			
			<div class="pricing">
			<p class="bottom-area d-flex px-3  ">
			<a href="sproduct.php?id=<?php echo $row['id'];?>" class="add-to-cart text-center py-1 mr-0 "><span>buy now<i class="ion-ios-add ml-1"></i></span></a>
			
			</p>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>

</form>
</div>
</div>
</div>
<?php

			}
		
			
			?>
			</div>

			</div>

</section>
    

		    	
		
	

    <?php
		include"footer.php";
	?>	
