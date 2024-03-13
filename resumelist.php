<html>
<body>
<head>
		<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<script>
function logout()
{
	window.location="logout.php";
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
	
<h2><small><a href="logout1.php" style="float:right;margin:10px;">Logout</a></small></h2>
<h2><small><a href="postedjoblist1.php" style="float:right;margin:10px;">Posted requirements</a></small></h2>
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
  <strong>Success!</strong> Resume Deleted.
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

<h1 style="background-color:#999966;padding:10px;">Posted Resume</h1>
<br>
<hr>

<br>
<?php

$sql="select *from resume order by id desc limit $start_from,$num_rec_per_page";

$result=$conn->query($sql);
while($row=$result->fetch_assoc())

{?>
<?php $id=$row['id'];?>


<div class="row">
<div class="container">
<div class="media" style="border:1px solid lightgrey;background-color:white;">
  <div class="media-left">
    <img src="<?php echo $row['Photo'];?>" class="media-object" style="width:100px" alt="image-Not uploaded">
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php if($row['Title']!="") echo "Title: ".$row['Title'];?></h4>
    <h4 class="media-heading"><?php echo "Name: ".$row['Name'];?></h4><br>
	<b>Keyskills:</b><?php echo $row['Keyskills'];?><br><br>
    <a href="deleteresume1.php?id=<?php echo $id; ?>" onclick="return confirmdelete()"><button type="button" class="btn">Delete</button></a>
    <a href="resumedetail1.php?id=<?php echo $id; ?>"><button type="button" class="btn">view detail</button></a>
	<?php if($row['Resume']!=""){ ?>
    <a href="<?php echo $row['Resume'];?>" ><button type="button" class="btn">Resume</button></a>
	<?php } ?>
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




<!--pagination-->
<center>
<div>
<?php
$sql1="select * from resume";
$result1=$conn->query($sql1);
$total_records=$result1->num_rows;
$num_rec_per_page=10;
$total_pages=ceil($total_records/$num_rec_per_page);
$class="";
echo"<ul class='pagination'>";
echo"<li><a href='resumelisting.php?page=1'>|<</a></li>";
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
	echo"<li class=$class><a href='resumelisting.php?page=$j'>$j</a></li>";
		
}
echo"<li><a href='resumelisting.php?page=$total_pages'>>|</a></li>"

?>
</div>
</center>

<!--/pagintion-->
</body>
</html>