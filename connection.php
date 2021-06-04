<?php

$dbhost = "sql6.freemysqlhosting.net";
$dbuser = "sql6416738sql6416738";
$dbpass = "sql6416738";
$dbname = "sql6416738";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
