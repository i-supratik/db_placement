<?php
ob_start();
session_start();
include "connect.php";
if(isset($_REQUEST["submit"]))
{
$sid=$_SESSION['veri'];
$ver=$_REQUEST['ver'];
$sql="UPDATE student SET verified='$ver' where SID='$sid'";

if ($conn->query($sql) === TRUE) {
    header("location:verify.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
 ?>