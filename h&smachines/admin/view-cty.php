<?php
  include "header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

 


<body>
</body>
</html>

<BR/>
<BR/>
		<!-- banner-text --> 
	
<div class="container boarder-dark">	
<div class="row">
<div class="col-md-10 m-auto">
<h1  class="text-warning text-center fs-3 fw-bold my-3">VIEW CATEGORY</h1>
      
     	
	<center>
 <table class="table border border-yellow table-hover border my-5 ">
  <thead class=" bg-dark text-white fs-5 font-monospace text-center">
 <tr>
 <th class="fw-bold">PID</th>
 <th class="fw-bold">CATEGORY NAME</th>
 <th class="fw-bold">IMAGE</th>
 <th class="fw-bold" >EDIT</th>
 <th class="fw-bold">DELETE</th>
 </tr>
 </thead>
  <tbody class="text-center">
 <?php 
	include "config.php";
	$qry="select * from category";
	$qq=mysqli_query($con,$qry);
	while($rec=mysqli_fetch_array($qq))
	{
		?>
		<tr>
		<td align="center"><?php echo $rec[0];?></td>
		<td align="center"><?php echo $rec[1];?></td>	
		<td align="center"><img src="../../img/<?php echo $rec[2];?>" style="height:60px;width:70px" /> </td>
				
			<td><a href="ctgry.php?id=<?php echo $rec[0];?>" class="btn btn-danger"><b >EDIT</a> </b></td>
			<td style="padding:10px;"><a href="dctgry.php?id=<?php echo $rec[0];?>" class="btn btn-warning"><b>DELETE</b></a> </td>
			</tr>		
		<?php
        	}
		?>
			
    </tbody>
			
			
    </table>
                
    </center>
       
    </div>
    </div>
    </div>
				<?php  include "footer.php"?>