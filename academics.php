<?php 
ob_start();
session_start();
include "connect.php";
$flag=0;
if(isset($_REQUEST["submit"]))
{
$xschool = $_REQUEST['xschool'];


$xboard = $_REQUEST['xboard'];



$xpcent = $_REQUEST['xpcent'];



$xyop = $_REQUEST['xyop'];



$xiischool = $_REQUEST['xiischool'];


$xiiboard = $_REQUEST['xiiboard'];



$xiipcent = $_REQUEST['xiipcent'];



$xiiyop = $_REQUEST['xiiyop'];
    
$dschool = $_REQUEST['dschool'];

$dboard = $_REQUEST['dboard'];
    
$dpcent = $_REQUEST['dpcent'];
    
$dyop = $_REQUEST['dyop'];
    
$college = $_REQUEST['college'];

$branch = $_REQUEST['branch'];


$cgpa = $_REQUEST['cgpa'];


$uyop = $_REQUEST['uyop'];

$sql1 = "UPDATE xth SET SCHOOL='$xschool',BOARD='$xboard',PERCENTAGE='$xiipcent',YEAR_OF_PASSING='$xiiyop' WHERE SID='$sid'";

$sql2 = "UPDATE xiith SET SCHOOL='$xiischool',BOARD='$xiiboard',PERCENTAGE='$xpcent',YEAR_OF_PASSING='$xyop' WHERE SID='$sid'";

$sql3 = "UPDATE diploma SET COLLEGE='$dschool',BOARD='$dboard',PERCENTAGE='$dpcent',YEAR_OF_PASSING='$dyop' WHERE SID='$sid'";
    
$sql4 = "UPDATE undergraduation SET COLLEGE ='$college',BRANCH='$branch',CGPA='$cgpa',YEAR_OF_PASSING='$uyop' WHERE SID='$sid'";

if ($conn->query($sql1) === TRUE) {
    $flag++; 
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    $flag++;
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
    $flag++;
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}
if ($conn->query($sql4) === TRUE) {
    $flag++;
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}
if($flag==4)
{
    header("location:internship.php");
}
    else
    {
        header("location:Academic_form.php");
    }
}
 ?>
