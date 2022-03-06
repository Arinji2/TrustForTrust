<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<!-- Character Encoding -->
		<meta name="description" content="This is Arinji's website" />
		<meta name="author" content="Arinji" />
		<meta name="keywords" content="Arinji,website" />
		<meta name="viewport" content="width=device-width, initial-scale=0.1" />
		<link rel="stylesheet" href="main.css" />

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
			rel="stylesheet"
		/>
		<title>Home</title>
	</head>
	<body>
		<header>
			<nav>
				<h1 class="Head">Trust For Trust</h1>
				<ul class="Navigation">
					<li><a href="contact.html">Contact</a></li>
					<li><a href="terms.html">Terms and Conditions</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="pricing.html">Pricing</a></li>
					<li><a href="login.html">Login/Register</a></li>
					<li class="nav_img">
						<img
							src="https://i.ibb.co/vc55Pfc/image.png"
							alt="image"
							border="0"
							width="14%"
						/>
					</li>
				</ul>
			</nav>
		</header>
		<main>
			<img
				src="https://i.ibb.co/cC2NL0x/freedom-ge783b971b-640.jpg"
				alt="Picture"
				class="dance_img"
				id="1"
				width="500px"
				onmouseover="imageEnlarge();"
				onmouseout="imageReset();"
			/>
			<script src="script.js"></script>
			<p class="Main_Para" id="2">
				School is stressful. We know it. <br />Thats why we thought of making a
				site for all the Sulonians to <br />Anonymously share problems and talk
				with us. <br />
				We wont disclose your information and it all stays secret. <br />
				This is the place for you to let out your feelings.
			</p>
			<p class="Guide1">
				<br /><br />Login / Register: Click on this option to be taken to the
				Login Page<br />Pricing: Click on this option to be taken to the Pricing
				Page<br />About Us: Click on this option to be taken to the About Us
				Page of the Creators<br />Terms and Conditions: Click on this option to
				be taken to the Terms Page <br />Contact: Click on this option to be
				taken to the Contact Us Page
			</p>
		</main>
	</body>
</html>
