<?php 
ob_start();
session_start(); 
if(empty($_SESSION['session_id']))
{
    header("location:login1.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Placement Cell IIIT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../placementcell/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../placementcell/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../placementcell/css/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  	.iiit-head{
  	padding-left: 150px; 
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-size: 40px;
	color:#ffe6e6;	
	}
	.IIIT{
	padding: 10px;
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-size: 35px;
	color:#ffe6e6;
	}
  </style>
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
  
 		<a href="http://www.iiit-bh.ac.in/" class="logo">
 		<img src="pics/IIIT_Bhubaneswar_Logo.png" alt="IIIT LOGO" style="width:200px;height:200px;"/>
		<!--  mini logo for sidebar mini 50x50 pixels 
      <span class="logo-mini"><b>A</b>LT</span>
      logo for regular state and mobile devices
      <span class="logo-lg"><b>Admin</b>LTE</span>-->
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      
      <div>
      	<p><span class="iiit-head">Placement Database Management System</span> <br/>
      	<div class="IIIT">International Institute of Information Technology Bhubaneswar</div>
      	</p>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      <!--  <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>-->
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="home.php">
           <i class="fa fa-dashboard"></i> <span>HOME</span>
            <span class="pull-right-container">
              <!--<i class="fa fa-angle-left pull-right"></i>-->
            </span>  
          </a>
        </li>
        <li class="treeview">
          <a href="Student_form.php">
            <i class="fa fa-dashboard"></i> <span>UPDATE Details</span>
            <span class="pull-right-container">
              <!--<i class="fa fa-angle-left pull-right"></i>-->
            </span>
          </a>
        </li>
        
          <li class="treeview">
          <a href="profile.php">
            <i class="fa fa-pie-chart"></i>
            <span>VIEW Details</span>
            <span class="pull-right-container">
             <!-- <i class="fa fa-angle-left pull-right"></i>-->
            </span>
          </a>
        </li>
        
        <li>
          <a href="member_lists.php">
            <i class="fa fa-th"></i> <span>UPLOAD Documents</span>
            <span class="pull-right-container">
             <!-- <small class="label pull-right bg-green">new</small>-->
            </span>
          </a>
        </li>
          <li class="treeview">
          <a href="changepassword.php">
            <i class="fa fa-pie-chart"></i>
              <span>CHANGE PASSWORD</span>
            <span class="pull-right-container">
             <!-- <i class="fa fa-angle-left pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="logout.php">
            <i class="fa fa-pie-chart"></i>
            
              <span>LOGOUT</span>
            <span class="pull-right-container">
             <!-- <i class="fa fa-angle-left pull-right"></i>-->
            </span>
          </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>IIIT BBSR</small>
      </h1>
     <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section>
      <?php 
include "connect.php";
        $sql1="SELECT FIRST_NAME FROM student WHERE SID='$_SESSION[session_id]'";
        $res1=$conn->query($sql1);
        $row1=$res1->fetch_assoc();
        
        $sql2="SELECT MIDDLE_NAME FROM student WHERE SID='$_SESSION[session_id]'";
        $res2=$conn->query($sql2);
        $row2=$res2->fetch_assoc();
        

        $sql3="SELECT LAST_NAME FROM student WHERE SID='$_SESSION[session_id]'";
        $res3=$conn->query($sql3);
        $row3=$res3->fetch_assoc();
        
        
        $sql4="SELECT PHONE_NUMBER FROM student WHERE SID='$_SESSION[session_id]'";
        $res4=$conn->query($sql4);
        $row4=$res4->fetch_assoc();
        
        
        $sql5="SELECT DOB FROM student WHERE SID='$_SESSION[session_id]'";
        $res5=$conn->query($sql5);
        $row5=$res5->fetch_assoc();
        
        $sql6="SELECT EMAIL_ID FROM student WHERE SID='$_SESSION[session_id]'";
        $res6=$conn->query($sql6);
        $row6=$res6->fetch_assoc();
        
        $sql7="SELECT AADHAR_NUMBER FROM student WHERE SID='$_SESSION[session_id]'";
        $res7=$conn->query($sql7);
        $row7=$res7->fetch_assoc();
        
        $sql8="SELECT Alt_email_Id FROM student WHERE SID='$_SESSION[session_id]'";
        $res8=$conn->query($sql8);
        $row8=$res8->fetch_assoc();
        
        $sql9="SELECT ADDRESS FROM student WHERE SID='$_SESSION[session_id]'";
        $res9=$conn->query($sql9);
        $row9=$res9->fetch_assoc();
        
        $sql10="SELECT POSTAL_CODE FROM student WHERE SID='$_SESSION[session_id]'";
        $res10=$conn->query($sql10);
        $row10=$res10->fetch_assoc();
        
        $sql11="SELECT FATHER_NAME FROM parent_information WHERE SID='$_SESSION[session_id]'";
        $res11=$conn->query($sql11);
        $row11=$res11->fetch_assoc();
        
        $sql12="SELECT MOTHER_NAME FROM parent_information WHERE SID='$_SESSION[session_id]'";
        $res12=$conn->query($sql12);
        $row12=$res12->fetch_assoc();
        

        $sql13="SELECT FATHER_OCCUPATION FROM parent_information WHERE SID='$_SESSION[session_id]'";
        $res13=$conn->query($sql13);
        $row13=$res13->fetch_assoc();
        
        
        $sql14="SELECT MOTHER_OCCUPATION FROM parent_information WHERE SID='$_SESSION[session_id]'";
        $res14=$conn->query($sql14);
        $row14=$res14->fetch_assoc();
        
        
        $sql15="SELECT F_PHONE_NUMBER FROM parent_information WHERE SID='$_SESSION[session_id]'";
        $res15=$conn->query($sql15);
        $row15=$res15->fetch_assoc();
        
        $sql16="SELECT M_PHONE_NUMBER FROM parent_information WHERE SID='$_SESSION[session_id]'";
        $res16=$conn->query($sql16);
        $row16=$res16->fetch_assoc();
        
        $sql17="SELECT F_EMAIL_ID FROM parent_information WHERE SID='$_SESSION[session_id]'";
        $res17=$conn->query($sql17);
        $row17=$res17->fetch_assoc();
        
        $sql18="SELECT M_EMAIL_ID FROM parent_information WHERE SID='$_SESSION[session_id]'";
        $res18=$conn->query($sql18);
        $row18=$res18->fetch_assoc();
        
        $sql21="SELECT SCHOOL FROM xth WHERE SID='$_SESSION[session_id]'";
        $res21=$conn->query($sql21);
        $row21=$res21->fetch_assoc();
        
        $sql22="SELECT BOARD FROM xth WHERE SID='$_SESSION[session_id]'";
        $res22=$conn->query($sql22);
        $row22=$res22->fetch_assoc();
        

        $sql23="SELECT PERCENTAGE FROM xth WHERE SID='$_SESSION[session_id]'";
        $res23=$conn->query($sql23);
        $row23=$res23->fetch_assoc();
        
        
        $sql24="SELECT YEAR_OF_PASSING FROM xth WHERE SID='$_SESSION[session_id]'";
        $res24=$conn->query($sql24);
        $row24=$res24->fetch_assoc();
        
        
        $sql25="SELECT SCHOOL FROM xiith WHERE SID='$_SESSION[session_id]'";
        $res5=$conn->query($sql5);
        $row5=$res5->fetch_assoc();
        
        $sql26="SELECT BOARD FROM xiith WHERE SID='$_SESSION[session_id]'";
        $res26=$conn->query($sql26);
        $row26=$res26->fetch_assoc();
        
        $sql27="SELECT PERCENTAGE FROM xiith WHERE SID='$_SESSION[session_id]'";
        $res27=$conn->query($sql27);
        $row27=$res27->fetch_assoc();
        
        $sql28="SELECT YEAR_OF_PASSING FROM xiith WHERE SID='$_SESSION[session_id]'";
        $res28=$conn->query($sql28);
        $row28=$res28->fetch_assoc();
        
        $sql29="SELECT COLLEGE FROM diploma WHERE SID='$_SESSION[session_id]'";
        $res29=$conn->query($sql29);
        $row29=$res29->fetch_assoc();
        
        $sql30="SELECT BOARD FROM diploma WHERE SID='$_SESSION[session_id]'";
        $res30=$conn->query($sql30);
        $row30=$res30->fetch_assoc();
        

        $sql31="SELECT PERCENTAGE FROM diploma WHERE SID='$_SESSION[session_id]'";
        $res31=$conn->query($sql31);
        $row31=$res31->fetch_assoc();
        
        
        $sql32="SELECT YEAR_OF_PASSING FROM diploma WHERE SID='$_SESSION[session_id]'";
        $res32=$conn->query($sql32);
        $row32=$res32->fetch_assoc();
        
        
        $sql33="SELECT COLLEGE FROM undergraduation WHERE SID='$_SESSION[session_id]'";
        $res33=$conn->query($sql33);
        $row33=$res33->fetch_assoc();
        
        $sql34="SELECT BRANCH FROM undergraduation WHERE SID='$_SESSION[session_id]'";
        $res34=$conn->query($sql34);
        $row34=$res34->fetch_assoc();
        
        $sql35="SELECT CGPA FROM undergraduation WHERE SID='$_SESSION[session_id]'";
        $res35=$conn->query($sql35);
        $row35=$res35->fetch_assoc();
        
        $sql36="SELECT YEAR_OF_PASSING FROM undergraduation WHERE SID='$_SESSION[session_id]'";
        $res36=$conn->query($sql36);
        $row36=$res36->fetch_assoc();
        
        $sql41="SELECT INTERNSHIP_PROJECT FROM internship WHERE SID='$_SESSION[session_id]'";
        $res41=$conn->query($sql41);
        $row41=$res41->fetch_assoc();
        
        $sql42="SELECT COMPANY_INSTITUTION FROM internship WHERE SID='$_SESSION[session_id]'";
        $res42=$conn->query($sql42);
        $row42=$res42->fetch_assoc();
        
        $sql43="SELECT DURATION FROM internship WHERE SID='$_SESSION[session_id]'";
        $res43=$conn->query($sql43);
        $row43=$res43->fetch_assoc();
        
        ?>
      <!-- Default box -->
      	<div class="box">
      		<div class="row">
      			<div class="col-s-12 col-lg-6">
	      			<div>
	      				<label>Name : <?php echo $row1['FIRST_NAME'] ?> <?php echo $row2['MIDDLE_NAME'] ?> <?php echo $row3['LAST_NAME'] ?></label>
	      			</div>
	      			<div>
	      				<label>Email : <?php echo $row6['EMAIL_ID'] ?></label>
	      			</div>
	      			<div>
	      				<label>Phone no. : <?php echo $row4['PHONE_NUMBER'] ?></label>
	      			</div>
	      			<div>
	      				<label>City : </label>
	      			</div>
                    <div>
	      				<label>Postal code : <?php echo $row10['POSTAL_CODE'] ?></label>
	      			</div>
      			</div>
      			<div class="=col-s-12 col-lg-6">
      				<div>
      					<label>Date Of Birth : <?php echo $row5['DOB'] ?></label>
	      			</div>
	      			<div>
	      				<label>Alt. Email : <?php echo $row8['Alt_email_Id'] ?></label>
	      			</div>
	      			<div>
	      				<label>Address : <?php echo $row9['ADDRESS'] ?></label>
	      			</div>
                    <div>
	      				<label>state : </label>
	      			</div>
	      			
	      			
	      		</div>
                
      		</div>
      		<div class="row">
      			<div class="col-s-12 col-lg-6">
	      			<div>
	      				<label>Father's Name : <?php echo $row11['FATHER_NAME'] ?></label>
	      			</div>
	      			<div>
	      				<label>Father's Email : <?php echo $row17['F_EMAIL_ID'] ?></label>
	      			</div>
	      			<div>
	      				<label>Father's Phone no. : <?php echo $row15['F_PHONE_NUMBER'] ?></label>
	      			</div>
	      			
	      		</div>
	      	
	      		<div class="=col-s-12 col-lg-6">
	      			<div>
	      				<label>Mother's Name : <?php echo $row12['MOTHER_NAME'] ?></label>
	      			</div>
	      			<div>
	      				<label>Mother's Email : <?php echo $row18['M_EMAIL_ID'] ?></label>
	      			</div>
	      			<div>
	      				<label>Mother's Phone no. : <?php echo $row16['M_PHONE_NUMBER'] ?></label>
	      			</div>
	      		</div>
      		</div>
            <div class="row">
      			<div class="col-s-12 col-lg-6">
	      			<div><label>10th percentage : <?php echo $row23['PERCENTAGE'] ?></label></div>
                    <div><label>12th percentage : <?php echo $row27['PERCENTAGE'] ?></label></div>
	      		</div>
	      	
	      		<div class="=col-s-12 col-lg-6">
	      			<div><label>Branch : <?php echo $row34['BRANCH'] ?></label></div>
                    <div><label>CGPA : <?php echo $row35['CGPA'] ?></label></div>
	      		</div>
      		</div>
            
            
            
            
            
            
            
            
            
		</div>
      <!-- /.box -->
      <div>
      	<a href="Student_form.php" class="btn btn-primary">UPDATE PROFILE</a>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright GRSS Systems</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<!-- ./wrapper -->
</div>
<!-- jQuery 2.2.3 -->
<script src="plugins/jquery-2.2.3.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../placementcell/plugins/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../placementcell/plugins/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../placementcell/dist/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../placementcell/dist/demo.js"></script>
</body>
</html>
