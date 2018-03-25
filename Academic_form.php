<?php 
ob_start();
session_start(); 
if(empty($_SESSION['session_id']))
{
    header("location:login1.php");
}
include "connect.php";
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
  	padding-left: 300px; 
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-size: 50px;
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
     
      <div>
      	<p><span class="iiit-head">Placement Cell</span> <br/>
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
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="continer">
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Academic Information
        <small>IIIT BBSR</small>
      </h1>
     <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class>
      <?php 

        $sql1="SELECT SCHOOL FROM xth WHERE SID='$_SESSION[session_id]'";
        $res1=$conn->query($sql1);
        $row1=$res1->fetch_assoc();
        
        $sql2="SELECT BOARD FROM xth WHERE SID='$_SESSION[session_id]'";
        $res2=$conn->query($sql2);
        $row2=$res2->fetch_assoc();
        

        $sql3="SELECT PERCENTAGE FROM xth WHERE SID='$_SESSION[session_id]'";
        $res3=$conn->query($sql3);
        $row3=$res3->fetch_assoc();
        
        
        $sql4="SELECT YEAR_OF_PASSING FROM xth WHERE SID='$_SESSION[session_id]'";
        $res4=$conn->query($sql4);
        $row4=$res4->fetch_assoc();
        
        
        $sql5="SELECT SCHOOL FROM xiith WHERE SID='$_SESSION[session_id]'";
        $res5=$conn->query($sql5);
        $row5=$res5->fetch_assoc();
        
        $sql6="SELECT BOARD FROM xiith WHERE SID='$_SESSION[session_id]'";
        $res6=$conn->query($sql6);
        $row6=$res6->fetch_assoc();
        
        $sql7="SELECT PERCENTAGE FROM xiith WHERE SID='$_SESSION[session_id]'";
        $res7=$conn->query($sql7);
        $row7=$res7->fetch_assoc();
        
        $sql8="SELECT YEAR_OF_PASSING FROM xiith WHERE SID='$_SESSION[session_id]'";
        $res8=$conn->query($sql8);
        $row8=$res8->fetch_assoc();
        
        $sql9="SELECT COLLEGE FROM diploma WHERE SID='$_SESSION[session_id]'";
        $res9=$conn->query($sql9);
        $row9=$res9->fetch_assoc();
        
        $sql10="SELECT BOARD FROM diploma WHERE SID='$_SESSION[session_id]'";
        $res10=$conn->query($sql10);
        $row10=$res10->fetch_assoc();
        

        $sql11="SELECT PERCENTAGE FROM diploma WHERE SID='$_SESSION[session_id]'";
        $res11=$conn->query($sql11);
        $row11=$res11->fetch_assoc();
        
        
        $sql12="SELECT YEAR_OF_PASSING FROM diploma WHERE SID='$_SESSION[session_id]'";
        $res12=$conn->query($sql12);
        $row12=$res12->fetch_assoc();
        
        
        $sql13="SELECT COLLEGE FROM undergraduation WHERE SID='$_SESSION[session_id]'";
        $res13=$conn->query($sql13);
        $row13=$res13->fetch_assoc();
        
        $sql14="SELECT BRANCH FROM undergraduation WHERE SID='$_SESSION[session_id]'";
        $res14=$conn->query($sql14);
        $row14=$res14->fetch_assoc();
        
        $sql15="SELECT CGPA FROM undergraduation WHERE SID='$_SESSION[session_id]'";
        $res15=$conn->query($sql15);
        $row15=$res15->fetch_assoc();
        
        $sql16="SELECT YEAR_OF_PASSING FROM undergraduation WHERE SID='$_SESSION[session_id]'";
        $res16=$conn->query($sql16);
        $row16=$res16->fetch_assoc();
        
        ?>
      <!-- Default box -->
      <div class="box">
        <!--<div class="box-header with-border">
          <h3 class="box-title">Title</h3>
        </div>-->
        <form action="academics.php" method="get">
        	<div class="box-body row">
          		<div class="col-xs-6">
          			<h1>Xth</h1>
			        <div class="form-group">
		            	<label>School Name</label>
		            	<input class="form-control" placeholder="School Name" type="text" id="" name="xschool" required value="<?php echo $row1['SCHOOL'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Board</label>
		            	<input class="form-control" placeholder="Board" type="text" id="" name="xboard" required value="<?php echo $row2['BOARD'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>percentage</label>
		            	<input class="form-control" placeholder="Percentage" type="text" id="" name="xpcent" required value="<?php echo $row3['PERCENTAGE'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Year of passing </label>
		            	<input class="form-control" placeholder="Year Of passing" type="text" id="" name="xyop" required value="<?php echo $row4['YEAR_OF_PASSING'] ?>">
		            </div>
		          </div>
		          <!--column-->
		          <div class="col-xs-6">
		          	<h1>XIIth</h1>
		          	<div class="form-group">
		            	<label>School Name</label>
		            	<input class="form-control" placeholder="School Name" type="text" id="" name="xiischool" required value="<?php echo $row5['SCHOOL'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Board</label>
		            	<input class="form-control" placeholder="Board" type="text" id="" name="xiiboard" required value="<?php echo $row6['BOARD'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>percentage</label>
		            	<input class="form-control" placeholder="Percentage" type="text" id="" name="xiipcent" required value="<?php echo $row7['PERCENTAGE'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Year of passing </label>
		            	<input class="form-control" placeholder="Year Of passing" type="text" id="" name="xiiyop" required value="<?php echo $row8['YEAR_OF_PASSING'] ?>">
		            </div>
          		</div>
        	</div>
        	<div class="box-body row">
          		<div class="col-xs-6">
          			<h1>Diploma</h1>
		          	<div class="form-group">
		            	<label>School Name</label>
		            	<input class="form-control" placeholder="School Name" type="text" id="" name="dschool" value="<?php echo $row9['COLLEGE'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Board</label>
		            	<input class="form-control" placeholder="Board" type="text" id="" name="dboard" value="<?php echo $row10['BOARD'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>percentage</label>
		            	<input class="form-control" placeholder="Percentage" type="text" id="" name="dpcent" value="<?php echo $row11['PERCENTAGE'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Year of passing </label>
		            	<input class="form-control" placeholder="Year Of passing" type="text" id="" name="dyop" value="<?php echo $row12['YEAR_OF_PASSING'] ?>">
		            </div>
		          </div>
		          <!--column-->
		          <div class="col-xs-6">
		          	<h1>Under graduation</h1>
		          	<div class="form-group">
		            	<label>College Name</label>
		            	<input class="form-control" placeholder="College Name" type="text" id="" value="IIIT Bhubaneswar" name="college" required value="IIIT Bhubaneswar">
		            </div>
		            <div class="form-group">
		            	<label>Branch</label>
		            	<input class="form-control" placeholder="Branch" type="text" id="" name="branch" required value="<?php echo $row14['BRANCH'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>CGPA</label>
		            	<input class="form-control" placeholder="CGPA" type="text" id="Percent"
                        name="cgpa" required value="<?php echo $row15['CGPA'] ?>">
                        
		            </div>
		            <div class="form-group">
		            	<label>Year of passing </label>
		            	<input class="form-control" placeholder="Year Of passing" type="text" id="" name="uyop" required value="<?php echo $row16['YEAR_OF_PASSING'] ?>">
		            </div>
          		</div>
        	</div>
        	<div class="row">
        		<div class="row">  
            <div class="col-sm-3"></div>
              <div class="col-sm-6">
              <!--<button type="button" class="btn-lg btn-block btn-primary">Save</button>-->
              <input type="submit" class="btn btn-lg btn-primary btn-block" value="submit" name="submit">
                  <br>
            </div>
            <dir class="col-sm-3"></dir>
            
          </div>
        	</div>
        	
        </form>
        <!-- /.box-body -->
        <!--<div class="box-footer">
          Footer
        </div>-->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
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
