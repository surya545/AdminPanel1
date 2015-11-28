<?php
$servername = "localhost";
$username = "root";
$password = "suryasurya";

$conn = mysql_connect($servername, $username, $password);

if(!$conn) {
	die("Connection to database failed : ".mysql_connect_error());
}

$db = mysql_select_db("admin");

?>
