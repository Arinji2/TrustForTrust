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
		<img class = "PeacePic"src="https://i.ibb.co/BzM5cmg/norway-4970080.jpg" alt="people-g7d35e8085-1280" border="0"></a>
		
			<nav>
				<h1 class="Head">Trust For Trust</h1> 
				<ul class="Navigation" "style: text-decoration: none;">
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
				site for all the Sulonians to <br />Anonymously talk with everyone. <br> No need to download stuff like discord. <br> Just a basic login page. 
				This is the place for you to let out your feelings. <br> There are also 0 rules and 0 moderators. <br>So do not take anything seriously and do not trust the names.
			</p>
		</main>
		<script type="text/javascript">
        if (screen.width <= 720) {
        window.location = "https://web.trustfortrust.cf/mobile-index.php";
		</script>
	</body>
</html>
