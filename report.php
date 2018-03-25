<?php
ob_start();
  session_start();
  if(empty($_SESSION["session_id"]))
  {
    header("location:login1.php");
    exit(0);
  }
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      .iiit-head{
  	padding-left: 500px; 
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-size: 50px;
	color:#fff;	
	}
      .IIIT{
	padding: 40px;
    padding-left: 120px; 

	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-size: 50px;
	color:#fff;
	}
  .head{
      font-weight: bold;
      text-align: center;
      padding-bottom: 10%;
      text-decoration: underline;
      font-family: aerial;
  }
    .text{
    font-size: 140%;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;

  }
  .border{
    border-bottom: ridge;
    border-radius: 10px;
    border-spacing:10px;
    border-color:  #fff;
    border-top: ridge;
      margin-bottom: 20px;
  }
  .deco{
    text-decoration: none;
    color:#000099
;
  }
  .deco:hover{
    text-decoration: none;
    color:#000099;
  }
  .border:hover{
    box-shadow: 0 4px 5px 0;
  }
   @media screen and (max-width: 767px){
    .text{
       font-size: 100%;
    }
    .head{
      font-size: 150%;
      padding-bottom: 1.5%;
    }
   }
  </style>
    <div style="background-color:#00ace6">
     <header>
        <p><span class="iiit-head">REPORT GENERATION</span> <br/>
      	<div class="IIIT">International Institute of Information Technology Bhubaneswar</div>
    </p>
    </header>
    </div>
   
</head>
<body>
  <div class="container-fluid">
<?php 
$servername = "localhost";
$username = "root";
$password = '';
$dbnme = "placementDB";
$conn = new mysqli($servername, $username, $password, $dbnme);
if ($conn->connect_error)
{
	die("Connection error : " . $conn->connect_error);
}
?>
    <!--Row for query one-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">1. 10th and 12th marks more than x
</p>
      </div>
      <div class="col-sm-2">
         <a class="deco" href="report_show.php?reportid=1"><button type="button" id='1' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
  <!--Row for query two-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">2. Student belongs to x branch</p> 
      </div>
      <div class="col-sm-2">
         <a class="deco" href="report_show.php?reportid=2"><button type="button" id='2' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
    </div>
  </div>
  <!--Row for query three-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">3. CGPA more than x </p>
      </div>
      <div class="col-sm-2">
         <a class="deco" href="report_show.php?reportid=3"><button type="button" id='3' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
  <!--Row for query four-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">4. Students with x no. of internships and trainings</p>
      </div>
      <div class="col-sm-2">
         <a class="deco" href="report_show.php?reportid=4"><button type="button" id='4' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
  <!--Row for query five-->

    </div>
  <!--Row for query six-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">6. Students whose details have not been verified</p>
      </div>
      <div class="col-sm-2">
        <a class="deco" href="report_show.php?reportid=6"><button type="button" id='6' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
      <!--Row for query seven-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">7. Students placed in company x</p>
      </div>
      <div class="col-sm-2">
       <a class="deco" href="report_show.php?reportid=7"><button type="button" id='7' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
      <!--Row for query eight-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">8. Students placed in location x</p>
      </div>
      <div class="col-sm-2">
       <a class="deco" href="report_show.php?reportid=8"><button type="button" id='8' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
      <!--Row for query nine-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">9. Companies offering Package more than x LPA</p>
      </div>
      <div class="col-sm-2">
       <a class="deco" href="report_show.php?reportid=9"><button type="button" id='9' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
      <!--Row for query ten-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">10. Students with CTC more than x LPA</p>
      </div>
      <div class="col-sm-2">
       <a class="deco" href="report_show.php?reportid=10"><button type="button" id='10' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
      <!--Row for query eleven-->
    <div class="row border">
      <div class="col-sm-10">
       <p class="text">11. Students placed in the CTC range x to y</p>
      </div>
      <div class="col-sm-2">
       <a class="deco" href="report_show.php?reportid=11"><button type="button" id='11' class="btn btn-md" style="background-color: #008080; color:#000;">Generate</button></a>
      </div>
    </div>
</div>
</body>
</html>

