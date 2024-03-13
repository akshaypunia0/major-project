<!DOCTYPE HTML>
<html>
<body>
	<?php
	include "header.php";
	?>
	<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/img6.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">Post Resume</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php

if(isset($_GET['success']))
{
	if($_GET['success']=='y')
	{
		echo "<div class='alert alert-success'>
  <strong>Success:</strong>..Form Submission successful. 
</div>";
	}
}

if(isset($_GET['ufile']))
{
	if($_GET['ufile']=='n')
	{
		echo "<div class='alert alert-danger'>
  <strong>ERROR:</strong>..ILLEGAL FILE TYPE FOR RESUME. 
</div>";

	}	}

if(isset($_GET['uphoto']))
{
	if($_GET['uphoto']=='n')
	{
		echo "<div class='alert alert-danger'>
  <strong>ERROR:</strong>..ILLEGAL FILE TYPE FOR PHOTO.
</div>";
	}
}

?>
<table class="table" >
<tr>

<td style="text-align:center;"><span style="color:red;"> *</span>fields are mandatory[Don't use single quote(') anywhere]</td>
</tr>
</table>
<?php
if(isset($_GET['title']))
{
	$title=$_GET['title'];
	echo "<div><b>Applying For:&nbsp;&nbsp;</b>$title</div>";
}
else
{
	$title="";
}
?>
<form class="form-horizontal" name="Fresume" enctype="multipart/form-data" id="Fresume" method="post" action="insertresume1.php" >

<input type="hidden" value="<?php echo $title ; ?>" name="title">

<div class="form-group">
<label class="control-label col-sm-3" for="Name">Name<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="text" class="form-control input-sm" value="" name="name" Placeholder="Enter name" pattern="[a-zA-Z ]{2,100}" required title="only letters and white spaces are allowed">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Gender">Gender<span style="color:red;"> *</span>: </label>
<div class="radio col-sm-8">
  <label><input type="radio" name="gender" value="Male" required>Male</label>
  <label><input type="radio" name="gender" value="Female" required>Female</label>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="email">Email-Id<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="email" class="form-control input-sm" value="" name="email" Placeholder="Enter email" required>
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
	
				
		<option value="Bhutan" >Bhutan</option>
	
				
		<option value="Bolivia" >Bolivia</option>
	
				
		<option value="Bosnia and Herzegowina" >Bosnia and Herzegowina</option>
	
				
		<option value="Botswana" >Botswana</option>
	
				
		<option value="Bouvet Island" >Bouvet Island</option>
	
				
		<option value="Brazil" >Brazil</option>
	
				
		<option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
	
				
		<option value="Brunei Darussalam" >Brunei Darussalam</option>
	
				
		<option value="Bulgaria" >Bulgaria</option>
	
				
		<option value="Burkina Faso" >Burkina Faso</option>
	
				
		<option value="Burundi" >Burundi</option>
	
				
		<option value="Cambodia" >Cambodia</option>
	
				
		<option value="Cameroon" >Cameroon</option>
	
				
		<option value="Canada" >Canada</option>
	
				
		<option value="Cape Verde" >Cape Verde</option>
	
				
		<option value="Cayman Islands" >Cayman Islands</option>
	
				
		<option value="Central African Republic" >Central African Republic</option>
	
				
		<option value="Chad" >Chad</option>
	
				
		<option value="Chile" >Chile</option>
	
				
		<option value="China" >China</option>
	
				
		<option value="Christmas Island" >Christmas Island</option>
	
				
		<option value="Cocos (Keeling) Islands" >Cocos (Keeling) Islands</option>
	
				
		<option value="Colombia" >Colombia</option>
	
				
		<option value="Comoros" >Comoros</option>
	
				
		<option value="Congo" >Congo</option>
	
				
		<option value="Congo, The Democratic Republic Of The" >Congo, The Democratic Republic Of The</option>
	
				
		<option value="Cook Islands" >Cook Islands</option>
	
				
		<option value="Costa Rica" >Costa Rica</option>
	
				
		<option value="Croatia (local name: Hrvatska)" >Croatia (local name: Hrvatska)</option>
	
				
		<option value="Cuba" >Cuba</option>
	
				
		<option value="Cyprus" >Cyprus</option>
	
				
		<option value="Czech Republic" >Czech Republic</option>
	
				
		<option value="Denmark" >Denmark</option>
	
				
		<option value="Djibouti" >Djibouti</option>
	
				
		<option value="Dominica" >Dominica</option>
	
				
		<option value="Dominican Republic" >Dominican Republic</option>
	
				
		<option value="East Timor" >East Timor</option>
	
				
		<option value="Ecuador" >Ecuador</option>
	
				
		<option value="Egypt" >Egypt</option>
	
				
		<option value="El Salvador" >El Salvador</option>
	
				
		<option value="Equatorial Guinea" >Equatorial Guinea</option>
	
				
		<option value="India" >India</option>
	
				
  </select>
				
		
  </div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="State">State<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="text" class="form-control input-sm" value="" name="state" Placeholder="Enter state" required  pattern="[a-zA-Z ]+" title="only Lettrs and white spaces are allowed">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="City">City<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="text" class="form-control input-sm" value="" name="city" Placeholder="Enter city" required  pattern="[a-zA-Z ]+" title="only Lettrs and white spaces are allowed">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Mobile_no">Mobile No.<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">
<input type="text" class="form-control input-sm" value="" name="mobile_no" Placeholder="Enter Mobile Number" pattern="[0-9]{10}" maxlength="10" title="Plz enter 10 digits only" required>
</div>
</div>



<div class="form-group">
<label class="control-label col-sm-3" for="Gender">Education Details<span style="color:red;"> *</span>: </label>
<div class="col-sm-8">

<input type="text" class="form-control input-sm" value="" name="Edu" Placeholder="Enter qualifiacation" required>


</div>
</div>

<div class="form-group">
  <label class="control-label col-sm-3" for="Country">Work Experience:</label>
  <div class="col-sm-4">
  <select class="form-control" name="exp_in_years">
    <option selected="selected" value="">Years</option>
	<option  value="Fresher">Fresher</option>
			<option  value="1 Years">1 Years</option>		
				<option  value="2 Years">2 Years</option>		
				<option  value="3 Years">3 Years</option>		
				<option  value="4 Years">4 Years</option>		
				<option  value="5 Years">5 Years</option>		
				<option  value="6 Years">6 Years</option>		
				<option  value="7 Years">7 Years</option>		
				<option  value="8 Years">8 Years</option>		
				<option  value="9 Years">9 Years</option>		
				<option  value="10 Years">10 Years</option>		
				<option  value="11 Years">11 Years</option>		
		

</select>
</div>
<div class="col-sm-4">
<select name="exp_in_months" id="exp_in_months" class="form-control">
			<option  value="" selected>Months</option>
			<option  value="0 Months">0 Months</option>		
				<option  value="1 Months">1 Months</option>		
				<option  value="2 Months">2 Months</option>		
				<option  value="3 Months">3 Months</option>		
				<option  value="4 Months">4 Months</option>		
				<option  value="5 Months">5 Months</option>		
				
				
	</select>
</div>


</div>

<div class="form-group">
  <label class="control-label col-sm-3" for="Country">Total annual salary:</label>
  <div class="col-sm-4">
  <select class="form-control" name="lakhs">
    <option value="" selected>Lakhs</option>
           
			<option value="0 lakh">0</option>	
			<option value="1 lakh">1</option>
				<option value="2 lakhs">2</option>
				<option value="3 lakhs">3</option>
				<option value="4 lakhs">4</option>
				<option value="5 lakhs">5</option>
				<option value="6 lakhs">6</option>
				<option value="7 lakhs">7</option>
				<option value="8 lakhs">8</option>
				<option value="9 lakhs">9</option>
				<option value="10 lakhs">10</option>
		
		
			</select>
			</div>
		<div class="col-sm-4">
		 <select class="form-control" name="Thousands">
             <option value="" selected>Thousands</option>
			 <option value="0 Thousand">0</option>
			 <option value="5 Thousands">5</option>
				<option value="10 Thousands">10</option>
				<option value="15 Thousands">15</option>
				<option value="20 Thousands">20</option>
				<option value="25 Thousands">25</option>
				<option value="30 Thousands">30</option>
				<option value="35 Thousands">35</option>
				<option value="40 Thousands">40</option>
				<option value="45 Thousands">45</option>
				<option value="50 Thousands">50</option>
			
			</select> 
			</div>

	</div>		
 
<div class="form-group">
<label class="control-label col-sm-3" for="Name">Keyskills: </label>
<div class="col-sm-8">
<textarea  class="form-control input-sm" value="" name="keyskill" Placeholder="Enter your skills" rows="4"></textarea>
</div>
</div> 
 <br>
<div class="form-group">
<label class="control-label col-sm-3" for="Name">Attach Resume: </label>
<div class="col-sm-8">
<input type="file" class="form-control input-sm" value="rfile" name="rfile" >Allowed file types are:.doc,.docx,.rtf,.pdf
</div>
</div>
<br>
<div class="form-group">
<label class="control-label col-sm-3" for="Name">Upload Photo: </label>
<div class="col-sm-8">
<input type="file" class="form-control input-sm" value="rphoto" name="rphoto" >Allowed file types are:.jpg,.jpeg,.png,.gif
</div>
</div>

<div class="form-group">
<div class="col-sm-2 col-sm-offset-3">
<button type="submit" class="btn"  name="submit" id="Button" onclick="validate()">Submit</button>
</div>

<div class="col-sm-4">
<button type="Reset" class="btn"  name="Reset" id="Button">Reset</button>
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