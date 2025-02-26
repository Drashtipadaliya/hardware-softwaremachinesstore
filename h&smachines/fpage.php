<?php
  	include'header.php';
	  

	 /* if(!isset($_SESSION['uname']))
	  {
		  echo "<script>alert('First must be login'); location.href='login.php'; </script>";
	  }*/
	  ?>
	  
		  <br/>
		  <br/>
 
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="images/bg_1.jpg" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#SOMTHING NEW ALWAYS</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">machines Collection 2024</h1>
				            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
				            
				            <p><a href="#" class="btn-custom">Discover Now</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="images/bg_2.jpg" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#SOMTHING NEW ALWAYS</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">machines Collection 2024</h1>
				            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
				            
				            <p><a href="#" class="btn-custom">Discover Now</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

     <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters ftco-services">
          
           
			
		 <?php
				include "config.php";
				//$cnm=$_GET['cname'];
	$qry="select * from service";
	$qq=mysqli_query($con,$qry);
	while($rec=mysqli_fetch_array($qq))
	{

	?>  <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
               <div class="media block-6 services p-4 py-md-5"> 
             
          
            		<span ><img src="../img/<?php echo $rec[2];?>" alt="" style="height:100px; width:100px"/> </span>
              
              <div class="media-body">
                <h3 class="heading"><?php echo $rec[1];?></h3>
                <p><?php echo $rec[3];?></p>
              </div> </div>
            </div>     
         <?php }?>
              
          </div></div>
			</div></div>
		</section>

<!--<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">SOMTHING ALWAYS NEW</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
		<div class="container">
    		
        <div class="row">
              <div class="col-sm-6 col-md-2 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                  <a href="phone.php" class="img-prod"><img src="images/4.jpeg" alt="Colorlib Template">	
                  </a>
                  <div class="text py-3 pb-4 px-3">
                          <h3><a href="#">MOBILE</a></h3>
                  <p class="bottom-area d-flex px-3">
                      <a href="phone.php" class="add-to-cart text-center py-2 mr-1"><span>SHOP NOW <i class="ion-ios-add ml-1"></i></span></a>
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                  <a href="teblete.php" class="img-prod"><img src="images/9090.jpeg" alt="Colorlib Template">
                    
                  </a>
                  <div class="text py-3 pb-4 px-3">
                          <h3><a href="#">TEBLETE</a></h3>
                  <p class="bottom-area d-flex px-3">
                      <a href="teblete.php" class="add-to-cart text-center py-2 mr-1"><span>SHOP NOW <i class="ion-ios-add ml-1"></i></span></a>
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                  <a href="laptop.php" class="img-prod"><img src="images/1q.jpg" alt="Colorlib Template">
                    
                  </a>
                  <div class="text py-3 pb-4 px-3">
                          <h3><a href="#">LAPTOP</a></h3>
                  <p class="bottom-area d-flex px-3">
                      <a href="laptop.php" class="add-to-cart text-center py-2 mr-1"><span>SHOP NOW <i class="ion-ios-add ml-1"></i></span></a>
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                  <a href="other.php" class="img-prod"><img src="images/other.jpg" alt="Colorlib Template">
                    
                  </a>
                  <div class="text py-3 pb-4 px-3">
                          <h3><a href="#">OTHER</a></h3>
                  <p class="bottom-area d-flex px-3">
                      <a href="other.php" class="add-to-cart text-center py-2 mr-1"><span>SHOP NOW <i class="ion-ios-add ml-1"></i></span></a>
                      
                    </p>
                  </div>
                </div>
              </div>
              
                </div>
              </div>
            </div>
          </div>
        </section>-->

		<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">SOMTHING ALWAYS NEW</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
		<div class="container" >
  		
		 <div class="row">
		
		 <?php
				include "config.php";
				//$cnm=$_GET['cname'];
	$qry="select * from category ";
	$qq=mysqli_query($con,$qry);
	while($rec=mysqli_fetch_array($qq))
	{

	?>  
    <div class="col-md-4 col-lg-4">
			<form method="post" action="icart.php">
			<div class="col-sm-3 col-md-3 col-lg-3 ftco-animate d-flex ">
    				<div class="product">
			<div class="card m-auto bg-secondary" style="width:20rem;">
			
			<div class="product d-flex-column col-sm-15">
                <div class="portfolio-thumbnail" class="mx-auto d-block image-fluid"><img src="../img/<?php echo $rec[2];?>" alt="" style="height:200px; width:80%"/> 
                    </div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-overlay">	
                                <h3 class="text-center"><?php echo $rec[1];?></h3>  
                            </div>
							</div>
							<a href="shop.php?cat=<?php echo $rec[1]?>" class="text-center"><b>View All</b></a>
							</div>
                
                    </form>
				</div>
				</div>
				</div>

           	<?php
				}?>

            
            
</div>
   
        </div>
 
				
			
		  </section>


    <section class="ftco-section ftco-deal bg-primary">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<img src="images/prod-1.jpg" class="img-fluid" alt="">
    			</div>
    			<div class="col-md-6">
    				<div class="heading-section heading-section-white">
    					<span class="subheading">Deal of the month</span>
	            <h2 class="mb-3">Deal of the month</h2>
	          </div>
    				<div id="timer" class="d-flex mb-4">
						  <div class="time" id="days"></div>
						  <div class="time pl-4" id="hours"></div>
						  <div class="time pl-4" id="minutes"></div>
						  <div class="time pl-4" id="seconds"></div>
						</div>
						<div class="text-deal">
							<h2><a href="#">HP LAPTOP 15s</a></h2>
							<p class="price"><span class="mr-2 price-dc">₹45000.00</span><span class="price-sale">₹29000.00</span></p>
							<ul class="thumb-deal d-flex mt-5">
								<li class="img" style="background-image: url(images/product-1.jpg);"></li>
								<li class="img" style="background-image: url(images/product-2.jpg);"></li>
								<li class="img" style="background-image: url(images/product-4.jpg);"></li>
							</ul>
						</div>
    			</div>
    		</div>
			</div>
    	</div>
    </section>


    <section class="ftco-gallery">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4">Follow Us On youtube</h2>
            <p>a form of security analysis that uses price data and volume data, typically displayed graphically in charts.</p>
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


    <?php
		include'footer.php';
	?>