<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<body>
	<?php
	include "header.php";
	?>
	<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/img8.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">For Employer</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<br>
		<?php
if(isset($_GET['ufile']))
{
	if($_GET['ufile']=='n')
	{
		echo "<div class='alert alert-danger'>
  <strong>ERROR:</strong>..ILLEGAL FILE TYPE .
</div>";
	}
	
}
	
if(isset($_GET['success']))
{
	if($_GET['success']=='y')
	{
		echo "<div class='alert alert-success'>
  <strong>Success!</strong> Form submission done successfully.
</div>";
	}
	
}	
	?>	
<table class="table">
<tr>

<td style="text-align:center;"><span style="color:red;"> *</span>fields are mandatory[Don't use single quote(') anywhere]</td>
</tr>
</table>


<form class="form-horizontal" method="post" name="jobform" action="insertpostjob1.php" enctype="multipart/form-data">

<div class="form-group">
<label class="control-label col-sm-3" for="title" >Job Title<span style="color:red;"> *</span>:</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="title" placeholder="Enter Title"  required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Company" >Company Name/Owner Name<span style="color:red;"> *</span>:</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="company" placeholder="Enter Company Name" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="email">Email-Id<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="email" class="form-control input-sm" value="" name="email" Placeholder="Enter email" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Company" >Number of vacancy<span style="color:red;"> *</span>:</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="vacancy" placeholder="Enter Number of vacancies" pattern="[0-9]+" title="only digits are allowed" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Company" >Qualification<span style="color:red;"> *</span>:</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="qualification" placeholder="Enter Qualification"   required>
</div>
</div>


<div class="form-group">
<label class="control-label col-sm-3" for="type" >Job Type<span style="color:red;"> *</span>:</label>
<div class="col-sm-3">
<select class="form-control" name="Jtype" required>
<option value="">Select</option>
<option value="full time">Full Time</option>
<option value="part time">Part time</option>
<option value="work from home">Work from home</option>
<option value="internship">Internship</option>
<option value="work abroad">Work abroad</option>
</select>

</div>

<label class="control-label col-sm-2" for="Role" >Role<span style="color:red;">*</span>:</label>
<div class="col-sm-3">
<input type="text" class="form-control" name="role" placeholder="Enter Role"   required>
</div>

</div>

<div class="form-group">

<label class="control-label col-sm-3" for="title" >Mobile No.<span style="color:red;">*</span>:</label>
<div class="col-sm-3">
<input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile No." pattern="[0-9]{10}" maxlength="10" required title="Only 10 digits are allowed">
</div>

<label class="control-label col-sm-2" for="title" >Job location<span style="color:red;">*</span>:</label>
<div class="col-sm-3">
<input type="text" class="form-control" name="city" placeholder="Job location"  required>
</div>

</div>

<div class="form-group">
  <label class="control-label col-sm-3" for="Country">Country<span style="color:red;"> *</span>:</label>
  <div class="col-sm-8">
  <select class="form-control" name="country" required>
    <option value="" selected>select</option>
	<option value="Afghanistan">Afghanistan</option>
	
				
		<option value="Albania" >Albania</option>
	
				
		<option value="Algeria" >Algeria</option>
	
				
		<option value="American Samoa" >American Samoa</option>
	
				
		<option value="Andorra" >Andorra</option>
	
				
		<option value="Angola" >Angola</option>
	
				
		<option value="Anguilla" >Anguilla</option>
	
				
		<option value="Antarctica" >Antarctica</option>
	
				
		<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
	
				
		<option value="Argentina" >Argentina</option>
		
<option value="India" >india</option>	
				
		<option value="Armenia" >Armenia</option>
	
				
		<option value="Aruba" >Aruba</option>
	
				
		<option value="Australia" >Australia</option>
	
				
		<option value="Austria" >Austria</option>
	
				
		<option value="Azerbaijan" >Azerbaijan</option>
	
				
		<option value="Bahamas" >Bahamas</option>
	
				
		<option value="Bahrain" >Bahrain</option>
	
				
		<option value="Bangladesh" >Bangladesh</option>
	
				
		<option value="Barbados" >Barbados</option>
	
				
		<option value="Belarus" >Belarus</option>
	
				
		<option value="Belgium" >Belgium</option>
	
				
		<option value="Belize" >Belize</option>
	
				
		<option value="Benin" >Benin</option>
	
				
		<option value="Bermuda" >Bermuda</option>
	
				
  </select>
  </div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="State">State<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="text" class="form-control input-sm"  name="state" Placeholder="Enter state" required  pattern="[a-zA-Z ]+" title="only Lettrs and white spaces are allowed">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Company" >Experience<span style="color:red;"> *</span>:</label>
<div class="col-sm-4">
<div class="input-group">
    <span class="input-group-addon">Min</span>
	<select class="form-control" name="Emin" required>
<option value="">Select Years</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>

</select>

    <!--<input id="min" type="text" class="form-control" name="Emin" pattern="[0-9]+" required title="only digits are allowed">-->
  </div>
</div>

<div class="col-sm-4">
<div class="input-group">
    <span class="input-group-addon">Max</span>
	<select class="form-control" name="Emax" required>
<option value="">Select Years</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>

</select>
    <!--<input id="Max" type="text" class="form-control" name="Emax" required pattern="[0-9]+" title="Only digits are allowed">-->
  </div>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Company" >Monthly salary<span style="color:red;"> *</span>:</label>
<div class="col-sm-4">
<div class="input-group">
    <span class="input-group-addon">Min</span>
    <input id="min" type="text" class="form-control" name="Smin" pattern="[0-9]+" required title="only digits are allowed">
  </div>
</div>

<div class="col-sm-4">
<div class="input-group">
    <span class="input-group-addon">Max</span>
    <input id="Max" type="text" class="form-control" name="Smax" required pattern="[0-9]+" title="Only digits are allowed">
  </div>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="title" >Description<span style="color:red;"> *</span>:</label>
<div class="col-sm-8">
<textarea name="desc" rows="4" class="form-control" placeholder="Enter Description"  required></textarea>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Name">Attach Document: </label>
<div class="col-sm-8">
<input type="file" class="form-control input-sm" value="dfile" name="dfile" >Allowed file types are .doc,.docx,.rtf,.pdf
</div>
</div>



<div class="form-group">
<div class="col-sm-4 col-sm-offset-3">
<button type="submit" class="btn"  name="submit" id="Button" >Post</button>
</div>
</div>


</form>



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
