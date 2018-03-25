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
  	padding-left: 110px; 
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
        ABOUT
        <small>IIIT BBSR</small>
      </h1>
     <div style="font-size:120%;">
         <h3>
             <p>IIIT Bhubaneswar owes its origins to the initiative of the Government Odisha. It is a result of the desire of the Government to establish a world class institute of Information Technology in the state. The Institute has been registered as a society in Nov 2006. In January 2014, the Institute is converted to a University by the Government of Odisha.
			</p>
         
          
			<p>
			There is misconception that IIIT Bhubaneswar is a Institute promoted in PPP mode by the Government. The Institute is fully owned by the Government of Odisha. The Information Technology Department is the controlling Department. The Government provides funds for the Infrastructure creation. However, the Institute has to earn its Revenue Expenditure. This is the model in all State Government promoted IIITs in Bangalore, Hyderabad and Delhi. The Institute enjoys academic, financial and administrative autonomy by the powers invested through the IIIT Bhubaneswar act. IIIT aspires to be a national Institute in line with its Peer Institutes.
			</p>
			<p>
			The Governance structure of the Institute is modelled after those of the IITs. The Governor of the state is the Chancellor of the Institute. The Board of Governors has members from Odisha Legislative Assembly, Government of Odisha, Leaders from the IT industry and Eminent educationists. Currently, the Chairman of the Institute is the Chief Secretary of the Government of Odisha. The Director is the Executive Head of the Institute. The Director is assisted by the Registrar, the Deans, the Controller of examinations and the Comptroller of finance in day-to-day management of the Institute.
			</p>
			<p>
			The Institute has its focus on quality and rigorous education, quality resource, academic infrastructure, technology and innovation. These initiatives have helped IIIT-Bhubaneswar achieve pre-eminence in India and beyond. 
			</p>
             </h3>
		</div>
     <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class>
      
      <!-- Default box -->
      <div class="box">
        <!--<div class="box-header with-border">
          <h3 class="box-title">Title</h3>
        </div>--
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
    
    <strong>GRSS systems</strong> All rights
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
