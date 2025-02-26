<?php
	
    session_start();
	
    session_unset();
    session_destroy();
    echo"logout sucess";
    header("location:login.php");
	
	


?>