<html>	
<head>
<title>user login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="contenter">
 <div class="row"> 
 <div class="col-md-6 bg-white mt-5 m-auto shadow font-monospace border border-info">
 
 <p class="text-warning text-center fs-3 fw-bold my-3">user login</p>
<form action="#" method="post">
	<div class="md-3">
	<label for="">Email</label>
	<input type="email"  name="email" plaseholder="Enter Email Id" class="form-control w-100 fs-4 text-black" required />
	</div>
	
	<div class="md-3">
	<label for="">User password:</label>
	<input type="password" name="pass" id="pass" plaseholder="enter user password" class="form-control"  required/>
	</div>
	<div class="col-auto">
	
	<input type="checkbox" onClick="myFunction()"><label class="form-check-label" for="autoSizingCheck2">
   show Password
	</label> 
</div>	
	<div class="md-3">
		<button name="submit" class="w-100 bg-danger fs-4 text-white">Login</button>
	</div>
	
	<div class="md-3">
		<button class="w-100 bg-warning fs-4 text-white" ><a href="form.php" class="test-decoration-none text-white">SIGN UP</a></button>
	</div>


</form> 
</div>
</div>
</div>
<body>
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
include "config.php";

if(isset($_POST["submit"]))
{
	//$fname=$_POST["fnm"];
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $qry="SELECT * from register where email='$email' AND password='$pass'";
  $a=mysqli_query($con,$qry);
  $r=mysqli_fetch_array($a);
 
//session_start();
  if($r>0)
  {  
     $e='tedvision17@gmail.com';
     $p='@ted17';
	 
    if($email==$e && $pass==$p)
	{
		$_SESSION['admin']=$_POST['email'];
		//$_SESSION['unm']=$r['fname'];
	    echo"<script>alert('welcome admin'); location.href='admin/index.php';</script>";
	}
	else
	{
		$_SESSION['UID']=$r['id'];
		$_SESSION['lname']=$r['lname'];
		$_SESSION['uname']=$r['fname'];
		$_SESSION['umn']=$r['mobile'];
		$_SESSION['pwd']=$r['password'];
		$_SESSION['ars']=$r['address'];
	   $_SESSION['user']=$r['email'];
	   echo "<script>alert('login success'); location.href='fpage.php';</script>";
	  
	 }
  }
  else
  {
		echo"<script>alert('Please Enter valid Email and Password');</script>";
  }
}
?>





