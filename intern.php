<?php
ob_start();
session_start();
include "connect.php";
if(isset($_REQUEST["submit"]))
{
    $intern=$_REQUEST['intern'];
    
    $comp=$_REQUEST['comp'];
    
    $dur=$_REQUEST['dur'];
    
    $sid=$_SESSION['session_id'];

$sql = "INSERT INTO internship(SID,INTERNSHIP_PROJECT,COMPANY_INSTITUTION,DURATION) VALUES ('$sid','$intern','$comp','$dur')";

if ($conn->query($sql) === TRUE) {
    header("location:internship.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
 ?>
