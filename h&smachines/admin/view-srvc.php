<?php
  	include'header.php';
  ?>

     
      

   
	

<title>view product</title>

</head>

<body>
    <br/>
    <br/>
    
<div class="container boarder-dark">	
<div class="row">
<div class="col-md-10 m-auto">
<h1  class="text-warning text-center fs-3 fw-bold my-3">VIEW PRODUCT</h1>
<table class="table border border-primary table-hover border my-5 ">


  <thead class=" bg-dark text-white fs-5 font-monospace text-center">
    <th class="fw-bold">id</th>
	<th class="fw-bold">name</th>
	<th class="fw-bold">image</th>
    
    <th class="fw-bold">Details</th>
    
  </thead>
 <tbody class="text-center"	>
 <?php
 	include'config.php';
	$s="SELECT * FROM `service`";
	$record=mysqli_query($con,$s);
	while($row=mysqli_fetch_array($record))
	{
	?>
  
	<tr>
	<td><?php echo $row['id'];?></td>
		<td><?php echo $row[1];?></td>
		
		
			<td><img src="<?php echo "../../img/".$row[2]; ?> " height="100px" width="100px"></td>
			
		<td><?php echo $row[3];?></td>
			
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