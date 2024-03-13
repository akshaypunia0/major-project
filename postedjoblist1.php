<!Doctype html>
<html>
<head>
<title>
Xploit's Enterprises
</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script>
function logout()
{
	window.location="logout1.php";
}
 function confirmdelete()
 {
	 if(confirm('Are you sure you want delete this information'))
	 {
		 return true;
	 }
	 else
	 {
		 return false;
	 }
 }
</script>




</head>


<body>
<h2><small><a href="logout1.php" style="float:right;margin:10px;">Logout</a></small></h2>
<h2><small><a href="resumelist.php" style="float:right;margin:10px;">Posted resume</a></small></h2>
<h2><small><a href="image1.php" style="float:right;margin:10px;">Upload Image</a></small></h2>
<?php
include "config1.php";
include "dbconnect.php";

if(isset($_GET['delete']))
{
	$success=$_GET['delete'];
	if($success=='s')
	{
		echo"<div class='alert alert-success'>
  <strong>Success!</strong> Job Deleted.
</div>";
	}
	
} 

if(isset($_GET['page']))
{
	$page=$_GET['page'];
}	
else
{
	$page=1;
}
$num_rec_per_page=10;
$start_from=($page-1)*$num_rec_per_page;	
?>

<h1 style="background-color:#999966;padding:10px;">Posted Requirements</h1>
<br>
<hr>
<?php

$sql="select *from postjob order by id desc limit $start_from,$num_rec_per_page";

$result=$conn->query($sql);
while($row=$result->fetch_assoc())

{?>
<?php $id=$row['id'];?>


<div class="row">
<div class="container">
<div class="media" style="border:1px solid lightgrey;background-color:white;">
  
  <div class="media-body">
 
    <h4 class="media-heading" style="background-color:#c8e91e;" ><?php if($row['Title']!="") echo "Title: ".$row['Title'];?></h4><br>
    
	&nbsp;&nbsp;<b>Company Name:</b><?php echo "".$row['Company_name'];?><br>
	&nbsp;&nbsp;<b>Location:</b><?php echo $row['City'].",".$row['State']."(".$row['Country'].")";?><br>
	&nbsp;&nbsp;<b>Experience:</b><?php echo $row['Exp_min']."-".$row['Exp_max']." Years";?><br>
	&nbsp;&nbsp;<b>Monthly salary:</b><?php echo $row['Sal_min']."-".$row['Sal_max']." INR";?><br>
	
    &nbsp;&nbsp;<a href="deletejob1.php?id=<?php echo $id; ?>" onclick="return confirmdelete()"><button type="button" class="btn">Delete</button></a>
    &nbsp;&nbsp;<a href="jobdetail1.php?id=<?php echo $id; ?>"><button type="button" class="btn">view detail</button></a>
   
	<br>
	<br>
  </div>
</div>

</div>


</div>
<br>

<?php
}
?>


<center>
<div>
<?php
$sql1="select * from postjob";
$result1=$conn->query($sql1);
$total_records=$result1->num_rows;
$num_rec_per_page=10;
$total_pages=ceil($total_records/$num_rec_per_page);
$class="";
echo"<ul class='pagination'>";
echo"<li><a href='postedjoblist1.php?page=1'>|<</a></li>";
for($j=1;$j<=$total_pages;$j++)
{
	if(isset($_GET['page']))
	{
		if($_GET['page']==$j)
		{
			$class="active";
		}
		else
		{
			$class="";
		}
	}
	echo"<li class=$class><a href='postedjoblist1.php?page=$j'>$j</a></li>";
		
}
echo"<li><a href='postedjoblist1.php?page=$total_pages'>>|</a></li>"

?>
</div>
</center>

</body>
</html>