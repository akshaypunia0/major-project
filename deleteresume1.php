<?php
include "dbconnect.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

$sql="DELETE FROM resume WHERE id=$id";

if($conn->query($sql))
{
	header('Location:resumelist.php?delete=s');
}
else
{
	echo $conn->error;
}
?>