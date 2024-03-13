<?php
session_start();
if(!isset($_SESSION['username'])){
	  
		  
		  header("location:admin1.php?log=no");
	  }

?>