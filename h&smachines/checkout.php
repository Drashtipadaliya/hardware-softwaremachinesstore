 	<?php 
include "header.php";
/*if(!isset($_SESSION['uname']))
{
	echo "<script>alert('First must be login'); location.href='login.php'; </script>";
}*/
?>

    <br/>
    <br/>
//session_start();




	

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-150">
			<div class="blog-banner">
				<div class="text-center">
					<h1><br>Product Checkout</h1></h1>

					
				</div>
			</div>
    </div>
	
	</section>
	<!-- ================ end banner area ================= -->
  
  
  <!--================Checkout Area =================-->
 
  <section class="checkout_area-left">
    <div class="container">
	 <div class=" bg-white m-auto shadow  border border-info">
	 <!-- <div class="col-md-90 border border-primary">
       -->
            <div class="check_title">
                <h2 class="text-info text-center fs-3 fw-bold my-3">Returning Customer? <a href="login.php">Click here to login</a></h2>
            </div>
            <pre class="blockquote text-center text-secondary">If you have shopped with us before, please enter your details in the boxes below..
If you are a new customer, please proceed to the Billing & Shipping section.</pre>
            <form  action="#" method="post" novalidate="novalidate">
                <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label text-white bg-dark">USERNAME:</label>
                    <input type="text"  placeholder="Username or Email" onfocus="placeholder=''" onblur="this.placeholder = 'Username or Email*'" id="name" value="<?php echo $_SESSION['uname']; ?>" name="name" />
                    <!-- <span class="placeholder" data-placeholder="Username or Email"></span> -->
               </div>
               <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label text-white bg-dark"> PASSWORD</label>
                    <input type="password" id="pass" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" id="password" value="<?php echo $_SESSION['pwd']; ?>" name="password"/>
                    <!-- <span class="placeholder" data-placeholder="Password"></span> -->
             
			<div class="mb-3">
  <label for="" class="form-label "> </label>
                    <button type="submit" value="submit" class="btn btn-primary btn-lg-10 bg-danger">login</button>
                    <div class="col-auto">
	
	<input type="checkbox" onClick="myFunction()"><label class="form-check-label" for="autoSizingCheck2">
   show Password
	</label>
</div> 
                </div>
                    <a class="lost_pass" href="../admin/find_pass.php">Lost your password?</a>
                </div>
            </form>
            <script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}</script>
		
		
		
        <!--<div class="cupon_area">
            <div class="check_title">
                <h2>Have a coupon? <a href="#">Click here to enter your code</a></h2>
            </div>
            <input type="text" placeholder="Enter coupon code">
            <a class="button button-coupon" href="#">Apply Coupon</a>
        </div>-->
		
		
        <div class="billing_details">
           
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form  action="#" method="post" novalidate="novalidate">
                       <div class="mb-3">
					     <label for="formGroupExampleInput" class="form-label text-white bg-dark">FIRST NAME:</label>
                            <input type="text" value="<?php echo $_SESSION['uname'];?>" name="firstnm" placeholder="first name" required="true"/>          <span class="placeholder" data-placeholder="First name"></span>
								</div>
                       <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label text-white bg-dark">LAST NAME:</label>
                            <input type="text" name="lastnm" value="<?php echo $_SESSION['lname'];?>" placeholder="last name" required="true"/>
                            <span class="placeholder" data-placeholder="Last name"></span>
                        </div>
                  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label text-white bg-dark">EMAIL:</label>
                            <input type="text" placeholder="email"  value="<?php echo $_SESSION['user'];?>" name="email" placeholder="Company name"/>
                        </div>
                        <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label text-white bg-dark"> PHONE NUMBER:</label>
                            <input type="tel" placeholder="phone number" value="<?php echo $_SESSION['umn'];?>" name="pno" required>
                            <span class="placeholder" data-placeholder="Phone number"></span>
                        </div>
                        
                        <div class="mb-3">
  <label for="formGroupExampleInput" ></label>
                            <select class="country_select text-white bg-dark" name="city" required>
								<option value="0">--select country--</option>
                                <option value="1">gujarat</option>
                                <option value="2">Delhi</option>
                                <option value="4">bombay</option>
                            </select>
                        </div>
                        
                       
                        
                       
						<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label text-white bg-dark">DATE</label>
                            <input type="date"  name="Date" required/>
                            <span class="placeholder" data-placeholder="Town/City"></span>
                        </div>
                        <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label text-white bg-dark"> ZIP /POSTCODE:</label>
                            <input type="text"  name="zip" placeholder="Postcode/ZIP" required/></br>
							</div>
							 <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label text-white bg-dark">ADDRESS:</label>
							 <input type="text" value="<?php echo $_SESSION['ars'];?>" name="address" placeholder="enter address" required/>
                        </div>
                        <div class="mb-3">
  <label for="formGroupExampleInput"></label>
                            <select class="country_select  text-white bg-dark" name="method" required>
								<option value="1">--select payment-method--</option>
                                <option value="1">cash-on-delivery</option>
                                <option value="2">credit-card</option>
                                <option value="4">e-banking</option>
                            </select></div>
					
							 <div class="mb-3">
  <label for="" class="form-label "> </label>
                    <button type="submit" class="w-100 bg-danger fs-4 text-white btn-center" class="test-decoration-none text-center" type="submit" name="confirm" value="confirm"   />confirm
				   </button>
							</div>
            
                      
                    </form>
                </div>
				</div>
		</div>   
		
		
                <!--<div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a href="#"><h4>Product <span>Total</span></h4></a></li>
                            <li><a href="#">Fresh Blackberry <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Tomatoes <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>$2160.00</span></a></li>
                            <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                            <li><a href="#">Total <span>$2210.00</span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Check payments</label>
                                <div class="check"></div>
                            </div>
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                Store Postcode.</p>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Pay via PayPal; you can pay with your credit card if you don�t have a PayPal
                                account.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I�ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
                        <div class="text-center">
                          <a class="button button-paypal" href="#">Proceed to Paypal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
  </section>
  <!--================End Checkout Area =================-->
<?php
include "config.php";

if(isset($_POST['confirm']))
{
$m=$_POST['id'];
$a=$_POST['firstnm'];
$b=$_POST['lastnm'];
$c=$_POST['email'];
$d=$_POST['pno'];
$e=$_POST['city'];
$f=$_POST['Date'];
$g=$_POST['zip'];
$h=$_POST['address'];
$i=$_POST['method'];


$qry="INSERT into  adtcard (fnm,lnm,email,phone,city,date,code,address,pmethod) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

$sql=mysqli_query($con,$qry);

if($sql>0)
{
	echo "<script>alert(' added');location.href='order.php'</script>";

}
else
{
	echo "<script>alert(' not added');";
}






}

?>


<?php 
        include"footer.php";
        ?>