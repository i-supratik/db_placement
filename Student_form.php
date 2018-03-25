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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
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
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Personal Information
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
        
        ?>
      <!-- Default box -->
      <div class="box">
        <!--<div class="box-header with-border">
          <h3 class="box-title">Title</h3>
        </div>-->
        <form action="studentinfo.php" method="get">
        	<div class="box-body row">
          		<div class="col-xs-6">
		          	<div class="form-group">
		            	<label>First Name</label>
		            	<input class="form-control" placeholder="First Name" type="text" id="Fname" name ="fname" required value="<?php echo $row1['FIRST_NAME'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Middle Name</label>
		            	<input class="form-control" placeholder="middle Name" type="text" id="Mname" name ="mname" value="<?php echo $row2['MIDDLE_NAME'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Date of Birth</label>
		            	<input class="form-control" placeholder="DOB" type="date" id="dob" name ="dob" required value="<?php echo $row5['DOB'] ?>" >
		            </div>
		            <div class="form-group">
		            	<label>Email</label>
		            	<input class="form-control" placeholder="Email" type="email" id="Email" name ="mail" required value="<?php echo $row6['EMAIL_ID'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Alternate Email</label>
		            	<input class="form-control" placeholder="Alternate Email" type="email" id="AltEmail" name="altmail" value="<?php echo $row8['Alt_email_Id'] ?>">
		            </div>
                    
                    <?php
                    $query = $conn->query("SELECT * FROM states");
                    $st="SELECT STATE FROM student WHERE   SID='$_SESSION[session_id]'";
                    $ct="SELECT CITY FROM student WHERE   SID='$_SESSION[session_id]'";
                    $resst=$conn->query($st);
                    $resct=$conn->query($ct);
                    $rowst=$resst->fetch_assoc();
                    $rowct=$resct->fetch_assoc();
                    
//Count total number of rows
$rowCount = $query->num_rows;
?>
                    
                    
<select name="state" id="state">
    <option value="">Select State</option>
    <?php
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
            $sel = "";
            if($rowst['STATE']!=""&&$rowst['STATE']==$row['state_name'])
            {
                $sel = "selected";
            }
            echo '<option value="'.$row['state_id'].'" '.$sel.'>'.$row['state_name'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
    ?>
</select>
                    <select name="city" id="city">
    <?php
                        
                            echo '<option value="">'.$rowct['CITY'].'</option>';
                        ?>
</select>
                           

                    
                    
		          </div>
		          <!--column-->
		          <div class="col-xs-6">
		          	<div class="form-group">
		            	<label>Last Name</label>
		            	<input class="form-control" placeholder="Last Name" type="text" id="Lname" name ="lname" required value="<?php echo $row3['LAST_NAME'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Phone No.</label>
		            	<input class="form-control" placeholder="Phone No" type="tel" id="PhNo" maxlength="10" name ="phone" required value="<?php echo $row4['PHONE_NUMBER'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Aadhar No</label>
		            	<input class="form-control" placeholder="Aadhar No" type="text" id="AdNo" name ="adhar" required value="<?php echo $row7['AADHAR_NUMBER'] ?>">
		            </div>
		            <div class="form-group">
		            	<label>Address</label>
		            	 <input class="form-control" placeholder="Address" id="Address" name ="address" required value="<?php echo $row9['ADDRESS'] ?>">
		            </div>
                      <div class="form-group">
		            	<label>Postal Code</label>
		            	<input class="form-control" placeholder="Postal Code" type="text" id="PostalCode" name ="pin" required value="<?php echo $row10['POSTAL_CODE'] ?>">
		            </div>
          		</div>
        	</div>
        	<div class="row">  
        		<div class="col-sm-3"></div>
              <div class="col-sm-6">
              <!--<button type="button" class="btn-lg btn-block btn-primary" name="submit">Save</button> -->
                  <input type="submit" class="btn btn-lg btn-primary btn-block" value="submit" name="submit">
                  <br>
            </div>
            <dir class="col-sm-3"></dir>
            
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
    <strong>Copyright GRSS systems</strong> All rights
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
