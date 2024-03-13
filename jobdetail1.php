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

</head>
<?php
include "dbconnect.php";
if(!isset($_GET['serial'])){
include "config1.php";
}


if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
if(isset($_GET['value1']))
{
	$value1=$_GET['value1'];
}

if(isset($_GET['value2']))
{
	$value2=$_GET['value2'];
}

$sql="select *from postjob where id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$path=$row['Desc_file'];
echo"<div class='container'>";
echo"<h2 style='padding:10px;background-color:#999966;'>Job Detail</h2><br>";
echo"<b>Job Title:</b>".$row['Title'];
echo"<br>";
echo"<br>";
echo"<div class='table-responsive'>";
echo"<table class='table'> ";

if(!isset($_GET['serial'])){
echo"<tr><th>Hiring For(Company name):</th><td>".$row['Company_name']."</td></tr>";
}
echo"<tr><th>Number Of Vacancy:</th><td>".$row['Vacancy']."</td></tr>";
echo"<tr><th>Qualification:</th><td>".$row['Qualification']."</td></tr>";
echo"<tr><th>Country:</th><td>".$row['Country']."</td></tr>";
echo"<tr><th>State:</th><td>".$row['State']."</td></tr>";
echo"<tr><th>Experience</th><td>".$row['Exp_min']."-".$row['Exp_max']." Years</td></tr>";
echo"<tr><th>Monthly Salary:</th><td>".$row['Sal_min']."-".$row['Sal_max']." INR</td></tr>";
echo"<tr><th>Job Type:</th><td>".$row['Job_type']."</td></tr>";
echo"<tr><th>Role:</th><td>".$row['Role']."</td></tr>";
if(!isset($_GET['serial'])){
echo"<tr><th>Mobile No.:</th><td>".$row['Mobile_no']."</td></tr>";
echo"<tr><th>Email-id:</th><td>".$row['Email']."</td></tr>";
}
echo"<tr><th>City:</th><td>".$row['City']."</td></tr>";

if($row['Desc_file']!="")
{
echo"<tr><th>Descritption File:</th><td><a href='$path'><button type='button' class='btn'>Attachment</button></a></td></tr>";
}
echo"</table>";
echo"</div>";

echo"<b>Job Description:</b><br>";
echo $row['Description'];
echo "<br><br>";

if(isset($_GET['serial'])){
echo"<b><h4>Contact details</h4></b>";

echo"<b>Email-Id:</b> jobs@Xploitsenterprises.in<br>";
echo"<b>Mobile No.:</b> 7039961376/7028123819<br><br>";

echo"<b><h4>Company Name:</h4></b>Xploit'S ENTERPRISES";


echo"<br>";
echo"<br>";
}
if(isset($_GET['serial']))
{
if($_GET['serial']=="2")
{
echo"<button type='button' class='btn'><a href='search.php?value1=$value1&value2=$value2' target='_top'> back</a></button>";
}
if($_GET['serial']=="1"){
echo"<button type='button' class='btn'><a href='currentjob1.php' target='_top'> back</a></button>";
}
}
else
{
	echo"<button type='button' class='btn'><a href='postedjoblist1.php' target='_top'> back</a></button>";
}

echo"</div><br>";
?>
</body>
</html>