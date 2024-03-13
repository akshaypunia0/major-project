<?php
include "dbconnect.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

$sql="DELETE FROM postjob WHERE id=$id";

if($conn->query($sql))
{
	header('Location:postedjoblist1.php?delete=s');
}
else
{
	echo $conn->error;
}
?>