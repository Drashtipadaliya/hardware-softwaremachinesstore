 <?php
  	include'header.php';
  ?>
  <?php
  	include'config.php';
  ?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
	  
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Shop</span></p>
            <h1 class="mb-0 bread">Shop</h1>
			<nav class="navbar navbar-expand-lg navbar-light  justify-content-between">
  <div class="container-fluid">
    <a class=" col-md-1 navbar-brand" href="#">SERCH FOR YOU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto col-md-6 mb-3 mb-lg-0">
       
              </ul>
      <form class="d-flex p-1 mb-lg-0 bg-dark" method="post">
        <input class="form-control-toggle" type="text" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark btn-sm" type="submit">Search</button>
      </form>
    </div>
	<div class=" container my-3">
	<table  class="table">
	<?php
	if(isset($_POST['submit']))
	{
	
	$search=$_POST['search'];
	$sql="select * from product where id='$search'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
	if(mysqli_num_rows($result)>0){
	
	echo'<thead>
	<tr>
	<th> </th>
	<th> </th>
	<th> </th>
	</tr>
	</thead>
	
		
	';
	$row=mysqli_fetch_assoc($result);
	echo'<tbody>
	<tr>
	<td>'.$row['id'].'</td>
	<td>'.$row['pname'].'</td>
	<td>'.$row['price'].'</td>
	</tr>
	</tbody>
	';
	
	}
	
	else
	{
		echo"<h2 class='text-danger'>data not found</h2>";
	}
	}
	
	}
	?>
	
	
  </div>
  </div>
  </table>
</nav><div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <ul>
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
    </ul>
    <ul>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
    </ul>
    <ul>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
        <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
    </ul>
</div>

          </div>
        </div>
      </div>
    </div>
	 </section>
<!-- dropdown menu -->

 





	<div class='container-fluid'>
		
<div class='col-md-15 '>
	
	<div class='row border-red'>

		<?php
			include'config.php';
			$r=mysqli_query($con,"select *from 	product");
			while($row=mysqli_fetch_array($r)){
		
			$check_page = $row['catgry'];

			if($check_page === "teb")
			
			{
			
			
			echo "<div class='col-md col-lg-4 m-automb-6  '>
			<form method='post' action='icart.php'>
			<div class='col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex  '>
    				<div class='product d-flex-column  '>
			<div class='card m-auto bg-secondary' style='width:20rem; '>
			
			<div class='product d-flex-column col-sm-13' >
			<img    src='../img/$row[image]'  class='img-prod rounded-circle mx-auto ' width='200px' height='150px' class='card-img-top' alert='gjk'>
			<div class='overlay'></div>
			
			<div class='text py-3 pb-4 px-3'>
			<div class='d-flex '>
			<div class='cat'>
			<span>H&S MACHINE</span>
			</div>
			<div class='rating'>
			<p class='text-right mb-4'>
			<a href='#'><span class='ion-ios-star-outline'></span></a>
			<a href='#'><span class='ion-ios-star-outline'></span></a>
			<a href='#'><span class='ion-ios-star-outline'></span></a>
			<a href='#'><span class='ion-ios-star-outline'></span></a>
			<a href='#'><span class='ion-ios-star-outline'></span></a>
			</p>
			</div>
			</div>
			</div>
			
			<div class='card-body text-center'>
			<div class='overlay'></div>
			<div class='text py-1 pb-1 px-1 '>
			<div class='d-flex px-3 border border-black'>
			<div class='cat'>
			
			<h3 class='card-title fw-bold text-dark fs-1'> $row[pname]</h3>
			<input type='hidden'  name='pname'value='$row[pname]'>
			<div class='pricing py-1 mr-0 ' >
			<p class='card-title fw-bold text-dark fs-1'> RS:$row[price]
			<input type='hidden'  name='price' value='$row[price]'>
			</p>
			
			
			
			<input type='number'name='qnty' value='min='0' max='50'' placeholder='Quantity' / ></br>
			</div>
			</div> 
			
			<div class='pricing'>
			<p class='bottom-area d-flex px-3  '>
			<a href='sproduct.php' class='add-to-cart text-center py-1 mr-0 '><span>Add to cart <i class='ion-ios-add ml-1'></i></span></a>
			<a href='sproduct.php' class='buy-now text-center py-1'>Buy now<span><i class='ion-ios-cart ml-1'></i></span></a>
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

";}	
			}
			
			?>
			</div>
			</div>
</div>

</section>
    

		    	
		
	

    <?php
		include'footer.php';
	?>	
