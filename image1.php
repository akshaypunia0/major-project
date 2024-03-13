<?php
include "config1.php";
?>
<!Doctype html>
<html>
<head>
<title>Alvas Enterprises</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</head>

<body>

<h2><small><a href="logout1.php" style="float:right;margin:10px;">Logout</a></small></h2>
<h2><small><a href="postedjoblist1.php" style="float:right;margin:10px;">Posted requirements</a></small></h2>
<h2><small><a href="resumelist.php" style="float:right;margin:10px;">Posted Resume</a></small></h2>
<h1 style="background-color:#999966;padding:10px;">Upload Image</h1>
<?php
if(isset($_GET['upload']))
{
	if($_GET['upload']=="yes")
	{
		echo "<div class='alert alert-success'>
  <strong>Success!</strong> Image uploaded.
</div>";

	}
}

if(isset($_GET['upload']))
{
	if($_GET['upload']=="no")
	{
		echo "<div class='alert alert-danger'>
  <strong>Unsuccessfull!</strong> Image not uploaded.
</div>";

	}
}


?>
<br>
<br>
<br>
<br>
<div class="container">

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="Upload_image1.php">

<div class="form-group">
<label class="control-label col-sm-offset-2 col-sm-2" for="image">Upload Image</label>
<div class="col-sm-4">
<input type="file" class="form-control" name="s_image" value="" required>
</div>
</div>

<div class="col-sm-offset-4 col-sm-4">
<button type="submit" class="btn btn-primary">Upload</button>
</div>


</form>


</div>

</body>
</html>