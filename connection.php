<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hyperloop";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
