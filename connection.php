<?php

$dbhost = "localhost";
$dbuser = "id18553861_arinji";
$dbpass = "aBCDEFGHIJKL12-";
$dbname = "id18553861_loginid";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
