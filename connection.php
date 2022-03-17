<?php

$dbhost = "localhost";
$dbuser = "garconia_arinji";
$dbpass = "SL4kwf05";
$dbname = "garconia_sample-login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

