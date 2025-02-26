<?php
  include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

 


<body>
</body>
</html>

<br/>
<br/>
<div class="container boarder-dark">	
<div class="row">
<div class="col-md-10 m-auto">
<h1  class="text-warning text-center fs-3 fw-bold my-3"> VIEW BILL </h1>


 <table class="table border border-yellow table-hover border my-5 ">
  <thead class=" bg-dark text-white fs-5 font-monospace text-center">
 <tr>
 <th class="fw-bold">Id</th>
 <th class="fw-bold">FName</th>
 <th class="fw-bold">LName</th>
 <th class="fw-bold" >Mobile</th>
 <th class="fw-bold">Email</th>
 <th class="fw-bold">Amount</th>
  </tr>
 </thead>
  
 
<?php 
	include "config.php";

	  $sql="SELECT * FROM bill";
	  $r=mysqli_query($con,$sql);
	  while ($a=mysqli_fetch_array($r)) 
	  {
  
 

  echo"<tr>";
  echo"<td class='b'>".$a[0]."</td>";
  echo"<td class='b'>".$a[1]."</td>";
  echo"<td class='b'>".$a[2]."</td>";
  echo"<td class='b'>".$a[3]."</td>";
  echo"<td class='b'>".$a[4]."</td>";
  echo"<td class='b'>".$a[5]."</td>"; 
  echo "</tr>";
  
  }
  ?>
  </table>

  <div>
</div>
</div>

     
	

   </div>
</div>


<?php
  include("footer.php");
?>