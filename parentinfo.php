<?php
ob_start();
session_start();
include "connect.php";
if(isset($_REQUEST["submit"]))
{
$fname = $_REQUEST['fname'];


$mname = $_REQUEST['mname'];



$focp = $_REQUEST['focp'];



$mocp = $_REQUEST['mocp'];



$fphone = $_REQUEST['fphone'];



$mphone = $_REQUEST['mphone'];


$fmail = $_REQUEST['fmail'];

$mmail = $_REQUEST['mmail'];

$sql = "UPDATE parent_information SET FATHER_NAME='$fname',MOTHER_NAME='$mname',FATHER_OCCUPATION='$focp',F_PHONE_NUMBER='$fphone',MOTHER_OCCUPATION='$mocp',M_PHONE_NUMBER='$mphone',F_EMAIL_ID='$fmail',M_EMAIL_ID='$mmail' WHERE SID='$sid'" ;

if ($conn->query($sql) === TRUE) {
    header("location:Academic_form.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
 ?>
