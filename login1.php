<?php
include "config1.php";
include "dbconnect.php";
 
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select username,password from login where username='$username' and password='$password' ";

$result=$conn->query($sql);

if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
     $_SESSION['username']=$row['username'];
	 $_SESSION['password']=$row['password'];
	 
	
	 header("Location:resumelist.php");
  }

}
else
{
	header("Location:admin1.php?error=y");
}

?>