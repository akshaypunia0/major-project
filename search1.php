<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<body>
<?php
include "dbconnect.php";

if(isset($_GET['value1']))
{
	$value1=$_GET['value1'];
}
elseif(isset($_POST['keyword']))
{
$value1=$_POST['keyword'];
}
else
{
	$value1="";
}
if(isset($_GET['value2']))
{
	$value2=$_GET['value2'];
	
}
elseif(isset($_POST['loc']))
{
$value2=$_POST['loc'];
}
else
{
	$value2="";
}



?>
	<?php
	include "header.php";
	?>
	<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/img12.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">Search Jobs</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<br>
	 
  
	

	<?php
include "dbconnect.php";

$num_rec_per_page=5;
if (isset($_GET["page"])) 
{ 
$page  = $_GET["page"]; 
} 
else
{ 
$page=1; 
}

if(isset($_GET['value1']))
{
	$value1=$_GET['value1'];
}

if(isset($_GET['value2']))
{
	$value2=$_GET['value2'];
}

$start_from = ($page-1) * $num_rec_per_page;

$sql="select *from postjob where 1 limit $start_from,$num_rec_per_page";

if($value1!="")
{
$sql="select *from postjob where Description like '%$value1%' or Title like '%$value1%' limit $start_from,$num_rec_per_page";
}

if($value2!="")
{
$sql="select *from postjob where City like '%$value2%' or State like '%$value2%' or Country like '%$value2%' limit $start_from,$num_rec_per_page";	
}

if($value1!="" and $value2!="")
{
	$sql = "SELECT * FROM postjob  where Description like '%$value1%' and (City like '%$value2%' or State like '%$value2%' or Country like '%$value2%') limit $start_from,$num_rec_per_page";
}
$result = $conn->query($sql);

?>
<h2>Matches found are as follows</h2>
	<hr style="border:1px solid black;">
	<p>
	
	Xploit's Enterprises offers a properly maintained and regularly updated database of the Current Jobs. The candidates can visit the Current Jobs section to have a look at the relevant job openings so as to get a good start for their professional lives.
	</p>
	<?php
	//$sql= "select *from postjob";
	//$result=$conn->query($sql);
	if($result->num_rows>0)
	{
	while($row=$result->fetch_assoc())
	{
	?>
	<div style="border:1px solid lightgrey;margin:10px;box-sizing:border-box;">
	<div>
	<?php 
	$id=$row['id'];
	$title=$row['Title'];
	echo "<h4 style='background-color:#999966;'>&nbsp;&nbsp;".$row['Title']."</h4>";
	echo"&nbsp;&nbsp".$row['City'].",".$row['State'].",".$row['Country']."<br>";
	echo "&nbsp;&nbsp;<b>Experience:</b>&nbsp;".$row['Exp_min']."-".$row['Exp_max']." Years<br>";
	//echo"&nbsp;&nbsp;<b>Job Description:</b><br><p style='padding:10px;'>".$row['Description']."</p>";
	echo"&nbsp;&nbsp;<b>Monthly salary:</b>&nbsp;".$row['Sal_min']."-".$row['Sal_max']." INR<br><br>";
	echo"&nbsp;&nbsp;&nbsp;&nbsp;<a href='postresume1.php?title=$title' target='_top'><button type='button' class='btn'>Apply Job</button></a>&nbsp;&nbsp;&nbsp;&nbsp;";
	echo"<a href='jobdetail1.php?id=$id&serial=1' target='iframe_a'><button type='button' class='btn'>View Details</button></a>";
	echo"<br><br>";
	?>
	</div>
	<div>
	
	</div>
	</div>
	<?php
	}
	}
	else
	{
		echo "<b>Sorry! No search results fonund.</b>";
	}
	
	?>
	
	<center>
	<div>
	<?php
	if($value1!="")
{
$sql1="select *from postjob where Description like '%$value1%' or Title like '%$value1%'";
}

if($value2!="")
{
$sql1="select *from postjob where City like '%$value2%' or State like '%$value2%' or Country like '%$value2%'";	
}

if($value1!="" and $value2!="")
{
	$sql1 = "SELECT * FROM postjob  where Description like '%$value1%' and (City like '%$value2%' or State like '%$value2%' or Country like '%$value2%') ";
}
	
	
	$result1=$conn->query($sql1);
	
	$total_records = $result1->num_rows;
	$num_rec_per_page=5;
	$total_pages=ceil($total_records/$num_rec_per_page);
	echo"<ul class='pagination'>";
	echo "<li><a href='search1.php?page=1&value1=$value1&value2=$value2'>|<</a></li>  ";
	$class="";
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
		 echo "<li class=$class><a href='search1.php?page=".$j."&value1=$value1&value2=$value2'>".$j."</a></li> "; 
	}
	
	echo "<li><a href='search1.php?page=$total_pages&value1=$value1&value2=$value2'>>|</a></li>  ";
	echo"</ul>";
	
	?>
	
	</div>
	
	</center>
	
	
	
	<?php
	include "footer.php";
	?>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

	