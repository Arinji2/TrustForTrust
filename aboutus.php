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
				<img
					class="PeacePic"
					src="https://i.ibb.co/BzM5cmg/norway-4970080.jpg"
					alt="people-g7d35e8085-1280"
					border="0"
				/>

				<nav>
					<h1 class="Head">Trust For Trust</h1>
					<ul class="Navigation">
						<li><a href="contact.php">Contact</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="pricing.php">Pricing</a></li>
						<li><a href="index.php">Home</a></li>
						<li><a href="chat.php">Chat</a></li>
						<li><a href="logout.php">Logout</a></li>
						<li class="nav_img">
							<img
								src="https://i.ibb.co/dm1NDZK/image-2022-03-06-130229.png"
								alt="image"
								border="0"
								width="14%"
								class="logo"
							/>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<main>
			<img
				src="https://i.ibb.co/1bzm8VH/image-2022-03-08-232000.png"
				alt="Picture"
				class="arinji_img"
				id="1"
				width="500px"
				onmouseover="imageEnlarge();"
				onmouseout="imageReset();"
			/>
			<script src="script.js"></script>
			<p class="Main_Para" id="2">
				Arinji: Founder, CEO<br />
				<br />Hiya, I'm Arinji.<br />A 15 year old Indian hoping to be a front
				end developer.<br />I developed the site<br />Check out my portfolio at
				www.arinji.ml :)
			</p>
			<img
				src="https://i.ibb.co/ZYBGL2M/image-2022-03-10-224454.png"
				alt="Picture"
				class="arinji_img"
				id="4"
				width="500px"
				onmouseover="imageEnlarge1();"
				onmouseout="imageReset1();"
			/>
			<script src="script.js"></script>
			<p class="Main_Para" id="2">
				Nilay: Founder, CFO<br />
				<br />Hiya, I'm Nilay.<br />Wishing to be a UI Designer.<br />I came up
				with the site and advertised it
			</p>
			<script type="text/javascript">
				if (screen.width <= 720) {
					window.location = "https://web.trustfortrust.cf/mobile-aboutus.php"
				}
			</script>
		</main>
	</html>
</html>
