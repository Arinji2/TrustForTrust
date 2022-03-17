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

			<link rel="preconnect" href="https://fonts.googleapis.com" />
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
			<link
				href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=Sansita+Swashed:wght@500&display=swap"
				rel="stylesheet"
			/>
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
			<div class="Main_Para">
				Feel free to send us a mail at support@trustfortrust.ml . We also have a
				<a href="https://twitter.com/TrustForTrust1/followers"
					>Twitter Account</a
				>, an
				<a href="https://www.instagram.com/trustfortrust.cf/">Insta Account</a>
				and a <a href="">FaceBook Account</a>.
			</div>
		</main>
		<script type="text/javascript">
        if (screen.width <= 720) {
        window.location = "https://web.trustfortrust.cf/mobile-contact.php";
		</script>
	</html>
</html>
