<?php
ob_start();
session_start();
include "connect.php";
if(isset($_REQUEST["submit"]))
{

$sid = $_SESSION["session_id"];

$fname = $_REQUEST['fname'];

$mname = $_REQUEST['mname'];

$lname = $_REQUEST['lname'];

$dob = $_REQUEST['dob'];

$phone = $_REQUEST['phone'];

$adhar = $_REQUEST['adhar'];

$email = $_REQUEST['mail'];
    
$amail = $_REQUEST['altmail'];

$address = $_REQUEST['address'];

$city = $_REQUEST['city'];
$sql1="SELECT city_name FROM cities WHERE city_id='$city'";
$res1=$conn->query($sql1);
$row1=$res1->fetch_assoc();
$cityname=$row1['city_name'];

$state = $_REQUEST['state'];
$sql2="SELECT state_name FROM states WHERE state_id='$state'";
$res2=$conn->query($sql2);
$row2=$res2->fetch_assoc();
$statename=$row2['state_name'];

$pin = $_REQUEST['pin'];

$sql = "UPDATE student SET FIRST_NAME='$fname',MIDDLE_NAME='$mname',LAST_NAME='$lname',DOB='$dob',PHONE_NUMBER='$phone',AADHAR_NUMBER='$adhar',EMAIL_ID='$email', Alt_email_Id='$amail',ADDRESS='$address',CITY='$cityname',STATE='$statename',POSTAL_CODE='$pin' WHERE SID='$sid'";

if ($conn->query($sql) === TRUE) {
    header("location:Parent_form.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
 ?>
