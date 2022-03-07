<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<html lang="en">
    	<head>
		<meta charset="UTF-8" />
		<!-- Character Encoding -->
		<meta name="description" content="This is Arinji's website" />
		<meta name="author" content="Arinji" />
		<meta name="keywords" content="Arinji,website" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="main.css" />

		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
		<title>Home</title>
	</head>
    <header>
		<div class="container">
		<img class = "MobilePeacePic" src="https://i.ibb.co/BzM5cmg/norway-4970080.jpg" alt="people-g7d35e8085-1280" border="0"></a>
		<div class="wrapper2">
			<nav>
				<br><br><br><br><br><br><h1 class="MobileHead">Trust For Trust</h1> 
				<ul class="MobileNavigation">
					<li><a href="mobile-contact.php">Contact</a></li>
					<li><a href="mobile-about.php">About Us</a></li>
					<li><a href="mobile-pricing.php">Pricing</a></li>
					<li><a href="mobile-index.php">Home</a></li>
					<li><a href="logout.php">Logout</a></li><br>
					</li>
				</ul>
			</nav>
			</div>
		</div>
		</header>
		<main>
			<img
				src="https://i.ibb.co/MkFy09W/pexels-alexander-mils-2068975.jpg"
				alt="Picture"
				class="dance_img"
				id="1"
				width="500px"
				onmouseover="imageEnlarge();"
				onmouseout="imageReset();"
			/>
			<script src="script.js"></script>
			<p class="Main_Para" id="2">
				During the making of this site we have left no stone unturned. 
				<br> This site has taken months to perfect and polish. 
				<br> We also use ddos protected hosts for optimum uptime. 
				<br> Finally the web host is also costly.
				 <br> This is why we hope to be donated 200 Rs per month as donations. 
				 <br> If this is not met due to storage limitations at the end of the<br> month we have to delete the chat history<br> and also all user login details. 
				 <br> If you would like to donate please send us a mail at <br> support@trustfortrust.cf
			</p>
		</main>
	</body>
</html>
        