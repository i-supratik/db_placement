<?php 
ob_start();
session_start(); 
if(empty($_SESSION['session_id']))
{
    header("location:login1.php");
}
include "connect.php";
$sid=$_SESSION['session_id'];
$sql="SELECT verified FROM student WHERE SID='$sid'";
$res=$conn->query($sql);
$row=$res->fetch_assoc();

if($row['verified']=="no")
    header("location:notverified.php");
else
    header("location:home.php");
?>