<!Doctype html>
<html>
<head>
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
include "config1.php";
include "dbconnect.php";

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	
}
$sql="select *from resume where id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

?>

<div class="container">
<div  style="width:800px;margin-left:200px;background-color:#8FBC8F;padding:0px 0px 10px 0px;">

<center><h2 style="background-color:#BDB76B;color:black;padding:5px;">Detailed Resume</h2></center>

<form class="form-horizontal" name="Fresume" enctype="multipart/form-data" id="Fresume" method="post" action="" >

<div class="form-group">
<label class="control-label col-sm-4" for="Name">Name<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="text" class="form-control input-sm" name="name" value="<?php echo $row['Name'];?>" disabled>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-4" for="Gender">Gender<span style="color:red;"> *</span>: </label>
<div class="radio col-sm-8">
  <label><input type="radio" name="gender" value="Male" <?php if($row['Gender']=="Male"){echo "checked";} ?> disabled>Male</label>
  <label><input type="radio" name="gender" value="Female" <?php if($row['Gender']=="Female"){echo "checked";} ?> disabled>Female</label>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-4" for="email">Email-Id<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="email" class="form-control input-sm" value="<?php echo $row['Email-id'];?>" name="email" disabled>
</div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" for="Country">Country<span style="color:red;"> *</span>:</label>
  <div class="col-sm-8">
  <input type="text" class="form-control input-sm" value="<?php echo $row['Country'];?>" name="country" disabled>
  
  </div>
</div>

<div class="form-group">
<label class="control-label col-sm-4" for="City">City<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="text" class="form-control input-sm" value="<?php echo $row['City'];?>" name="city" disabled>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-4" for="Mobile_no">Mobile No.<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="text" class="form-control input-sm" value="<?php echo $row['Mobile_no'];?>" name="mobile_no" disabled>
</div>
</div>



<div class="form-group">
<label class="control-label col-sm-4" for="Gender">Education Details<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">

<input type="text" class="form-control input-sm" value="<?php echo $row['Edu_basic'];?>" name="Edu" Placeholder="Enter qualifiacation" required disabled>

</div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" for="Country">Work Experience<span style="color:red;"> *</span>:</label>
  <div class="col-sm-4">
 <input type="text" class="form-control input-sm" name="exp_in_years" value="<?php echo $row['Work_exp_y'];?>" disabled>
  
</div>
<div class="col-sm-4">
<input type="text" class="form-control input-sm" name="exp_in_months" value="<?php echo $row['Work_exp_m'];?>" disabled>

</div>


</div>

<div class="form-group">
  <label class="control-label col-sm-4" for="Country" required>Total annual salary<span style="color:red;"> *</span>:</label>
  <div class="col-sm-4">
  <input type="text" class="form-control input-sm" name="lakhs" value="<?php echo $row['sal_lakhs'];?>" disabled>
  
			</div>
		<div class="col-sm-4">
		<input type="text" class="form-control input-sm" name="thousand" value="<?php echo $row['sal_thousand'];?>" disabled>
		 
			</div>

	</div>		
 
<div class="form-group">
<label class="control-label col-sm-4" for="Name">Keyskills<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<textarea  class="form-control input-sm"  name="keyskill"  rows="4" disabled><?php echo $row['Keyskills'];?></textarea>
</div>
</div> 
 
 <div class="form-group">
<div class="col-sm-offset-4 col-sm-8">
<a href="resumelist.php"><button type="button" class="btn" Value="Back" style="background-color:#9ACD32;">Back</button></a>
</div>
</div>
</form>
</div>
</div>
<br>
<br>
</body>
</html>



