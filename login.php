
<?php
ob_start();
session_start();
include "connect.php";
if(isset($_REQUEST["submit"]))
{
    $sid = $_REQUEST['userid'];
    $_SESSION["session_id"]=$sid;
    $password = $_REQUEST['password'];
    $sql1="SELECT Password FROM student WHERE SID='$sid'";
    $res1=$conn->query($sql1);
    $row1=$res1->fetch_assoc();
    $sql2="SELECT password FROM admin WHERE aid='$sid'";
    $res2=$conn->query($sql2);
    $row2=$res2->fetch_assoc();
    if($row1['Password'] === $password)
    {
        if($password === "changeme")
            header("location:changepassword.php");
        else
            header("location:verrnot.php");
    }
    else if($row2['password'] === $password)
    {
        if($password === "superman")
            header("location:changepasswordadmin.php");
        else
            header("location:admin_home.php");
    }
    else
    {
        $_SESSION['incpass']=1;
        header("location:login1.php");
    }
}
 ?>
