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
<body>
	<div id="box">
		
		<form method="post">
		    <div class="Login">This is the Mobile Site</div><br>
			<div class="Login">Sign Up</div><br>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
           <div class="wrapper">
			<input id="button" type="submit" value="SignUp"><br><br>
            

			<a class ="SignUpButton" href="mobile-login.php">Have an account? Click to Login Instead</a><br><br>
            </div>
		</form>
	</div>
</body>
</html>