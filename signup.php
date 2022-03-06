<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
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
		<link rel="stylesheet" href="NewMain.css" />

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
					<li><a href="terms.php">Terms and Conditions</a></li>
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
<body>
	<div id="box">
		
		<form method="post">
			<div class="Login">Sign Up</div><br>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
           <div class="wrapper">
			<input id="button" type="submit" value="SignUp"><br><br>
            

			<a class ="SignUpButton" href="login.php">Have an account? Click to Login Instead</a><br><br>
            </div>
		</form>
	</div>
</body>
</html>