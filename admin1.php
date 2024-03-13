


<html>
<head>
<title>admin page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

.color{
	background-color:lightblue;
	margin-top:100px;
	margin-left:400px;
	margin-right:300px;
	padding:50px;
	border-radius:20px;
}

</style>
 
 
 </head>

<body>

<?php

if(isset($_GET['log']))
{
	if($_GET['log']=='no')
	{
		echo "<div class='alert alert-danger'> <strong>Unsuccessful:</strong>..To access this page please login first. </div>";
	}
}


if(isset($_GET['error']))
{
	if($_GET['error']=='y')
	{
		echo "<div class='alert alert-danger'><strong>Unsuccessful:</strong>..Incorrect Username or Password. </div>";
	}
}

if(isset($_GET['satyam']))
{
	if($_GET['satyam']=='s')
	{
		echo "<div class='alert alert-danger'><strong>successful:</strong>..logout successfully. </div>";
	}
}



?>
<div class="color">
<div class="container">
<h2>ADMIN LOGIN</h2>

<form action="login1.php" method="post">
<div class="form-group">
<label class="control-label col-sm-10">Username:</label>
<div class="col-sm-5">
<input type="text" class="form-control" placeholder="Enter username" name="username">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-10">Password:</label>
<div class="col-sm-5">
<input type="password" class="form-control" placeholder="Enter password" name="password">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-10"></label>
<div class="col-sm-3">
<button type="submit" name="Login" class="btn btn-default">Login</button>

</form>
</div>
</body></html>
