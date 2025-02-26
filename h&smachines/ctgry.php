<?php
include "header.php";
?>
<?php

if(!isset($_SESSION['uname']))
{
	echo "<script>alert('First must be login'); location.href='login.php'; </script>";
}
?>

<br />
<br />
<br />
<br />
<br />

<?php
if(isset($_SESSION['uname']))
{
	echo "<b><h4>Welcome : ".$_SESSION['user']."</h4></b>";
}
else
{
	echo "<b><h4>Welcome : Guest"."</h4></b>";
}
?>


    <!--================Our feature Area =================-->
       <div class="container-fluid">
		
<div class="col-md-13">
	
	<div class="row border-red">
					  
         
                
				
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
			<div class="card m-auto bg-secondary" style="width:20rem; ">
			
			<div class="product d-flex-column col-sm-13" >
                <div class="portfolio-thumbnail"><img src="../img/<?php echo $rec[2];?>" alt="" style="height:200px; width:80%"/> 
                    </div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-overlay">	
                       
                            <div class="port-hover-text">
                                <h3><?php echo $rec[1];?></h3>   
                               	<a href="shop.php?cat=<?php echo $rec[1]?>"><b>View All</b></a>
                            </div>

                            </div>
							</div>
							</div>
                
                    </form>
				</div>
				</div>
				</div>

           	<?php
				}?>

            
            
</div>
   
        </div>
          
   
		
             
        <!--================End Our feature Area =================-->
        
	
<?php
include "footer.php";
?>