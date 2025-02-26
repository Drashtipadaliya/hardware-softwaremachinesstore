<?php
	include "header.php";
	
?>
<br />
<br />
<br/>
<br/>
    <!-- ##### Contact Area Start ##### -->
    <title>reset password</title>

</head>
    <div class="contenter">
 <div class="row">


 <div  class="col-md-6 bg-white mt-9 m-auto shadow font-monospace border border-info">
 <p class="text-warning text-center bg-black fs-3 fw-bold my-3" >RESET PASSWORD</p>
<form method="post">
                       <div class="md-3">
	<label for="">Email:</label>
	<input type="text"  name="email" value="<?php echo $_SESSION['user']; ?>" plaseholder="Enter Email Id" class="form-control" required />
	</div>
    <div class="md-3">
	<label for=""> Old Password:</label>
	<input type="password" name="opass" id="pass" value="<?php echo $_SESSION['pwd']; ?>" plaseholder="enter password" class="form-control"required />
	</div>
		
                               
    <div class="md-3">
	<label for="">New Password:</label>
	<input type="password" name="pass" id="pass" plaseholder="enter password" class="form-control"required />
	</div>
	<div class="md-3">
	<label for="">Confirm Password:</label>
	<input type="password" name="cpass" id="pass" plaseholder="enter password" class="form-control"required />
	</div>
	
                                
    <div class="md-3">
      <input type="checkbox" onclick="myFunction()"><label class="form-check-label" for="autoSizingCheck2">
     show Password
      </label>
   
  </div>		


      <input type="reset" class="btn btn-primary btn-lg btn-block bg-danger my-4" value="RESET">
</form> 
 </div>
</div>
</div>				

<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
				
    <!-- ##### Contact Area End ##### -->
    <br />
<br />
<br/>
<br/>
   <?php
   	include "footer.php";
   ?>
   
   <?php

	if(isset($_POST['reset']))
	{
		include "config.php";
		
		$email=$_POST['email'];
		$opass=$_POST['opass'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		
		//if($pass==$cpass)
		//{
			$qry="update register set password='$pass' where email='$email'";
			echo $qry;
			/*	$q=mysqli_query($con,$qry);
		
			if($q>0)
			{
				echo "<script>alert('Reset password successfuly....');</script>";
			}
		
			else
			{
				echo "<script>alert(' not ');</script>";
			}
		}
		else
		{
			echo "<script>alert('password can not be match...');</script>";
		}*/
		
	}
?>