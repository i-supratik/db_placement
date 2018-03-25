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
	font-size: 50px;
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
      	<p><span class="iiit-head">Placement Cell</span> <br/>
      	<div class="IIIT">International Institute of Information Technology</div>
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
 
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="admin_home.php">
            <i class="fa fa-th"></i> <span>HOME</span>
            <span class="pull-right-container">
             <!-- <small class="label pull-right bg-green">new</small>-->
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="noticeboard.php">
            <i class="fa fa-dashboard"></i> <span>ADD STUDENT</span>
            <span class="pull-right-container">
              <!--<i class="fa fa-angle-left pull-right"></i>-->
            </span>
          </a>
        </li>
        
          <li class="treeview">
          <a href="verify.php">
            <i class="fa fa-pie-chart"></i>
            <span>STUDENT VERIFICATION</span>
            <span class="pull-right-container">
             <!-- <i class="fa fa-angle-left pull-right"></i>-->
            </span>
          </a>
        </li>
        
        <li>
          <a href="admin_view.php">
            <i class="fa fa-th"></i> <span>VIEW</span>
            <span class="pull-right-container">
             <!-- <small class="label pull-right bg-green">new</small>-->
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="glob_news.php">
            <i class="fa fa-pie-chart"></i>
            <span>UPLOAD A NOTICE</span>
            <span class="pull-right-container">
             <!-- <i class="fa fa-angle-left pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="report.php">
            <i class="fa fa-edit"></i> <span>REPORT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
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
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        VIEW
        <small>IIIT BBSR</small>
      </h1>
     <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Default box -->
      <div class="box">
        <!--<div class="box-header with-border">
          <h3 class="box-title">Title</h3>
        </div>-->
        <div class="box-body">
          <form action="admin_view_show.php" method="get">
        	<div class="row">
	        	<div class="form-group col-lg-6 col-xs-12">
	          		<label style="padding: 10px;">ID:</label>
	          		<input type="text" id="ID" style="width: 100%;" name="rid"/>
	          	</div>
	          	<div class="form-group col-lg-6 col-xs-12">
	          		<label style="padding: 10px;">NAME:</label>
	          		<input type="text" id="NAME" style="width: 100%;" name="rname"/>
	          	</div>	
        	</div>
          	<input type="submit" class="btn btn-lg btn-primary btn-block" value="Generate" name="submit" >
          </form>
        </div>
          
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
