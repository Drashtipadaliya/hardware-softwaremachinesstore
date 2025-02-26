<?php
  	include'header.php';
  ?>

     
      

   
	

<title>view Contect us</title>

</head>

<body>
    <br/>
    <br/>
    
<div class="container boarder-dark">	
<div class="row">
<div class="col-md-10 m-auto">
<h1  class="text-warning text-center fs-3 fw-bold my-3">VIEW CONTECT US</h1>
<table class="table border border-primary table-hover border my-5 ">


  <thead class=" bg-dark text-white fs-5 font-monospace text-center">
    <th class="fw-bold">id</th>
	<th class="fw-bold">name</th>
    <th class="fw-bold">address</th>
    <th class="fw-bold">mobileno</th>
    <th class="fw-bold">emailID</th>
	
	
  </thead>
 <tbody class="text-center"	>
 <?php
 	include'config.php';
	$s="SELECT * FROM `cnt`";
	$record=mysqli_query($con,$s);
	while($row=mysqli_fetch_array($record))
	{
	?>
  
	<tr>
	<td><?php echo $row[0];?></td>
		<td><?php echo $row[1];?></td>
		
		
			<td><?php echo $row[2];?></td>
			
		<td><?php echo $row[3];?></td>
		<td><?php echo $row[4];?></td>
    
			
	</tr>
	
 
 <?php
 }
 ?>
 
 </tbody>
</table>
</div>
</div>
</div>

</body>
</html>

   

     <?php
		include'footer.php';
	?>