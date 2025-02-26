
<?php
include"config.php";
?>

		<!-- banner-text --> 
	
	<!-- //banner --> 


	<title>register form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="contenter">
 <div class="row">


 <div  class="col-md-6 bg-white mt-5 m-auto shadow font-monospace border border-info">
 <p class="text-warning text-center fs-3 fw-bold my-3">user register</p>
<form method="post" enctype="multipart/form-data">
	<div class="md-3">
	<label for="">Firstname:</label>
	<input type="text"  name="fnm" plaseholder="Enter First Name" class="form-control" required />
	</div>

	<div class="md-3">
	<label for="">Lastname:</label>
	<input type="text"  name="lnm" plaseholder="Enter Last Name" class="form-control" required />
	</div>

	<div class="md-3">
	<label for="">Email:</label>
	<input type="text"  name="email" plaseholder="Enter Email Id" class="form-control" requird pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
	</div>
	<div class="md-3">
	<label for="">mobile No:</label>
	<input type="text" title="enter only 10 numeric value" id="mno" name="mno" plaseholder="Enter Mobile No" class="form-control" required pattern="^[0-9]{10}$" />
	</div>
	<div class="md-3">
	<label for="">Password:</label>
	<input type="password" name="pass" id="pass" required pattern="[A-Za-z0-9]{1,20}" plaseholder="enter password" class="form-control" />
	</div>
	<div class="md-3">
	<label for="">Address:</label>
	<textarea name="adrs"  plaseholder="enter Address" class="form-control"required />
</textarea>
	</div>

					
	<div class="col-auto">
	
      <input type="checkbox" onclick="myFunction()"><label class="form-check-label" for="autoSizingCheck2">
     show Password
      </label>
   
  </div>	

  <div class="md-3">
		<button name="submit" class="w-100 bg-danger fs-4 text-white"> SIGN UP</button>
	</div>
	<div class="md-3">
		<button class="w-100 bg-warning fs-4 text-white" ><a href="login.php" class="test-decoration-none text-white">ALREADY ACCOUNT</a></button>
	</div>
	</form> 
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
					
<?php
session_start();
if(isset($_POST['submit']))
{ 		//$id=$_POST["id"];
      $fname=$_POST["fnm"];
	  $lname=$_POST["lnm"];
	  $email=$_POST["email"];
	 // $mo=$_POST["mno"];
	  $pass=$_POST["pass"];
	  $address=$_POST["adrs"];
	   
$mo = $_POST ["mno"];  
if (!preg_match ("/^[0-9]*$/", $mo) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
} else {  
    echo $mo;  
} 
	 
	 
	  $qry="insert into register(fname,lname,email,mobile,password,address,role)values('$fname','$lname','$email','$mo','$pass','$address','user')";
	 // echo $qry;
	  $res=mysqli_query($con,$qry);
	    // mysqli_error($res);
		  echo $res; 
		  if($res)
		  {
		     
			 echo "<script>alert('Register Successfully')</script>";
			
			 
			 echo "<script>window.location.href='login.php'</script>";
			 
			 
			 
		  }
		  else
	      {
	         echo "<script>alert('Not Register Successfully...');</script>";
	      }

		 }
		  ?>
		  


