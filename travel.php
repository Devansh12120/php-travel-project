<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="css/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" href="maintravel.css" />
<script src="https://kit.fontawesome.com/332a215f17.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
<script src="js/indiamain.js"></script>
</head>
<style>
.grid{
	display:grid;
	grid-template-columns:30% 70%;
}
.grid img{
	height:300px;
	padding-right:20px;
}

</style>
<script>
	function check() {
		var destination = document.hotel.destination;
		var checkin  = document.hotel.checkin;
		var checkout = document.hotel.checkout;
		var adults = document.hotel.adults;
		var children = document.hotel.children;
		// var  = document.hotel.;
		// var  = document.hotel.;

			if (destination.value == 0) {
				alert("destination must be filled out");
				destination.style.border = "6px solid red";
				return false;
			}
			if (checkin.value == "") {
				alert("check - in must be filled out");
				checkin.style.border = "6px solid red";
				return false;
			}
			if (checkout.value == "") {
				alert("Check -out must be filled out");
				checkout.style.border = "6px solid red";
				return false;
			}
			if (checkin.value == checkout.value ) {
				alert("Date cannot be same");
				checkin.style.border = "6px solid blue";
				checkout.style.border = "6px solid blue";
				return false;
			}
			//   if (checkin.value > checkout.value) {
			//     alert("Check -out must be filled out");
			// 	checkout.style.border = "6px solid red";
			//     return false;
			//   }
			
			if (adults.value == 0) {
				alert(" Number of adults required");
				adults.style.border = "6px solid red";
				return false;
			}
			if (children.value == 0) {
				alert(" Number of children required");
				children.style.border = "6px solid red";
				return false;
			}

			//   if (.value == "") {
			//     alert(" must be filled out");
				
			// 	.style.border = "6px solid red";
			//     return false;
			//   }
			//   if (.value == "") {
			//     alert(" must be filled out");
				
			// 	.style.border = "6px solid red";
			//     return false;
			//   }
			else{
				
				alert("form submitted successfully!");
				return true;
			}



	}
	

function checkcar() {
		var destination = document.car.destination;
		var start  = document.car.start;
		var end = document.car.end;
		var adult = document.car.adult;
		var children = document.car.children;
		// var  = document.car.;
		// var  = document.car.;

	if (destination.value == 0) {
		alert("destination must be filled out");
		destination.style.border = "6px solid red";
		return false;
	}
	if (start.value == "") {
		alert("start - date must be filled out");
		start.style.border = "6px solid red";
		return false;
	}
	if (end.value == "") {
		alert("start -date must be filled out");
		end.style.border = "6px solid red";
		return false;
	}
	if (start.value == end.value ) {
		alert("Date cannot be same");
		start.style.border = "6px solid blue";
		end.style.border = "6px solid blue";
		return false;
	}
	//   if (checkin.value > checkout.value) {
	//     alert("Check -out must be filled out");
	// 	checkout.style.border = "6px solid red";
	//     return false;
	//   }
	
	if (adult.value == 0) {
		alert(" Number of adults required");
		adult.style.border = "6px solid red";
		return false;
	}
	if (children.value == 0) {
		alert(" Number of children required");
		children.style.border = "6px solid red";
		return false;
	}

	//   if (.value == "") {
	//     alert(" must be filled out");
		
	// 	.style.border = "6px solid red";
	//     return false;
	//   }
	//   if (.value == "") {
	//     alert(" must be filled out");
		
	// 	.style.border = "6px solid red";
	//     return false;
	//   }
	else{
		alert("form submitted successfully!");
		return true;
	}



}

function checkflight() {
		var flyto = document.flight.flyto;
		var flyfrom  = document.flight.flyfrom;
		var onboard = document.flight.onboard;
		var adult = document.flight.adult;
		var children = document.flight.children;

		if (flyto.value == 0) {
		alert("destination must be filled out");
		flyto.style.border = "6px solid red";
		return false;
	}
	if (flyfrom.value == 0) {
		alert("Source must be filled out");
		flyfrom.style.border = "6px solid red";
		return false;
	}
	if (flyto.value == flyfrom.value ) {
		alert("source and destination cannot be same");
		flyto.style.border = "6px solid blue";
		flyfrom.style.border = "6px solid blue";
		return false;
	}
	if (start.value == "") {
		alert("start - date must be filled out");
		start.style.border = "6px solid red";
		return false;
	}
	if (onboard.value == "") {
		alert("sDate of journey must be filled out");
		onboard.style.border = "6px solid red";
		return false;
	}
	else{
		alert("form submitted successfully!");
		return true;
	}



}

function checktrain() {
		var flyto = document.flight.flyto;
		var flyfrom  = document.flight.flyfrom;
		var onboard = document.flight.onboard;
		var adult = document.flight.adult;
		var children = document.flight.children;

		if (flyto.value == 0) {
		alert("destination must be filled out");
		flyto.style.border = "6px solid red";
		return false;
	}
	if (flyfrom.value == 0) {
		alert("Source must be filled out");
		flyfrom.style.border = "6px solid red";
		return false;
	}
	if (flyto.value == flyfrom.value ) {
		alert("source and destination cannot be same");
		flyto.style.border = "6px solid blue";
		flyfrom.style.border = "6px solid blue";
		return false;
	}
	if (start.value == "") {
		alert("start - date must be filled out");
		start.style.border = "6px solid red";
		return false;
	}
	if (onboard.value == "") {
		alert("sDate of journey must be filled out");
		onboard.style.border = "6px solid red";
		return false;
	}
	else{
		alert("form submitted successfully!");
		return true;
	}



}

</script>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">Travelville</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="about.php">about us</a></li>
								<li class="main_nav_item"><a href="tour.php">offers</a></li>
								<li class="main_nav_item"><a href="blog.php">news</a></li>
								<li class="main_nav_item"><a href="#contact">contact</a></li>
							</ul>
						</div>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">
			
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/hero.png)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Book </h1>
							<h1>Now !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/bg_2.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/bg_1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">Bus</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">Trains</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form name="hotel" action="hotel.php" id="search_form_1" method="POST" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Destination</div>
								<select type="text" class="destination search_input" name="destination">
									<option value="0">select destination</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
									</select>
								</select>
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="DATE" name="checkin"class="check_in search_input" placeholder="CHECK-IN">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="DATE" name="checkout" class="check_out search_input" placeholder="CHECK-OUT">
							</div>
							<div class="search_item">
								<div>Adult</div>
								<select name="adults" id="adults_1" name="adult" class="dropdown_item_select search_input">
									<option value="0">Select</option>
									<option value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_1" name="children" class="dropdown_item_select search_input">
									<option value="0">Select</option>
									<option value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
								</select>
							</div>
							<button class="button search_button" onclick="return check()">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form name="car" action="busticket.php" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>State</div>
								<select type="text" class="destination search_input" name="destination">
									<option value="0">select destination</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
									</select>
								</select>
							</div>
							<div class="search_item">
								<div>Start Date</div>
								<input type="date" name="start" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>End date</div>
								<input type="date"  name="end"  class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>Adult</div>
								<select name="adult" id="adults_1" name="adult" class="dropdown_item_select search_input">
									<option value="0">Select</option>
									<option value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_1" name="children" class="dropdown_item_select search_input">
									<option value="0">Select</option>
									<option value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
								</select>
							</div>
							<button class="button search_button" onclick="return checkcar()" >search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form name="flight" action="airticket.php" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Flying From</div>
								<select type="text" class="destination search_input" name="flyfrom">
									<option value="0">select destination</option>
									<option value="Chhatrapati Shivaji International Airport – BOM">Chhatrapati Shivaji International Airport – BOM</option>
									<option value="Kempegowda International Airport – BLR">Kempegowda International Airport – BLR</option>
									<option value="Chennai International Airport – MAA">Chennai International Airport – MAA</option>
									<option value="Netaji Subhas Chandra Bose International Airport – CCU">Netaji Subhas Chandra Bose International Airport – CCU</option>
									<option value="Chaudhary Charan Singh International Airport – LKO">Chaudhary Charan Singh International Airport – LKO</option>
									<option value="Sri Guru Ram Dass Jee International Airport – ATQ">Sri Guru Ram Dass Jee International Airport – ATQ</option>
									<option value="Visakhapatnam International Airport – VTZ">Visakhapatnam International Airport – VTZ</option>
									<option value="Kannur International Airport – CNN">Kannur International Airport – CNN</option>
									<option value="Surat International Airport – STV">Surat International Airport – STV</option>
									<option value="Devi Ahilya Bai Holkar Airport – IDR">Devi Ahilya Bai Holkar Airport – IDR</option>
									<option value="Cochin International Airport – COK 	Kochi, Kerala">Cochin International Airport – COK 	Kochi, Kerala</option>
									<option value="Sardar Vallabhbhai Patel International Airport – AMD">Sardar Vallabhbhai Patel International Airport – AMD</option>
									<option value="Indira Gandhi International Airport – DEL">Indira Gandhi International Airport – DEL</option>
									<option value="Dabolim Airport – GOI">Dabolim Airport – GOI</option>
									<option value="Pune Airport – PNQ">Pune Airport – PNQ</option>
									<option value="Thiruvananthapuram International Airport – TRV">Thiruvananthapuram International Airport – TRV</option>
									<option value="Coimbatore International Airport – CJB">Coimbatore International Airport – CJB</option>
									<option value="Calicut International Airport – CCJ">Calicut International Airport – CCJ</option>
									<option value="Biju Patnaik International Airport – BBI">Biju Patnaik International Airport – BBI</option>
									<option value="Lokpriya Gopinath Bordoloi International Airport – GAU">Lokpriya Gopinath Bordoloi International Airport – GAU</option>
									<option value="Lal Bahadur Shastri International Airport – VNS">Lal Bahadur Shastri International Airport – VNS</option>
									<option value="Rajiv Gandhi International Airport- HYD">Rajiv Gandhi International Airport- HYD</option>
									<option value="Tiruchirappalli International Airport – TRZ">Tiruchirappalli International Airport – TRZ</option>
									<option value="Chandigarh International Airport – IXC">Chandigarh International Airport – IXC</option>
									<option value="Mangalore International Airport – IXE">Mangalore International Airport – IXE</option>
									<option value="Jay Prakash Narayan International Airport – PAT">Jay Prakash Narayan International Airport – PAT</option>
									<option value="Bagdogra International Airport – IXB">Bagdogra International Airport – IXB</option>
									<option value="Madurai Airport – IXM">Madurai Airport – IXM</option>
									<option value="Jaipur International Airport – JAI">Jaipur International Airport – JAI</option>
									<option value="Imphal International Airport – IMF">Imphal International Airport – IMF</option>
									<option value="Sheikhul Aalam International Airport – SXR">Sheikhul Aalam International Airport – SXR</option>
									<option value="Dr. Babasaheb Ambedkar International Airport – NAG">Dr. Babasaheb Ambedkar International Airport – NAG</option>
									<option value="Gaya Airport	Bihar	GAY	">Gaya Airport	Bihar	GAY	</option>
									<option value="Pasighat Airport	Arunachal Pradesh	IXT	">Pasighat Airport	Arunachal Pradesh	IXT	</option>
									<option value="Tirupati Airport TIR">Tirupati Airport TIR</option>
									<option value="Rajahmundry Airport RJA	">Rajahmundry Airport RJA	</option>
									<option value="Vijayawada Airport VGA">Vijayawada Airport VGA</option>
									<option value="Kadapa Airport	Andhra Pradesh	CDP">Kadapa Airport	Andhra Pradesh	CDP</option>
									<option value="Cooch Behar Airport	COH">Cooch Behar Airport COH</option>
									
								</select>
							</div>
							<div class="search_item">
								<div>Flying to</div>
								<select type="text" class="destination search_input" name="flyto">
									<option value="0">select destination</option>
									<option value="Chhatrapati Shivaji International Airport – BOM">Chhatrapati Shivaji International Airport – BOM</option>
									<option value="Kempegowda International Airport – BLR">Kempegowda International Airport – BLR</option>
									<option value="Chennai International Airport – MAA">Chennai International Airport – MAA</option>
									<option value="Netaji Subhas Chandra Bose International Airport – CCU">Netaji Subhas Chandra Bose International Airport – CCU</option>
									<option value="Chaudhary Charan Singh International Airport – LKO">Chaudhary Charan Singh International Airport – LKO</option>
									<option value="Sri Guru Ram Dass Jee International Airport – ATQ">Sri Guru Ram Dass Jee International Airport – ATQ</option>
									<option value="Visakhapatnam International Airport – VTZ">Visakhapatnam International Airport – VTZ</option>
									<option value="Kannur International Airport – CNN">Kannur International Airport – CNN</option>
									<option value="Surat International Airport – STV">Surat International Airport – STV</option>
									<option value="Devi Ahilya Bai Holkar Airport – IDR">Devi Ahilya Bai Holkar Airport – IDR</option>
									<option value="Cochin International Airport – COK 	Kochi, Kerala">Cochin International Airport – COK 	Kochi, Kerala</option>
									<option value="Sardar Vallabhbhai Patel International Airport – AMD">Sardar Vallabhbhai Patel International Airport – AMD</option>
									<option value="Indira Gandhi International Airport – DEL">Indira Gandhi International Airport – DEL</option>
									<option value="Dabolim Airport – GOI">Dabolim Airport – GOI</option>
									<option value="Pune Airport – PNQ">Pune Airport – PNQ</option>
									<option value="Thiruvananthapuram International Airport – TRV">Thiruvananthapuram International Airport – TRV</option>
									<option value="Coimbatore International Airport – CJB">Coimbatore International Airport – CJB</option>
									<option value="Calicut International Airport – CCJ">Calicut International Airport – CCJ</option>
									<option value="Biju Patnaik International Airport – BBI">Biju Patnaik International Airport – BBI</option>
									<option value="Lokpriya Gopinath Bordoloi International Airport – GAU">Lokpriya Gopinath Bordoloi International Airport – GAU</option>
									<option value="Lal Bahadur Shastri International Airport – VNS">Lal Bahadur Shastri International Airport – VNS</option>
									<option value="Rajiv Gandhi International Airport- HYD">Rajiv Gandhi International Airport- HYD</option>
									<option value="Tiruchirappalli International Airport – TRZ">Tiruchirappalli International Airport – TRZ</option>
									<option value="Chandigarh International Airport – IXC">Chandigarh International Airport – IXC</option>
									<option value="Mangalore International Airport – IXE">Mangalore International Airport – IXE</option>
									<option value="Jay Prakash Narayan International Airport – PAT">Jay Prakash Narayan International Airport – PAT</option>
									<option value="Bagdogra International Airport – IXB">Bagdogra International Airport – IXB</option>
									<option value="Madurai Airport – IXM">Madurai Airport – IXM</option>
									<option value="Jaipur International Airport – JAI">Jaipur International Airport – JAI</option>
									<option value="Imphal International Airport – IMF">Imphal International Airport – IMF</option>
									<option value="Sheikhul Aalam International Airport – SXR">Sheikhul Aalam International Airport – SXR</option>
									<option value="Dr. Babasaheb Ambedkar International Airport – NAG">Dr. Babasaheb Ambedkar International Airport – NAG</option>
									<option value="Gaya Airport	Bihar	GAY	">Gaya Airport	Bihar	GAY	</option>
									<option value="Pasighat Airport	Arunachal Pradesh	IXT	">Pasighat Airport	Arunachal Pradesh	IXT	</option>
									<option value="Tirupati Airport TIR">Tirupati Airport TIR</option>
									<option value="Rajahmundry Airport RJA	">Rajahmundry Airport RJA	</option>
									<option value="Vijayawada Airport VGA">Vijayawada Airport VGA</option>
									<option value="Kadapa Airport	Andhra Pradesh	CDP">Kadapa Airport	Andhra Pradesh	CDP</option>
									<option value="Cooch Behar Airport	COH">Cooch Behar Airport COH</option>
									
								</select>
							</div>
							<div class="search_item">
								<div>Onboard date</div>
								<input type="date" name="onboard" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>

							<div class="search_item">
								<div>adults</div>
								<select name="adult" id="adults_3" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_3" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button" onclick="return checkflight()" >search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Source</div>
								<select type="text" class="destination search_input" name="trainfrom">
									<option value="AGRA CANTT	AGC">AGRA CANTT	AGC</option>
									<option value="AHMEDABAD JN	ADI">AHMEDABAD JN	ADI</option>
									<option value="ALLAHABAD CITY	ALY">ALLAHABAD CITY	ALY</option>
									<option value="ALLAHABAD JN	ALD">ALLAHABAD JN	ALD</option>
									<option value="ALUVA	AWY">ALUVA	AWY</option>
									<option value="AMBALA CANT JN	UMB">AMBALA CANT JN	UMB</option>
									<option value="AMRITSAR JN	ASR">AMRITSAR JN	ASR</option>
									<option value="ASANSOL JN	ASN">ASANSOL JN	ASN</option>
									<option value="BANGALORE EAST	BNCE">BANGALORE EAST	BNCE</option>
									<option value="BARABANKI JN	BBK">BARABANKI JN	BBK</option>
									<option value="BARDDHAMAN JN	BWN">BARDDHAMAN JN	BWN</option>
									<option value="BAREILLY	BE">BAREILLY	BE</option>
									<option value="BEAS	BEAS">BEAS	BEAS</option>
									<option value="BHATAPARA	BYT">BHATAPARA	BYT</option>
									<option value="BHOPAL JN	BPL">BHOPAL JN	BPL</option>
									<option value="BHUBANESWAR	BBS">BHUBANESWAR	BBS</option>
									<option value="BHUSAVAL JN	BSL">BHUSAVAL JN	BSL</option>
									<option value="BILASPUR JN	BSP">BILASPUR JN	BSP</option>
									<option value="BINA JN	BINA">BINA JN	BINA</option>
									<option value="CHENNAI CENTRAL	MAS">CHENNAI CENTRAL	MAS</option>
									<option value="DADAR	DR">DADAR	DR</option>
									<option value="DAUND JN	DD">DAUND JN	DD</option>
									<option value="DELHI	DLI">DELHI	DLI</option>
									<option value="DURG	DURG">DURG	DURG</option>
									<option value="DURGAPUR	DGR">DURGAPUR	DGR</option>
									<option value="ERNAKULAM JN	ERS">ERNAKULAM JN	ERS</option>
									<option value="ERODE JN	ED">ERODE JN	ED</option>
									<option value="FARIDABAD	FDB">FARIDABAD	FDB</option>
									<option value="GHAZIABAD	GZB">GHAZIABAD	GZB</option>
									<option value="GORAKHPUR JN	GKP">GORAKHPUR JN	GKP</option>
									<option value="GUDUR JN	GDR">GUDUR JN	GDR</option>
									<option value="GWALIOR	GWL">GWALIOR	GWL</option>
									<option value="H NIZAMUDDIN	NZM">H NIZAMUDDIN	NZM</option>
									<option value="HOWRAH JN	HWH">HOWRAH JN	HWH</option>
									<option value="IGATPURI	IGP">IGATPURI	IGP</option>
									<option value="ITARSI JN	ET">ITARSI JN	ET</option>
									<option value="JABALPUR	JBP">JABALPUR	JBP</option>
									<option value="JAIPUR	JP">JAIPUR	JP</option>
									<option value="JALANDHAR CANT	JRC">JALANDHAR CANT	JRC</option>
									<option value="JALANDHAR CITY	JUC">JALANDHAR CITY	JUC</option>
									<option value="JALGAON JN	JL">JALGAON JN	JL</option>
									<option value="JHANSI JN	JHS">JHANSI JN	JHS</option>
									<option value="KACHEGUDA	KCG">KACHEGUDA	KCG</option>
									<option value="KALYAN JN	KYN">KALYAN JN	KYN</option>
									<option value="KANPUR CENTRAL	CNB">KANPUR CENTRAL	CNB</option>
									<option value="KATNI	KTE">KATNI	KTE</option>
									<option value="KHARAGPUR JN	KGP">KHARAGPUR JN	KGP</option>
									<option value="KHURDA ROAD JN	KUR">KHURDA ROAD JN	KUR</option>
									<option value="KIUL JN	KIUL">KIUL JN	KIUL</option>
									<option value="KOTA JN	KOTA">KOTA JN	KOTA</option>
									<option value="LUCKNOW CITY	LC">LUCKNOW CITY	LC</option>
									<option value="LUCKNOW NR	LKO">LUCKNOW NR	LKO</option>
									<option value="LUDHIANA JN	LDH">LUDHIANA JN	LDH</option>
									<option value="MANMAD JN	MMR">MANMAD JN	MMR</option>
									<option value="MATHURA JN	MTJ">MATHURA JN	MTJ</option>
									<option value="MOKAMEH JN	MKA">MOKAMEH JN	MKA</option>
									<option value="MORADABAD	MB">MORADABAD	MB</option>
									<option value="MUGHAL SARAI JN	MGS">MUGHAL SARAI JN	MGS</option>
									<option value="N GHAZIABAD	GZN">N GHAZIABAD	GZN</option>
									<option value="NADIAD JN	ND">NADIAD JN	ND</option>
									<option value="NAGPUR	NGP">NAGPUR	NGP</option>
									<option value="NASIK ROAD	NK">NASIK ROAD	NK</option>
									<option value="NELLORE	NLR">NELLORE	NLR</option>
									<option value="NEW DELHI	NDLS">NEW DELHI	NDLS</option>
									<option value="ONGOLE	OGL">ONGOLE	OGL</option>
									<option value="PATNA JN	PNBE">PATNA JN	PNBE</option>
									<option value="PHAGWARA JN	PGW">PHAGWARA JN	PGW</option>
									<option value="PHILLAUR JN	PHR">PHILLAUR JN	PHR</option>
									<option value="PUNE JN	PUNE">PUNE JN	PUNE</option>
									<option value="RAIPUR JN	R">RAIPUR JN	R</option>
									<option value="RAJAHMUNDRY	RJY">RAJAHMUNDRY	RJY</option>
									<option value="RENIGUNTA JN	RU">RENIGUNTA JN	RU</option>
									<option value="ROORKEE	RK">ROORKEE	RK</option>
									<option value="SALEM JN	SA">SALEM JN	SA</option>
									<option value="SALEM TOWN	SXT">SALEM TOWN	SXT</option>
									<option value="SAWAI MADHOPUR	SWM">SAWAI MADHOPUR	SWM</option>
									<option value="SHAHJEHANPUR	SPN">SHAHJEHANPUR	SPN</option>
									<option value="SURAT	ST">SURAT	ST</option>
									<option value="TATANAGAR JN	TATA">TATANAGAR JN	TATA</option>
									<option value="THANE	TNA">THANE	TNA</option>
									<option value="THRISUR	TCR">THRISUR	TCR</option>
									<option value="TIRUPATI	TPTY">TIRUPATI	TPTY</option>
									<option value="TUNDLA JN	TDL">TUNDLA JN	TDL</option>
									<option value="VADODARA JN	BRC">VADODARA JN	BRC</option>
									<option value="VALSAD	BL">VALSAD	BL</option>
									<option value="VARANASI JN	BSB">VARANASI JN	BSB</option>
									<option value="VIDISHA	BHS">VIDISHA	BHS</option>
									<option value="VIJAYAWADA JN	BZA">VIJAYAWADA JN	BZA</option>
									<option value="VISAKHAPATNAM	VSKP">VISAKHAPATNAM	VSKP</option>
									<option value="VIZIANAGRAM JN	VZM">VIZIANAGRAM JN	VZM</option>
								</select>
							</div>
							<div class="search_item">
								<div>Destination</div>
								<select type="text" class="destination search_input" name="trainto">
									<option value="AGRA CANTT	AGC">AGRA CANTT	AGC</option>
									<option value="AHMEDABAD JN	ADI">AHMEDABAD JN	ADI</option>
									<option value="ALLAHABAD CITY	ALY">ALLAHABAD CITY	ALY</option>
									<option value="ALLAHABAD JN	ALD">ALLAHABAD JN	ALD</option>
									<option value="ALUVA	AWY">ALUVA	AWY</option>
									<option value="AMBALA CANT JN	UMB">AMBALA CANT JN	UMB</option>
									<option value="AMRITSAR JN	ASR">AMRITSAR JN	ASR</option>
									<option value="ASANSOL JN	ASN">ASANSOL JN	ASN</option>
									<option value="BANGALORE EAST	BNCE">BANGALORE EAST	BNCE</option>
									<option value="BARABANKI JN	BBK">BARABANKI JN	BBK</option>
									<option value="BARDDHAMAN JN	BWN">BARDDHAMAN JN	BWN</option>
									<option value="BAREILLY	BE">BAREILLY	BE</option>
									<option value="BEAS	BEAS">BEAS	BEAS</option>
									<option value="BHATAPARA	BYT">BHATAPARA	BYT</option>
									<option value="BHOPAL JN	BPL">BHOPAL JN	BPL</option>
									<option value="BHUBANESWAR	BBS">BHUBANESWAR	BBS</option>
									<option value="BHUSAVAL JN	BSL">BHUSAVAL JN	BSL</option>
									<option value="BILASPUR JN	BSP">BILASPUR JN	BSP</option>
									<option value="BINA JN	BINA">BINA JN	BINA</option>
									<option value="CHENNAI CENTRAL	MAS">CHENNAI CENTRAL	MAS</option>
									<option value="DADAR	DR">DADAR	DR</option>
									<option value="DAUND JN	DD">DAUND JN	DD</option>
									<option value="DELHI	DLI">DELHI	DLI</option>
									<option value="DURG	DURG">DURG	DURG</option>
									<option value="DURGAPUR	DGR">DURGAPUR	DGR</option>
									<option value="ERNAKULAM JN	ERS">ERNAKULAM JN	ERS</option>
									<option value="ERODE JN	ED">ERODE JN	ED</option>
									<option value="FARIDABAD	FDB">FARIDABAD	FDB</option>
									<option value="GHAZIABAD	GZB">GHAZIABAD	GZB</option>
									<option value="GORAKHPUR JN	GKP">GORAKHPUR JN	GKP</option>
									<option value="GUDUR JN	GDR">GUDUR JN	GDR</option>
									<option value="GWALIOR	GWL">GWALIOR	GWL</option>
									<option value="H NIZAMUDDIN	NZM">H NIZAMUDDIN	NZM</option>
									<option value="HOWRAH JN	HWH">HOWRAH JN	HWH</option>
									<option value="IGATPURI	IGP">IGATPURI	IGP</option>
									<option value="ITARSI JN	ET">ITARSI JN	ET</option>
									<option value="JABALPUR	JBP">JABALPUR	JBP</option>
									<option value="JAIPUR	JP">JAIPUR	JP</option>
									<option value="JALANDHAR CANT	JRC">JALANDHAR CANT	JRC</option>
									<option value="JALANDHAR CITY	JUC">JALANDHAR CITY	JUC</option>
									<option value="JALGAON JN	JL">JALGAON JN	JL</option>
									<option value="JHANSI JN	JHS">JHANSI JN	JHS</option>
									<option value="KACHEGUDA	KCG">KACHEGUDA	KCG</option>
									<option value="KALYAN JN	KYN">KALYAN JN	KYN</option>
									<option value="KANPUR CENTRAL	CNB">KANPUR CENTRAL	CNB</option>
									<option value="KATNI	KTE">KATNI	KTE</option>
									<option value="KHARAGPUR JN	KGP">KHARAGPUR JN	KGP</option>
									<option value="KHURDA ROAD JN	KUR">KHURDA ROAD JN	KUR</option>
									<option value="KIUL JN	KIUL">KIUL JN	KIUL</option>
									<option value="KOTA JN	KOTA">KOTA JN	KOTA</option>
									<option value="LUCKNOW CITY	LC">LUCKNOW CITY	LC</option>
									<option value="LUCKNOW NR	LKO">LUCKNOW NR	LKO</option>
									<option value="LUDHIANA JN	LDH">LUDHIANA JN	LDH</option>
									<option value="MANMAD JN	MMR">MANMAD JN	MMR</option>
									<option value="MATHURA JN	MTJ">MATHURA JN	MTJ</option>
									<option value="MOKAMEH JN	MKA">MOKAMEH JN	MKA</option>
									<option value="MORADABAD	MB">MORADABAD	MB</option>
									<option value="MUGHAL SARAI JN	MGS">MUGHAL SARAI JN	MGS</option>
									<option value="N GHAZIABAD	GZN">N GHAZIABAD	GZN</option>
									<option value="NADIAD JN	ND">NADIAD JN	ND</option>
									<option value="NAGPUR	NGP">NAGPUR	NGP</option>
									<option value="NASIK ROAD	NK">NASIK ROAD	NK</option>
									<option value="NELLORE	NLR">NELLORE	NLR</option>
									<option value="NEW DELHI	NDLS">NEW DELHI	NDLS</option>
									<option value="ONGOLE	OGL">ONGOLE	OGL</option>
									<option value="PATNA JN	PNBE">PATNA JN	PNBE</option>
									<option value="PHAGWARA JN	PGW">PHAGWARA JN	PGW</option>
									<option value="PHILLAUR JN	PHR">PHILLAUR JN	PHR</option>
									<option value="PUNE JN	PUNE">PUNE JN	PUNE</option>
									<option value="RAIPUR JN	R">RAIPUR JN	R</option>
									<option value="RAJAHMUNDRY	RJY">RAJAHMUNDRY	RJY</option>
									<option value="RENIGUNTA JN	RU">RENIGUNTA JN	RU</option>
									<option value="ROORKEE	RK">ROORKEE	RK</option>
									<option value="SALEM JN	SA">SALEM JN	SA</option>
									<option value="SALEM TOWN	SXT">SALEM TOWN	SXT</option>
									<option value="SAWAI MADHOPUR	SWM">SAWAI MADHOPUR	SWM</option>
									<option value="SHAHJEHANPUR	SPN">SHAHJEHANPUR	SPN</option>
									<option value="SURAT	ST">SURAT	ST</option>
									<option value="TATANAGAR JN	TATA">TATANAGAR JN	TATA</option>
									<option value="THANE	TNA">THANE	TNA</option>
									<option value="THRISUR	TCR">THRISUR	TCR</option>
									<option value="TIRUPATI	TPTY">TIRUPATI	TPTY</option>
									<option value="TUNDLA JN	TDL">TUNDLA JN	TDL</option>
									<option value="VADODARA JN	BRC">VADODARA JN	BRC</option>
									<option value="VALSAD	BL">VALSAD	BL</option>
									<option value="VARANASI JN	BSB">VARANASI JN	BSB</option>
									<option value="VIDISHA	BHS">VIDISHA	BHS</option>
									<option value="VIJAYAWADA JN	BZA">VIJAYAWADA JN	BZA</option>
									<option value="VISAKHAPATNAM	VSKP">VISAKHAPATNAM	VSKP</option>
									<option value="VIZIANAGRAM JN	VZM">VIZIANAGRAM JN	VZM</option>
								</select>
							</div>
							<div class="search_item">
								<div>Date of travelling</div>
								<input type="date" name="traveldate" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>

							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button" onclick="return checktrain()" >search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_5" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_5" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_6" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_6" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">We have the best tours</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Beautiful places depicting various cultures and ethics of India. World class monuments along with heritage site depicting ancient history, a symbol of pride.</p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-sm-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_background" style="background-image:url(images/goldentemple.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">Book now<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Punjab</h1>
								<div class="intro_price">From $450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-sm-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@hellolightbulb -->
						<div class="intro_item_background" style="background-image:url(images/lotustemple.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">Book now<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Delhi</h1>
								<div class="intro_price">From $850</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-sm-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@willianjusten -->
						<div class="intro_item_background" style="background-image:url(images/tajmahal.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">Book now<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Agra</h1>
								<div class="intro_price">From $750</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	
	<div class="cta">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->

					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="grid">
									<div>
										<img src="images/hawamahal.jpg" alt="Hawa-Mahal">
									</div>
									<div>
										<div class="cta_title">Rajasthan Gold package</div>
											<div class="rating_r rating_r_4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="cta_text">Rajasthan a place of tombs and forts is always a place to go for as a tourist in a premium packages. Lot of ancient history of our country starting from many great kings have built their forts over here.</p>
											<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
									</div>
								</div>
								
							</div>
							<div class="owl-item cta_item text-center">
								<div class="grid">
									<div>
										<img src="images/goldentemple.jpg" alt="Hawa-Mahal">
									</div>
									<div>
										<div class="cta_title">Punjab Premium Tour</div>
											<div class="rating_r rating_r_4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="cta_text">Punjab - land of 5 river is really famous for it's culture , heritage, food and residents of the state. Not only this but many tourist attractions like Golden Temple and Jalianwala bagh are some of the famous tourist spots.</p>
											<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
									</div>
								</div>
								
							</div>
							<div class="owl-item cta_item text-center">
								<div class="grid">
									<div>
										<img src="images/lotustemple.jpg" alt="lotus -temple">
									</div>
									<div>
										<div class="cta_title"></div>
											<div class="rating_r rating_r_4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="cta_text">Delhi the capital of India has many sites reflecting and depicting ancient India's history, art as well as architecture. Family tour to Delhi for a week is one of the best vacations to have.</p>
											<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
									</div>
								</div>
								
							</div>
							<div class="owl-item cta_item text-center">
								<div class="grid">
									<div>
										<img src="images/tajmahal.jpg" alt="taj-mahal">
									</div>
									<div>
										<div class="cta_title"></div>
											<div class="rating_r rating_r_4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="cta_text">Agra also called the city of tombs is one of the ancient cities beautifully sculptured from the time of mughals dated back in the 18th century. It's world class architecture along with its royal style dome shaped monuments marks it a place for tourists all over the globe. The various sites to visit in agra are Taj Mahal, Agra Fort, Fatehpur Sikri, Itmad-ud-Daulah's Tomb, Akbar's Tomb ,Moti Masjid, Sikandra Fort, Mehtab Bagh, Taj Nature Walk and Jama Masjid.</p>
											<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
									</div>
								</div>
								
							</div>
							



							
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>
	<section class="about section mt-5" id="pl">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center heading-section mb-5">
            <h2 class="text-black mb-2">Welcome to Travel2India</h2>
            <p>We welcome you to our Travel & Tourism Website. We provide all-in-one effort for our customers by providing
              cultural, Natural and Historical Tourism to our customers.</p>
          </div>
        </div>
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                <a href="#" class="effect">
                  <img src="images/culture.jpg" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                <h2 class="text-black">Culture</h2>
                <p class="mb-4">
                  The Indian culture varies like its vast geography.People speak in different languages, dress differently,
                   follow different religions, eat different food but are of the same temperament.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6">
                <a href="#" class="effect">
                  <img src="images/hero.png" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 ml-auto align-self-center order-lg-1" id="">
                <h2 class="text-black">History</h2>
                <p class="mb-4">
                  India is rich in culture,traditions,heritage buildings, temples, forts and palaces. 
        Famous Indian Monuments includes Old Churches of Goa ,The Taj Mahal, Qutab Minar of Delhi, Charminar, 
        Red fort and Jantar mantar, these are also few most visited Heritage Sites in India.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                <a href="#" class="effect">
                  <img src="images/nature.jpg" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                <h2 class="text-black">Nature</h2>
                <p class="mb-4">
                  Nature in India holds a special place in the hearts of its
                   people as a revered symbol of spirituality, culture and life.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
      </div>
    </section>
    <!--End of Welcome/About Section-->
    <!--Popular Places-->
    <section id="places">
      <div class="popular section-bg img-effect mt-5">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="section-title text-center">
                <h1 class="text-white">Popular Places</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--------->
      <div class="all-image">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-md-5">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/gatewayofindia.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Gate Way of India, Mumbai</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-7 col-md-7">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/redfort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Red Fort, Delhi</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/amerfort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Amer Fort, Rajasthan</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/charminar.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Charminar, Hyderabad</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-12 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/agrafort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Agra Fort, Uttar Pradesh</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
          </div>
        </div>
      </div>
    </section>
    <!--End of Popular Places-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--Services Section-->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="section-title">
              <h2>Services We Provide</h2>
              <p>
                We provide a varity of services to our customers that includes Good
                 Food from top restaurants, Beach Resort in Goa, Mountain Climbing
                 in hilly states like Himanchal, Uttarakhand and others and lastly, 
                 Hot Air Balloon to enjoy the most in some of the best region of the country. 
              </p>
            </div>
          </div>
          <!-------->
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-circle purple">
                  <div class="icon">
                    <i class="fas fa-drumstick-bite"></i>
                  </div>
                  <h4 class="text-white">Good Food</h4>
                  <p>Best food from top restaurents in the country</p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-circle pink">
                  <div class="icon">
                    <i class="fas fa-umbrella-beach"></i>
                  </div>
                  <h4 class="text-white">Beach Resort</h4>
                  <p>Top Beach Resorts in Goa with every type facilities</p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-circle yellow">
                  <div class="icon">
                    <i class="fas fa-hiking"></i>
                  </div>
                  <h4 class="text-white">Mountain-Climbing</h4>
                  <p>Mountain Climbing in the hilly states of India like Himanchal Pradesh,
                    Uttarakhand, and many more
                  </p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-circle blue">
                  <div class="icon">
                    <i class="fas fa-mountain"></i>
                  </div>
                  <h4 class="text-white">Hot Air Balloon</h4>
                  <p>Hot Air Balloon at the best view in the country with guidance
                    of best experts
                  </p>
                </div>
              </div>
              <!------->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End of Services Section-->
    <!--Package Section-->
    <section class="package section-padding mt-3" id="blog">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5">
            <div class="section-title text-center">
              <h2 class="py-3">Packages We Offer</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <div class="package-1">
              <img src="images/tp1.jpg" alt="" class="img-fluid">
              <div class="package-text">
                <p>
                  KASHMIR TOUR PACKAGE, 
                  Visit virgin beauty of kashmir.
                  Day excursion to URI, Dodpathri, Yusmarg, Daksum and Lolab.</p>
                <a href="#" class="btn-package p-2">View Details</a>
              </div>
            </div>
          </div>
          <!----->
          <div class="col-md-6 col-xl-6">
            <div class="package-1">
              <img src="images/tp2.jpg" alt="" class="img-fluid">
              <div class="package-text">
                <p>KERALA TOUR PACKAGE, Kickstart your Kerala trip package with a Kochi sightseeing journey.
                  Next, head over to Munnar and visit the local tea and spice plantations.</p>
                <a href="#" class="btn-package p-2">View Details</a>
              </div>
            </div>
          </div>
          <!----->
        </div>
      </div>
    </section>
    <!--End of Package Section-->
    <!--Historical Places Section-->
    <section class="mt-2">
      <div class="historical-places" id="history">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-title text-center mb-70">
                <h3 class="text-uppercase text-center">Historical Places</h3>
                <p class="text-center">India is rich in culture,traditions,heritage buildings, temples, forts and palaces. 
                  Famous Indian Monuments includes Old Churches of Goa ,The Taj Mahal, Qutab Minar of Delhi, Charminar, 
                  Red fort and Jantar mantar, these are also few most visited Heritage Sites in India.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/tajmahal.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Taj Mahal</h3>
                  </a>
                  <p>Agra, Uttar Pradesh</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/goldentemple.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Golden Temple</h3>
                  </a>
                  <p>Amritsar, Punjab</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/indiagate.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>India Gate</h3>
                  </a>
                  <p>New Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/qutubminar.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Qutub Minar</h3>
                  </a>
                  <p>Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/hawamahal.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Hawa Mahal</h3>
                  </a>
                  <p>Jaipur, Rajasthan</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/lotustemple.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Lotus Temple</h3>
                  </a>
                  <p>Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="btn-hist text-center">
                <div><a href="#" class="btn btn-hist">More Places</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End of Historical Places Section-->

    <!------------>


	<div class="contact" id="contact">
        <center><h1>Contact-Us</h1></center>
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">get in touch</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->


	<!-- Copyright -->


</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
</body>
<script>
		var state_arr = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");
	var s_a = new Array();
	s_a[0]="";
	s_a[1]=" Alipur | Andaman Island | Anderson Island | Arainj-Laka-Punga | Austinabad | Bamboo Flat | Barren Island | Beadonabad | Betapur | Bindraban | Bonington | Brookesabad | Cadell Point | Calicut | Chetamale | Cinque Islands | Defence Island | Digilpur | Dolyganj | Flat Island | Geinyale | Great Coco Island | Haddo | Havelock Island | Henry Lawrence Island | Herbertabad | Hobdaypur | Ilichar | Ingoie | Inteview Island | Jangli Ghat | Jhon Lawrence Island | Karen | Kartara | KYD Islannd | Landfall Island | Little Andmand | Little Coco Island | Long Island | Maimyo | Malappuram | Manglutan | Manpur | Mitha Khari | Neill Island | Nicobar Island | North Brother Island | North Passage Island | North Sentinel Island | Nothen Reef Island | Outram Island | Pahlagaon | Palalankwe | Passage Island | Phaiapong | Phoenix Island | Port Blair | Preparis Island | Protheroepur | Rangachang | Rongat | Rutland Island | Sabari | Saddle Peak | Shadipur | Smith Island | Sound Island | South Sentinel Island | Spike Island | Tarmugli Island | Taylerabad | Titaije | Toibalawe | Tusonabad | West Island | Wimberleyganj | Yadita";
	s_a[2]=" Achampet | Adilabad | Adoni | Alampur | Allagadda | Alur | Amalapuram | Amangallu | Anakapalle | Anantapur | Andole | Araku | Armoor | Asifabad | Aswaraopet | Atmakur | B. Kothakota | Badvel | Banaganapalle | Bandar | Bangarupalem | Banswada | Bapatla | Bellampalli | Bhadrachalam | Bhainsa | Bheemunipatnam | Bhimadole | Bhimavaram | Bhongir | Bhooragamphad | Boath | Bobbili | Bodhan | Chandoor | Chavitidibbalu | Chejerla | Chepurupalli | Cherial | Chevella | Chinnor | Chintalapudi | Chintapalle | Chirala | Chittoor | Chodavaram | Cuddapah | Cumbum | Darsi | Devarakonda | Dharmavaram | Dichpalli | Divi | Donakonda | Dronachalam | East Godavari | Eluru | Eturnagaram | Gadwal | Gajapathinagaram | Gajwel | Garladinne | Giddalur | Godavari | Gooty | Gudivada | Gudur | Guntur | Hindupur | Hunsabad | Huzurabad | Huzurnagar | Hyderabad | Ibrahimpatnam | Jaggayyapet | Jagtial | Jammalamadugu | Jangaon | Jangareddygudem | Jannaram | Kadiri | Kaikaluru | Kakinada | Kalwakurthy | Kalyandurg | Kamalapuram | Kamareddy | Kambadur | Kanaganapalle | Kandukuru | Kanigiri | Karimnagar | Kavali | Khammam | Khanapur (AP) | Kodangal | Koduru | Koilkuntla | Kollapur | Kothagudem | Kovvur | Krishna | Krosuru | Kuppam | Kurnool | Lakkireddipalli | Madakasira | Madanapalli | Madhira | Madnur | Mahabubabad | Mahabubnagar | Mahadevapur | Makthal | Mancherial | Mandapeta | Mangalagiri | Manthani | Markapur | Marturu | Medachal | Medak | Medarmetla | Metpalli | Mriyalguda | Mulug | Mylavaram | Nagarkurnool | Nalgonda | Nallacheruvu | Nampalle | Nandigama | Nandikotkur | Nandyal | Narasampet | Narasaraopet | Narayanakhed | Narayanpet | Narsapur | Narsipatnam | Nazvidu | Nelloe | Nellore | Nidamanur | Nirmal | Nizamabad | Nuguru | Ongole | Outsarangapalle | Paderu | Pakala | Palakonda | Paland | Palmaneru | Pamuru | Pargi | Parkal | Parvathipuram | Pathapatnam | Pattikonda | Peapalle | Peddapalli | Peddapuram | Penukonda | Piduguralla | Piler | Pithapuram | Podili | Polavaram | Prakasam | Proddatur | Pulivendla | Punganur | Putturu | Rajahmundri | Rajampeta | Ramachandrapuram | Ramannapet | Rampachodavaram | Rangareddy | Rapur | Rayachoti | Rayadurg | Razole | Repalle | Saluru | Sangareddy | Sathupalli | Sattenapalle | Satyavedu | Shadnagar | Siddavattam | Siddipet | Sileru | Sircilla | Sirpur Kagaznagar | Sodam | Sompeta | Srikakulam | Srikalahasthi | Srisailam | Srungavarapukota | Sudhimalla | Sullarpet | Tadepalligudem | Tadipatri | Tanduru | Tanuku | Tekkali | Tenali | Thungaturthy | Tirivuru | Tirupathi | Tuni | Udaygiri | Ulvapadu | Uravakonda | Utnor | V.R. Puram | Vaimpalli | Vayalpad | Venkatgiri | Venkatgirikota | Vijayawada | Vikrabad | Vinjamuru | Vinukonda | Visakhapatnam | Vizayanagaram | Vizianagaram | Vuyyuru | Wanaparthy | Warangal | Wardhannapet | Yelamanchili | Yelavaram | Yeleswaram | Yellandu | Yellanuru | Yellareddy | Yerragondapalem | Zahirabad ";
	s_a[3]=" Along | Anini | Anjaw | Bameng | Basar | Changlang | Chowkhem | Daporizo | Dibang Valley | Dirang | Hayuliang | Huri | Itanagar | Jairampur | Kalaktung | Kameng | Khonsa | Kolaring | Kurung Kumey | Lohit | Lower Dibang Valley | Lower Subansiri | Mariyang | Mechuka | Miao | Nefra | Pakkekesang | Pangin | Papum Pare | Passighat | Roing | Sagalee | Seppa | Siang | Tali | Taliha | Tawang | Tezu | Tirap | Tuting | Upper Siang | Upper Subansiri | Yiang Kiag ";
	s_a[4]=" Abhayapuri | Baithalangshu | Barama | Barpeta Road | Bihupuria | Bijni | Bilasipara | Bokajan | Bokakhat | Boko | Bongaigaon | Cachar | Cachar Hills | Darrang | Dhakuakhana | Dhemaji | Dhubri | Dibrugarh | Digboi | Diphu | Goalpara | Gohpur | Golaghat | Guwahati | Hailakandi | Hajo | Halflong | Hojai | Howraghat | Jorhat | Kamrup | Karbi Anglong | Karimganj | Kokarajhar | Kokrajhar | Lakhimpur | Maibong | Majuli | Mangaldoi | Mariani | Marigaon | Moranhat | Morigaon | Nagaon | Nalbari | Rangapara | Sadiya | Sibsagar | Silchar | Sivasagar | Sonitpur | Tarabarihat | Tezpur | Tinsukia | Udalgiri | Udalguri | UdarbondhBarpeta";
	s_a[5]=" Adhaura | Amarpur | Araria | Areraj | Arrah | Arwal | Aurangabad | Bagaha | Banka | Banmankhi | Barachakia | Barauni | Barh | Barosi | Begusarai | Benipatti | Benipur | Bettiah | Bhabhua | Bhagalpur | Bhojpur | Bidupur | Biharsharif | Bikram | Bikramganj | Birpur | Buxar | Chakai | Champaran | Chapara | Dalsinghsarai | Danapur | Darbhanga | Daudnagar | Dhaka | Dhamdaha | Dumraon | Ekma | Forbesganj | Gaya | Gogri | Gopalganj | H.Kharagpur | Hajipur | Hathua | Hilsa | Imamganj | Jahanabad | Jainagar | Jamshedpur | Jamui | Jehanabad | Jhajha | Jhanjharpur | Kahalgaon | Kaimur (Bhabua) | Katihar | Katoria | Khagaria | Kishanganj | Korha | Lakhisarai | Madhepura | Madhubani | Maharajganj | Mahua | Mairwa | Mallehpur | Masrakh | Mohania | Monghyr | Motihari | Motipur | Munger | Muzaffarpur | Nabinagar | Nalanda | Narkatiaganj | Naugachia | Nawada | Pakribarwan | Pakridayal | Patna | Phulparas | Piro | Pupri | Purena | Purnia | Rafiganj | Rajauli | Ramnagar | Raniganj | Raxaul | Rohtas | Rosera | S.Bakhtiarpur | Saharsa | Samastipur | Saran | Sasaram | Seikhpura | Sheikhpura | Sheohar | Sherghati | Sidhawalia | Singhwara | Sitamarhi | Siwan | Sonepur | Supaul | Thakurganj | Triveniganj | Udakishanganj | Vaishali | Wazirganj";
	s_a[6]=" Chandigarh | Mani Marja";
	s_a[7]=" Ambikapur | Antagarh | Arang | Bacheli | Bagbahera | Bagicha | Baikunthpur | Balod | Balodabazar | Balrampur | Barpalli | Basana | Bastanar | Bastar | Bderajpur | Bemetara | Berla | Bhairongarh | Bhanupratappur | Bharathpur | Bhatapara | Bhilai | Bhilaigarh | Bhopalpatnam | Bijapur | Bilaspur | Bodla | Bokaband | Chandipara | Chhinagarh | Chhuriakala | Chingmut | Chuikhadan | Dabhara | Dallirajhara | Dantewada | Deobhog | Dhamda | Dhamtari | Dharamjaigarh | Dongargarh | Durg | Durgakondal | Fingeshwar | Gariaband | Garpa | Gharghoda | Gogunda | Ilamidi | Jagdalpur | Janjgir | Janjgir-Champa | Jarwa | Jashpur | Jashpurnagar | Kabirdham-Kawardha | Kanker | Kasdol | Kathdol | Kathghora | Kawardha | Keskal | Khairgarh | Kondagaon | Konta | Korba | Korea | Kota | Koyelibeda | Kuakunda | Kunkuri | Kurud | Lohadigundah | Lormi | Luckwada | Mahasamund | Makodi | Manendragarh | Manpur | Marwahi | Mohla | Mungeli | Nagri | Narainpur | Narayanpur | Neora | Netanar | Odgi | Padamkot | Pakhanjur | Pali | Pandaria | Pandishankar | Parasgaon | Pasan | Patan | Pathalgaon | Pendra | Pratappur | Premnagar | Raigarh | Raipur | Rajnandgaon | Rajpur | Ramchandrapur | Saraipali | Saranggarh | Sarona | Semaria | Shakti | Sitapur | Sukma | Surajpur | Surguja | Tapkara | Toynar | Udaipur | Uproda | Wadrainagar";
	s_a[8]=" Amal | Amli | Bedpa | Chikhli | Dadra & Nagar Haveli | Dahikhed | Dolara | Galonda | Kanadi | Karchond | Khadoli | Kharadpada | Kherabari | Kherdi | Kothar | Luari | Mashat | Rakholi | Rudana | Saili | Sili | Silvassa | Sindavni | Udva | Umbarkoi | Vansda | Vasona | Velugam ";
	s_a[9]=" Brancavare | Dagasi | Daman | Diu | Magarvara | Nagwa | Pariali | Passo Covo ";
	s_a[10]=" Central Delhi | East Delhi | New Delhi | North Delhi | North East Delhi | North West Delhi | South Delhi | South West Delhi | West Delhi ";
	s_a[11]=" Canacona | Candolim | Chinchinim | Cortalim | Goa | Jua | Madgaon | Mahem | Mapuca | Marmagao | Panji | Ponda | Sanvordem | Terekhol ";
	s_a[12]=" Ahmedabad | Ahwa | Amod | Amreli | Anand | Anjar | Ankaleshwar | Babra | Balasinor | Banaskantha | Bansada | Bardoli | Bareja | Baroda | Barwala | Bayad | Bhachav | Bhanvad | Bharuch | Bhavnagar | Bhiloda | Bhuj | Billimora | Borsad | Botad | Chanasma | Chhota Udaipur | Chotila | Dabhoi | Dahod | Damnagar | Dang | Danta | Dasada | Dediapada | Deesa | Dehgam | Deodar | Devgadhbaria | Dhandhuka | Dhanera | Dharampur | Dhari | Dholka | Dhoraji | Dhrangadhra | Dhrol | Dwarka | Fortsongadh | Gadhada | Gandhi Nagar | Gariadhar | Godhra | Gogodar | Gondal | Halol | Halvad | Harij | Himatnagar | Idar | Jambusar | Jamjodhpur | Jamkalyanpur | Jamnagar | Jasdan | Jetpur | Jhagadia | Jhalod | Jodia | Junagadh | Junagarh | Kalawad | Kalol | Kapad Wanj | Keshod | Khambat | Khambhalia | Khavda | Kheda | Khedbrahma | Kheralu | Kodinar | Kotdasanghani | Kunkawav | Kutch | Kutchmandvi | Kutiyana | Lakhpat | Lakhtar | Lalpur | Limbdi | Limkheda | Lunavada | M.M.Mangrol | Mahuva | Malia-Hatina | Maliya | Malpur | Manavadar | Mandvi | Mangrol | Mehmedabad | Mehsana | Miyagam | Modasa | Morvi | Muli | Mundra | Nadiad | Nakhatrana | Nalia | Narmada | Naswadi | Navasari | Nizar | Okha | Paddhari | Padra | Palanpur | Palitana | Panchmahals | Patan | Pavijetpur | Porbandar | Prantij | Radhanpur | Rahpar | Rajaula | Rajkot | Rajpipla | Ranavav | Sabarkantha | Sanand | Sankheda | Santalpur | Santrampur | Savarkundla | Savli | Sayan | Sayla | Shehra | Sidhpur | Sihor | Sojitra | Sumrasar | Surat | Surendranagar | Talaja | Thara | Tharad | Thasra | Una-Diu | Upleta | Vadgam | Vadodara | Valia | Vallabhipur | Valod | Valsad | Vanthali | Vapi | Vav | Veraval | Vijapur | Viramgam | Visavadar | Visnagar | Vyara | Waghodia | Wankaner ";
	s_a[13]=" Adampur Mandi | Ambala | Assandh | Bahadurgarh | Barara | Barwala | Bawal | Bawanikhera | Bhiwani | Charkhidadri | Cheeka | Chhachrauli | Dabwali | Ellenabad | Faridabad | Fatehabad | Ferojpur Jhirka | Gharaunda | Gohana | Gurgaon | Hansi | Hisar | Jagadhari | Jatusana | Jhajjar | Jind | Julana | Kaithal | Kalanaur | Kalanwali | Kalka | Karnal | Kosli | Kurukshetra | Loharu | Mahendragarh | Meham | Mewat | Mohindergarh | Naraingarh | Narnaul | Narwana | Nilokheri | Nuh | Palwal | Panchkula | Panipat | Pehowa | Ratia | Rewari | Rohtak | Safidon | Sirsa | Siwani | Sonipat | Tohana | Tohsam | Yamunanagar ";
	s_a[14]=" Amb | Arki | Banjar | Bharmour | Bilaspur | Chamba | Churah | Dalhousie | Dehra Gopipur | Hamirpur | Jogindernagar | Kalpa | Kangra | Kinnaur | Kullu | Lahaul | Mandi | Nahan | Nalagarh | Nirmand | Nurpur | Palampur | Pangi | Paonta | Pooh | Rajgarh | Rampur Bushahar | Rohru | Shimla | Sirmaur | Solan | Spiti | Sundernagar | Theog | Udaipur | Una";
	s_a[15]=" Akhnoor | Anantnag | Badgam | Bandipur | Baramulla | Basholi | Bedarwah | Budgam | Doda | Gulmarg | Jammu | Kalakot | Kargil | Karnah | Kathua | Kishtwar | Kulgam | Kupwara | Leh | Mahore | Nagrota | Nobra | Nowshera | Nyoma | Padam | Pahalgam | Patnitop | Poonch | Pulwama | Rajouri | Ramban | Ramnagar | Reasi | Samba | Srinagar | Udhampur | Vaishno Devi ";
	s_a[16]=" Bagodar | Baharagora | Balumath | Barhi | Barkagaon | Barwadih | Basia | Bermo | Bhandaria | Bhawanathpur | Bishrampur | Bokaro | Bolwa | Bundu | Chaibasa | Chainpur | Chakardharpur | Chandil | Chatra | Chavparan | Daltonganj | Deoghar | Dhanbad | Dumka | Dumri | Garhwa | Garu | Ghaghra | Ghatsila | Giridih | Godda | Gomia | Govindpur | Gumla | Hazaribagh | Hunterganj | Ichak | Itki | Jagarnathpur | Jamshedpur | Jamtara | Japla | Jharmundi | Jhinkpani | Jhumaritalaiya | Kathikund | Kharsawa | Khunti | Koderma | Kolebira | Latehar | Lohardaga | Madhupur | Mahagama | Maheshpur Raj | Mandar | Mandu | Manoharpur | Muri | Nagarutatri | Nala | Noamundi | Pakur | Palamu | Palkot | Patan | Rajdhanwar | Rajmahal | Ramgarh | Ranchi | Sahibganj | Saraikela | Simaria | Simdega | Singhbhum | Tisri | Torpa ";
	s_a[17]=" Afzalpur | Ainapur | Aland | Alur | Anekal | Ankola | Arsikere | Athani | Aurad | Bableshwar | Badami | Bagalkot | Bagepalli | Bailhongal | Bangalore | Bangalore Rural | Bangarpet | Bantwal | Basavakalyan | Basavanabagewadi | Basavapatna | Belgaum | Bellary | Belthangady | Belur | Bhadravati | Bhalki | Bhatkal | Bidar | Bijapur | Biligi | Chadchan | Challakere | Chamrajnagar | Channagiri | Channapatna | Channarayapatna | Chickmagalur | Chikballapur | Chikkaballapur | Chikkanayakanahalli | Chikkodi | Chikmagalur | Chincholi | Chintamani | Chitradurga | Chittapur | Cowdahalli | Davanagere | Deodurga | Devangere | Devarahippargi | Dharwad | Doddaballapur | Gadag | Gangavathi | Gokak | Gowribdanpur | Gubbi | Gulbarga | Gundlupet | H.B.Halli | H.D. Kote | Haliyal | Hampi | Hangal | Harapanahalli | Hassan | Haveri | Hebri | Hirekerur | Hiriyur | Holalkere | Holenarsipur | Honnali | Honnavar | Hosadurga | Hosakote | Hosanagara | Hospet | Hubli | Hukkeri | Humnabad | Hungund | Hunsagi | Hunsur | Huvinahadagali | Indi | Jagalur | Jamkhandi | Jewargi | Joida | K.R. Nagar | Kadur | Kalghatagi | Kamalapur | Kanakapura | Kannada | Kargal | Karkala | Karwar | Khanapur | Kodagu | Kolar | Kollegal | Koppa | Koppal | Koratageri | Krishnarajapet | Kudligi | Kumta | Kundapur | Kundgol | Kunigal | Kurugodu | Kustagi | Lingsugur | Madikeri | Madugiri | Malavalli | Malur | Mandya | Mangalore | Manipal | Manvi | Mashal | Molkalmuru | Mudalgi | Muddebihal | Mudhol | Mudigere | Mulbagal | Mundagod | Mundargi | Murugod | Mysore | Nagamangala | Nanjangud | Nargund | Narsimrajapur | Navalgund | Nelamangala | Nimburga | Pandavapura | Pavagada | Puttur | Raibag | Raichur | Ramdurg | Ranebennur | Ron | Sagar | Sakleshpur | Salkani | Sandur | Saundatti | Savanur | Sedam | Shahapur | Shankarnarayana | Shikaripura | Shimoga | Shirahatti | Shorapur | Siddapur | Sidlaghatta | Sindagi | Sindhanur | Sira | Sirsi | Siruguppa | Somwarpet | Sorab | Sringeri | Sriniwaspur | Srirangapatna | Sullia | T. Narsipur | Tallak | Tarikere | Telgi | Thirthahalli | Tiptur | Tumkur | Turuvekere | Udupi | Virajpet | Wadi | Yadgiri | Yelburga | Yellapur ";
	s_a[18]=" Adimaly | Adoor | Agathy | Alappuzha | Alathur | Alleppey | Alwaye | Amini | Androth | Attingal | Badagara | Bitra | Calicut | Cannanore | Chetlet | Ernakulam | Idukki | Irinjalakuda | Kadamath | Kalpeni | Kalpetta | Kanhangad | Kanjirapally | Kannur | Karungapally | Kasargode | Kavarathy | Kiltan | Kochi | Koduvayur | Kollam | Kottayam | Kovalam | Kozhikode | Kunnamkulam | Malappuram | Mananthodi | Manjeri | Mannarghat | Mavelikkara | Minicoy | Munnar | Muvattupuzha | Nedumandad | Nedumgandam | Nilambur | Palai | Palakkad | Palghat | Pathaanamthitta | Pathanamthitta | Payyanur | Peermedu | Perinthalmanna | Perumbavoor | Punalur | Quilon | Ranni | Shertallai | Shoranur | Taliparamba | Tellicherry | Thiruvananthapuram | Thodupuzha | Thrissur | Tirur | Tiruvalla | Trichur | Trivandrum | Uppala | Vadakkanchery | Vikom | Wayanad ";
	s_a[19]=" Agatti Island | Bingaram Island | Bitra Island | Chetlat Island | Kadmat Island | Kalpeni Island | Kavaratti Island | Kiltan Island | Lakshadweep Sea | Minicoy Island | North Island | South Island ";
	s_a[20]=" Agar | Ajaigarh | Alirajpur | Amarpatan | Amarwada | Ambah | Anuppur | Arone | Ashoknagar | Ashta | Atner | Babaichichli | Badamalhera | Badarwsas | Badnagar | Badnawar | Badwani | Bagli | Baihar | Balaghat | Baldeogarh | Baldi | Bamori | Banda | Bandhavgarh | Bareli | Baroda | Barwaha | Barwani | Batkakhapa | Begamganj | Beohari | Berasia | Berchha | Betul | Bhainsdehi | Bhander | Bhanpura | Bhikangaon | Bhimpur | Bhind | Bhitarwar | Bhopal | Biaora | Bijadandi | Bijawar | Bijaypur | Bina | Birsa | Birsinghpur | Budhni | Burhanpur | Buxwaha | Chachaura | Chanderi | Chaurai | Chhapara | Chhatarpur | Chhindwara | Chicholi | Chitrangi | Churhat | Dabra | Damoh | Datia | Deori | Deosar | Depalpur | Dewas | Dhar | Dharampuri | Dindori | Gadarwara | Gairatganj | Ganjbasoda | Garoth | Ghansour | Ghatia | Ghatigaon | Ghorandogri | Ghughari | Gogaon | Gohad | Goharganj | Gopalganj | Gotegaon | Gourihar | Guna | Gunnore | Gwalior | Gyraspur | Hanumana | Harda | Harrai | Harsud | Hatta | Hoshangabad | Ichhawar | Indore | Isagarh | Itarsi | Jabalpur | Jabera | Jagdalpur | Jaisinghnagar | Jaithari | Jaitpur | Jaitwara | Jamai | Jaora | Jatara | Jawad | Jhabua | Jobat | Jora | Kakaiya | Kannod | Kannodi | Karanjia | Kareli | Karera | Karhal | Karpa | Kasrawad | Katangi | Katni | Keolari | Khachrod | Khajuraho | Khakner | Khalwa | Khandwa | Khaniadhana | Khargone | Khategaon | Khetia | Khilchipur | Khirkiya | Khurai | Kolaras | Kotma | Kukshi | Kundam | Kurwai | Kusmi | Laher | Lakhnadon | Lamta | Lanji | Lateri | Laundi | Maheshwar | Mahidpurcity | Maihar | Majhagwan | Majholi | Malhargarh | Manasa | Manawar | Mandla | Mandsaur | Manpur | Mauganj | Mawai | Mehgaon | Mhow | Morena | Multai | Mungaoli | Nagod | Nainpur | Narsingarh | Narsinghpur | Narwar | Nasrullaganj | Nateran | Neemuch | Niwari | Niwas | Nowgaon | Pachmarhi | Pandhana | Pandhurna | Panna | Parasia | Patan | Patera | Patharia | Pawai | Petlawad | Pichhore | Piparia | Pohari | Prabhapattan | Punasa | Pushprajgarh | Raghogarh | Raghunathpur | Rahatgarh | Raisen | Rajgarh | Rajpur | Ratlam | Rehli | Rewa | Sabalgarh | Sagar | Sailana | Sanwer | Sarangpur | Sardarpur | Satna | Saunsar | Sehore | Sendhwa | Seondha | Seoni | Seonimalwa | Shahdol | Shahnagar | Shahpur | Shajapur | Sheopur | Sheopurkalan | Shivpuri | Shujalpur | Sidhi | Sihora | Silwani | Singrauli | Sirmour | Sironj | Sitamau | Sohagpur | Sondhwa | Sonkatch | Susner | Tamia | Tarana | Tendukheda | Teonthar | Thandla | Tikamgarh | Timarani | Udaipura | Ujjain | Umaria | Umariapan | Vidisha | Vijayraghogarh | Waraseoni | Zhirnia ";
	s_a[21]=" Achalpur | Aheri | Ahmednagar | Ahmedpur | Ajara | Akkalkot | Akola | Akole | Akot | Alibagh | Amagaon | Amalner | Ambad | Ambejogai | Amravati | Arjuni Merogaon | Arvi | Ashti | Atpadi | Aurangabad | Ausa | Babhulgaon | Balapur | Baramati | Barshi Takli | Barsi | Basmatnagar | Bassein | Beed | Bhadrawati | Bhamregadh | Bhandara | Bhir | Bhiwandi | Bhiwapur | Bhokar | Bhokardan | Bhoom | Bhor | Bhudargad | Bhusawal | Billoli | Brahmapuri | Buldhana | Butibori | Chalisgaon | Chamorshi | Chandgad | Chandrapur | Chandur | Chanwad | Chhikaldara | Chikhali | Chinchwad | Chiplun | Chopda | Chumur | Dahanu | Dapoli | Darwaha | Daryapur | Daund | Degloor | Delhi Tanda | Deogad | Deolgaonraja | Deori | Desaiganj | Dhadgaon | Dhanora | Dharani | Dhiwadi | Dhule | Dhulia | Digras | Dindori | Edalabad | Erandul | Etapalli | Gadhchiroli | Gadhinglaj | Gaganbavada | Gangakhed | Gangapur | Gevrai | Ghatanji | Golegaon | Gondia | Gondpipri | Goregaon | Guhagar | Hadgaon | Hatkangale | Hinganghat | Hingoli | Hingua | Igatpuri | Indapur | Islampur | Jalgaon | Jalna | Jamkhed | Jamner | Jath | Jawahar | Jintdor | Junnar | Kagal | Kaij | Kalamb | Kalamnuri | Kallam | Kalmeshwar | Kalwan | Kalyan | Kamptee | Kandhar | Kankavali | Kannad | Karad | Karjat | Karmala | Katol | Kavathemankal | Kedgaon | Khadakwasala | Khamgaon | Khed | Khopoli | Khultabad | Kinwat | Kolhapur | Kopargaon | Koregaon | Kudal | Kuhi | Kurkheda | Kusumba | Lakhandur | Langa | Latur | Lonar | Lonavala | Madangad | Madha | Mahabaleshwar | Mahad | Mahagaon | Mahasala | Mahaswad | Malegaon | Malgaon | Malgund | Malkapur | Malsuras | Malwan | Mancher | Mangalwedha | Mangaon | Mangrulpur | Manjalegaon | Manmad | Maregaon | Mehda | Mekhar | Mohadi | Mohol | Mokhada | Morshi | Mouda | Mukhed | Mul | Mumbai | Murbad | Murtizapur | Murud | Nagbhir | Nagpur | Nahavara | Nanded | Nandgaon | Nandnva | Nandurbar | Narkhed | Nashik | Navapur | Ner | Newasa | Nilanga | Niphad | Omerga | Osmanabad | Pachora | Paithan | Palghar | Pali | Pandharkawada | Pandharpur | Panhala | Paranda | Parbhani | Parner | Parola | Parseoni | Partur | Patan | Pathardi | Pathari | Patoda | Pauni | Peint | Pen | Phaltan | Pimpalner | Pirangut | Poladpur | Pune | Pusad | Pusegaon | Radhanagar | Rahuri | Raigad | Rajapur | Rajgurunagar | Rajura | Ralegaon | Ramtek | Ratnagiri | Raver | Risod | Roha | Sakarwadi | Sakoli | Sakri | Salekasa | Samudrapur | Sangamner | Sanganeshwar | Sangli | Sangola | Sanguem | Saoner | Saswad | Satana | Satara | Sawantwadi | Seloo | Shahada | Shahapur | Shahuwadi | Shevgaon | Shirala | Shirol | Shirpur | Shirur | Shirwal | Sholapur | Shri Rampur | Shrigonda | Shrivardhan | Sillod | Sinderwahi | Sindhudurg | Sindkheda | Sindkhedaraja | Sinnar | Sironcha | Soyegaon | Surgena | Talasari | Talegaon S.Ji Pant | Taloda | Tasgaon | Thane | Tirora | Tiwasa | Trimbak | Tuljapur | Tumsar | Udgir | Umarkhed | Umrane | Umrer | Urlikanchan | Vaduj | Velhe | Vengurla | Vijapur | Vita | Wada | Wai | Walchandnagar | Wani | Wardha | Warlydwarud | Warora | Washim | Wathar | Yavatmal | Yawal | Yeola | Yeotmal ";
	s_a[22]=" Bishnupur | Chakpikarong | Chandel | Chattrik | Churachandpur | Imphal | Jiribam | Kakching | Kalapahar | Mao | Mulam | Parbung | Sadarhills | Saibom | Sempang | Senapati | Sochumer | Taloulong | Tamenglong | Thinghat | Thoubal | Ukhrul ";
	s_a[23]=" Amlaren | Baghmara | Cherrapunjee | Dadengiri | Garo Hills | Jaintia Hills | Jowai | Khasi Hills | Khliehriat | Mariang | Mawkyrwat | Nongpoh | Nongstoin | Resubelpara | Ri Bhoi | Shillong | Tura | Williamnagar";
	s_a[24]=" Aizawl | Champhai | Demagiri | Kolasib | Lawngtlai | Lunglei | Mamit | Saiha | Serchhip";
	s_a[25]=" Dimapur | Jalukie | Kiphire | Kohima | Mokokchung | Mon | Phek | Tuensang | Wokha | Zunheboto ";
	s_a[26]=" Anandapur | Angul | Anugul | Aska | Athgarh | Athmallik | Attabira | Bagdihi | Balangir | Balasore | Baleswar | Baliguda | Balugaon | Banaigarh | Bangiriposi | Barbil | Bargarh | Baripada | Barkot | Basta | Berhampur | Betanati | Bhadrak | Bhanjanagar | Bhawanipatna | Bhubaneswar | Birmaharajpur | Bisam Cuttack | Boriguma | Boudh | Buguda | Chandbali | Chhatrapur | Chhendipada | Cuttack | Daringbadi | Daspalla | Deodgarh | Deogarh | Dhanmandal | Dharamgarh | Dhenkanal | Digapahandi | Dunguripali | G. Udayagiri | Gajapati | Ganjam | Ghatgaon | Gudari | Gunupur | Hemgiri | Hindol | Jagatsinghapur | Jajpur | Jamankira | Jashipur | Jayapatna | Jeypur | Jharigan | Jharsuguda | Jujumura | Kalahandi | Kalimela | Kamakhyanagar | Kandhamal | Kantabhanji | Kantamal | Karanjia | Kashipur | Kendrapara | Kendujhar | Keonjhar | Khalikote | Khordha | Khurda | Komana | Koraput | Kotagarh | Kuchinda | Lahunipara | Laxmipur | M. Rampur | Malkangiri | Mathili | Mayurbhanj | Mohana | Motu | Nabarangapur | Naktideul | Nandapur | Narlaroad | Narsinghpur | Nayagarh | Nimapara | Nowparatan | Nowrangapur | Nuapada | Padampur | Paikamal | Palla Hara | Papadhandi | Parajang | Pardip | Parlakhemundi | Patnagarh | Pattamundai | Phiringia | Phulbani | Puri | Puruna Katak | R. Udayigiri | Rairakhol | Rairangpur | Rajgangpur | Rajkhariar | Rayagada | Rourkela | Sambalpur | Sohela | Sonapur | Soro | Subarnapur | Sunabeda | Sundergarh | Surada | T. Rampur | Talcher | Telkoi | Titlagarh | Tumudibandha | Udala | Umerkote ";
	s_a[27]=" Bahur | Karaikal | Mahe | Pondicherry | Purnankuppam | Valudavur | Villianur | Yanam ";
	s_a[28]=" Abohar | Ajnala | Amritsar | Balachaur | Barnala | Batala | Bathinda | Chandigarh | Dasua | Dinanagar | Faridkot | Fatehgarh Sahib | Fazilka | Ferozepur | Garhashanker | Goindwal | Gurdaspur | Guruharsahai | Hoshiarpur | Jagraon | Jalandhar | Jugial | Kapurthala | Kharar | Kotkapura | Ludhiana | Malaut | Malerkotla | Mansa | Moga | Muktasar | Nabha | Nakodar | Nangal | Nawanshahar | Nawanshahr | Pathankot | Patiala | Patti | Phagwara | Phillaur | Phulmandi | Quadian | Rajpura | Raman | Rayya | Ropar | Rupnagar | Samana | Samrala | Sangrur | Sardulgarh | Sarhind | SAS Nagar | Sultanpur Lodhi | Sunam | Tanda Urmar | Tarn Taran | Zira ";
	s_a[29]=" Abu Road | Ahore | Ajmer | Aklera | Alwar | Amber | Amet | Anupgarh | Asind | Aspur | Atru | Bagidora | Bali | Bamanwas | Banera | Bansur | Banswara | Baran | Bari | Barisadri | Barmer | Baseri | Bassi | Baswa | Bayana | Beawar | Begun | Behror | Bhadra | Bharatpur | Bhilwara | Bhim | Bhinmal | Bikaner | Bilara | Bundi | Chhabra | Chhipaborad | Chirawa | Chittorgarh | Chohtan | Churu | Dantaramgarh | Dausa | Deedwana | Deeg | Degana | Deogarh | Deoli | Desuri | Dhariawad | Dholpur | Digod | Dudu | Dungarpur | Dungla | Fatehpur | Gangapur | Gangdhar | Gerhi | Ghatol | Girwa | Gogunda | Hanumangarh | Hindaun | Hindoli | Hurda | Jahazpur | Jaipur | Jaisalmer | Jalore | Jhalawar | Jhunjhunu | Jodhpur | Kaman | Kapasan | Karauli | Kekri | Keshoraipatan | Khandar | Kherwara | Khetri | Kishanganj | Kishangarh | Kishangarhbas | Kolayat | Kota | Kotputli | Kotra | Kotri | Kumbalgarh | Kushalgarh | Ladnun | Ladpura | Lalsot | Laxmangarh | Lunkaransar | Mahuwa | Malpura | Malvi | Mandal | Mandalgarh | Mandawar | Mangrol | Marwar-Jn | Merta | Nadbai | Nagaur | Nainwa | Nasirabad | Nathdwara | Nawa | Neem Ka Thana | Newai | Nimbahera | Nohar | Nokha | Onli | Osian | Pachpadara | Pachpahar | Padampur | Pali | Parbatsar | Phagi | Phalodi | Pilani | Pindwara | Pipalda | Pirawa | Pokaran | Pratapgarh | Raipur | Raisinghnagar | Rajgarh | Rajsamand | Ramganj Mandi | Ramgarh | Rashmi | Ratangarh | Reodar | Rupbas | Sadulshahar | Sagwara | Sahabad | Salumber | Sanchore | Sangaria | Sangod | Sapotra | Sarada | Sardarshahar | Sarwar | Sawai Madhopur | Shahapura | Sheo | Sheoganj | Shergarh | Sikar | Sirohi | Siwana | Sojat | Sri Dungargarh | Sri Ganganagar | Sri Karanpur | Sri Madhopur | Sujangarh | Taranagar | Thanaghazi | Tibbi | Tijara | Todaraisingh | Tonk | Udaipur | Udaipurwati | Uniayara | Vallabhnagar | Viratnagar ";
	s_a[30]=" Barmiak | Be | Bhurtuk | Chhubakha | Chidam | Chubha | Chumikteng | Dentam | Dikchu | Dzongri | Gangtok | Gauzing | Gyalshing | Hema | Kerung | Lachen | Lachung | Lema | Lingtam | Lungthu | Mangan | Namchi | Namthang | Nanga | Nantang | Naya Bazar | Padamachen | Pakhyong | Pemayangtse | Phensang | Rangli | Rinchingpong | Sakyong | Samdong | Singtam | Siniolchu | Sombari | Soreng | Sosing | Tekhug | Temi | Tsetang | Tsomgo | Tumlong | Yangang | Yumtang ";
	s_a[31]=" Ambasamudram | Anamali | Arakandanallur | Arantangi | Aravakurichi | Ariyalur | Arkonam | Arni | Aruppukottai | Attur | Avanashi | Batlagundu | Bhavani | Chengalpattu | Chengam | Chennai | Chidambaram | Chingleput | Coimbatore | Courtallam | Cuddalore | Cumbum | Denkanikoitah | Devakottai | Dharampuram | Dharmapuri | Dindigul | Erode | Gingee | Gobichettipalayam | Gudalur | Gudiyatham | Harur | Hosur | Jayamkondan | Kallkurichi | Kanchipuram | Kangayam | Kanyakumari | Karaikal | Karaikudi | Karur | Keeranur | Kodaikanal | Kodumudi | Kotagiri | Kovilpatti | Krishnagiri | Kulithalai | Kumbakonam | Kuzhithurai | Madurai | Madurantgam | Manamadurai | Manaparai | Mannargudi | Mayiladuthurai | Mayiladutjurai | Mettupalayam | Metturdam | Mudukulathur | Mulanur | Musiri | Nagapattinam | Nagarcoil | Namakkal | Nanguneri | Natham | Neyveli | Nilgiris | Oddanchatram | Omalpur | Ootacamund | Ooty | Orathanad | Palacode | Palani | Palladum | Papanasam | Paramakudi | Pattukottai | Perambalur | Perundurai | Pollachi | Polur | Pondicherry | Ponnamaravathi | Ponneri | Pudukkottai | Rajapalayam | Ramanathapuram | Rameshwaram | Ranipet | Rasipuram | Salem | Sankagiri | Sankaran | Sathiyamangalam | Sivaganga | Sivakasi | Sriperumpudur | Srivaikundam | Tenkasi | Thanjavur | Theni | Thirumanglam | Thiruraipoondi | Thoothukudi | Thuraiyure | Tindivanam | Tiruchendur | Tiruchengode | Tiruchirappalli | Tirunelvelli | Tirupathur | Tirupur | Tiruttani | Tiruvallur | Tiruvannamalai | Tiruvarur | Tiruvellore | Tiruvettipuram | Trichy | Tuticorin | Udumalpet | Ulundurpet | Usiliampatti | Uthangarai | Valapady | Valliyoor | Vaniyambadi | Vedasandur | Vellore | Velur | Vilathikulam | Villupuram | Virudhachalam | Virudhunagar | Wandiwash | Yercaud ";
	s_a[32]=" Agartala | Ambasa | Bampurbari | Belonia | Dhalai | Dharam Nagar | Kailashahar | Kamal Krishnabari | Khopaiyapara | Khowai | Phuldungsei | Radha Kishore Pur | Tripura ";
	s_a[33]=" Achhnera | Agra | Akbarpur | Aliganj | Aligarh | Allahabad | Ambedkar Nagar | Amethi | Amiliya | Amroha | Anola | Atrauli | Auraiya | Azamgarh | Baberu | Badaun | Baghpat | Bagpat | Baheri | Bahraich | Ballia | Balrampur | Banda | Bansdeeh | Bansgaon | Bansi | Barabanki | Bareilly | Basti | Bhadohi | Bharthana | Bharwari | Bhogaon | Bhognipur | Bidhuna | Bijnore | Bikapur | Bilari | Bilgram | Bilhaur | Bindki | Bisalpur | Bisauli | Biswan | Budaun | Budhana | Bulandshahar | Bulandshahr | Capianganj | Chakia | Chandauli | Charkhari | Chhata | Chhibramau | Chirgaon | Chitrakoot | Chunur | Dadri | Dalmau | Dataganj | Debai | Deoband | Deoria | Derapur | Dhampur | Domariyaganj | Dudhi | Etah | Etawah | Faizabad | Farrukhabad | Fatehpur | Firozabad | Garauth | Garhmukteshwar | Gautam Buddha Nagar | Ghatampur | Ghaziabad | Ghazipur | Ghosi | Gonda | Gorakhpur | Gunnaur | Haidergarh | Hamirpur | Hapur | Hardoi | Harraiya | Hasanganj | Hasanpur | Hathras | Jalalabad | Jalaun | Jalesar | Jansath | Jarar | Jasrana | Jaunpur | Jhansi | Jyotiba Phule Nagar | Kadipur | Kaimganj | Kairana | Kaisarganj | Kalpi | Kannauj | Kanpur | Karchhana | Karhal | Karvi | Kasganj | Kaushambi | Kerakat | Khaga | Khair | Khalilabad | Kheri | Konch | Kumaon | Kunda | Kushinagar | Lalganj | Lalitpur | Lucknow | Machlishahar | Maharajganj | Mahoba | Mainpuri | Malihabad | Mariyahu | Math | Mathura | Mau | Maudaha | Maunathbhanjan | Mauranipur | Mawana | Meerut | Mehraun | Meja | Mirzapur | Misrikh | Modinagar | Mohamdabad | Mohamdi | Moradabad | Musafirkhana | Muzaffarnagar | Nagina | Najibabad | Nakur | Nanpara | Naraini | Naugarh | Nawabganj | Nighasan | Noida | Orai | Padrauna | Pahasu | Patti | Pharenda | Phoolpur | Phulpur | Pilibhit | Pitamberpur | Powayan | Pratapgarh | Puranpur | Purwa | Raibareli | Rampur | Ramsanehi Ghat | Rasara | Rath | Robertsganj | Sadabad | Safipur | Sagri | Saharanpur | Sahaswan | Sahjahanpur | Saidpur | Salempur | Salon | Sambhal | Sandila | Sant Kabir Nagar | Sant Ravidas Nagar | Sardhana | Shahabad | Shahganj | Shahjahanpur | Shikohabad | Shravasti | Siddharthnagar | Sidhauli | Sikandra Rao | Sikandrabad | Sitapur | Siyana | Sonbhadra | Soraon | Sultanpur | Tanda | Tarabganj | Tilhar | Unnao | Utraula | Varanasi | Zamania ";
	s_a[34]=" Almora | Bageshwar | Bhatwari | Chakrata | Chamoli | Champawat | Dehradun | Deoprayag | Dharchula | Dunda | Haldwani | Haridwar | Joshimath | Karan Prayag | Kashipur | Khatima | Kichha | Lansdown | Munsiari | Mussoorie | Nainital | Pantnagar | Partapnagar | Pauri Garhwal | Pithoragarh | Purola | Rajgarh | Ranikhet | Roorkee | Rudraprayag | Tehri Garhwal | Udham Singh Nagar | Ukhimath | Uttarkashi ";
	s_a[35]=" Adra | Alipurduar | Amlagora | Arambagh | Asansol | Balurghat | Bankura | Bardhaman | Basirhat | Berhampur | Bethuadahari | Birbhum | Birpara | Bishanpur | Bolpur | Bongoan | Bulbulchandi | Burdwan | Calcutta | Canning | Champadanga | Contai | Cooch Behar | Daimond Harbour | Dalkhola | Dantan | Darjeeling | Dhaniakhali | Dhuliyan | Dinajpur | Dinhata | Durgapur | Gangajalghati | Gangarampur | Ghatal | Guskara | Habra | Haldia | Harirampur | Harishchandrapur | Hooghly | Howrah | Islampur | Jagatballavpur | Jalpaiguri | Jhalda | Jhargram | Kakdwip | Kalchini | Kalimpong | Kalna | Kandi | Karimpur | Katwa | Kharagpur | Khatra | Krishnanagar | Mal Bazar | Malda | Manbazar | Mathabhanga | Medinipur | Mekhliganj | Mirzapur | Murshidabad | Nadia | Nagarakata | Nalhati | Nayagarh | Parganas | Purulia | Raiganj | Rampur Hat | Ranaghat | Seharabazar | Siliguri | Suri | Takipur | Tamluk";

	function print_state(state_id){
		// given the id of the <select> tag as function argument, it inserts <option> tags
		var option_str = document.getElementById(state_id);
		option_str.length=0;
		option_str.options[0] = new Option('Select State','');
		option_str.selectedIndex = 0;
		for (var i=0; i<state_arr.length; i++) {
			option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
		}
	}

	function print_city(city_id, city_index){
		var option_str = document.getElementById(city_id);
		option_str.length=0;	// Fixed by Julian Woods
		option_str.options[0] = new Option('Select City','');
		option_str.selectedIndex = 0;
		var city_arr = s_a[city_index].split("|");
		for (var i=0; i<city_arr.length; i++) {
			option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
		}
	}
</script>
</html>


<?php
	$destination = filter_input(INPUT_POST, 'destination');
	$checkin = filter_input(INPUT_POST, 'checkin');
	$checkout = filter_input(INPUT_POST, 'checkout');
	$adults = filter_input(INPUT_POST, 'adults');
	$children = filter_input(INPUT_POST, 'children');
	if ($destination != "" || $children != 0 || $checkin != 0 || $checkout !="" || $adults !=0 ){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "php";				
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
			}
		else{
			$sql = "INSERT INTO hotelbook (destination, checkin, checkout, adults, children)
			values ('$email','$checkin','$checkout','$adults','$children')";
			if ($conn->query($sql)){
				echo "New record is inserted sucessfully";
			}
			else{
				echo "Error: ". $sql ."". $conn->error;
				}
					$conn->close();
				}
			}
			else{
			echo "all details are required";
			die();
			}
		


?>