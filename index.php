<!DOCTYPE HTML>
<html>
<title>Xploit enterprises</title>
<body>
	<?php
	include "header.php";
	?>
   <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img3.png);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">Welcome To Xploit enterprises</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> 
	
	<br><br>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Welcome To Xploit enterprises</h2>
				 India is ranked second in terms of population. With a population of around 1.2 billion, this country is facing a huge problem of unemployment. Xploit’S ENTERPRISES, based in Mumbai, Maharashtra, is working at full pace to eradicate the evil of unemployment from our society.Xploit’S ENTERPRISES has been providing placement solutions to all its valuable clients.
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6 animate-box" data-animate-effect="fadeIn">
					<div class="gtco-staff">
						<img src="images/img1.jpg" >
						<h3>Career consultant</h3>

						<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita.</p>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 animate-box" data-animate-effect="fadeIn">
					<div class="gtco-staff">
						<img src="images/img1.jpg" >
						<h3>Overseas placement</h3>

						<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita.</p>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 animate-box" data-animate-effect="fadeIn">
					<div class="gtco-staff">
						<img src="images/img1.jpg" >
						<h3>Domestic placement</h3>

						<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita.</p>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>

<?php
	include "dbconnect.php";
	
	$sql="select max(id) as max_id from image";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	$max=$row['max_id'];
	//echo $row['max_id'];
	
	$sql1="select img_path from image where id=$max";
	$result1=$conn->query($sql1);
	$row1=$result1->fetch_assoc();
	$path=$row1['img_path'];
	
	
	?>

	<div id="gtco-products">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>CERTIFICATE</h2>
					<p>Xploit,S Enterprises,ISO 9001:2017 Certified</p>
					
				</div>
			</div>
			<div class="row animate-box">
				<div class="owl-carousel owl-carousel-carousel">
					<div class="item">
						<img src="images/sat.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
					<div class="item">
						<img src="images/img9.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
					<div class="item">
						<img src="images/vat.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
					<div class="item">
						<img src="images/img10.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
			</div>
		</div>
	</div>
   
	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>SEARCH</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
				
			</div>
		
			<div class="row animate-box">
				<div class="col-md-12">
					<form class="form-inline" action="search1.php" method="post">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Enter Keywords</label>
								<input type="text" class="form-control" id="name" name="keyword" placeholder="Enter Keywords">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Enter Location</label>
								<input type="text" class="form-control" id="name"  name="loc" placeholder="Enter location">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
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