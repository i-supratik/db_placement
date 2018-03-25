<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbnme = "placementDB";
$conn = new mysqli($servername, $username, $password, $dbnme);
if ($conn->connect_error)
{
	die("Connection error : " . $conn->connect_error);
}
?>