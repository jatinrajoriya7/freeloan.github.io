<?php

$dbhost = "sql201.epizy.com";
$dbuser = "epiz_28775254";
$dbpass = "E6QpQisIYLb";
$dbname = "epiz_28775254_krrish";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
