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
    .text{
    font-size: 140%;
    font-family: aerial;
    font-weight: bold;
    text-align: center;
    color: #000;

  }
  .box{
    width:100%;
    border-bottom: ridge;
    border-radius: 15px;
    border-color: #4d94ff;
    margin-bottom: 0.8%;
  }
  .head{
      font-weight: bold;
      text-align: center;
      padding-bottom: 4%;
      text-decoration: underline;
      font-family: aerial;
  }
  </style>
</head>
<body>
  <div class="container-fluid">
    <?php
include "connect.php";
        $sid=$_SESSION["session_id"];
        switch ($_REQUEST['reportid']) 
        {
          case '1':
                echo "<form action='report_calc.php?oper=percentage' method='post'>";
                echo "enter required percentage: <input type='text' id='rpcent' name ='rpcent'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '2':
                echo "<form action='report_calc.php?oper=branch' method='post'>";
                echo "enter required branch: <input type='text' id='rbranch' name ='rbranch'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '3':
                echo "<form action='report_calc.php?oper=cgpa' method='post'>";
                echo "enter required CGPA: <input type='text' id='rcgpa' name ='rcgpa'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '4':
                echo "<form action='report_calc.php?oper=internship' method='post'>";
                echo "enter required internships: <input type='text' id='rintern' name ='rintern'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '5':
                echo "<form action='report_calc.php?oper=optoutplacement' method='post'>";
                echo "students opted out of placement: <br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '6':
                echo "<form action='report_calc.php?oper=unverified' method='post'>";
                echo "Students whose details have not been verified:<br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '7':
                echo "<form action='report_calc.php?oper=company' method='post'>";
                echo "enter required company: <input type='text' id ='rcompany' name ='rcompany'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '8':
                echo "<form action='report_calc.php?oper=location' method='post'>";
                echo "enter required location: <input type='text' id='rlocation' name ='rlocation'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '9':
                echo "<form action='report_calc.php?oper=package' method='post'>";
                echo "enter required package: <input type='text' id='rpackage' name ='rpackage'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '10':
                echo "<form action='report_calc.php?oper=CTC' method='post'>";
                echo "enter required CTC: <input type='text' id='rctc' name ='rctc'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            case '11':
                echo "<form action='report_calc.php?oper=CTCrange' method='post'>";
                echo "enter required range: from <input type='text' id='rfrmctc' name ='rfrmctc'> to <input type='text' id='rtoctc' name='rtoctc'><br>";
                echo "<input type='submit' value='submit' name='submit'>";
                break;
            
           /* case '8':
            $_SESSION['reportid']=$_REQUEST['reportid'];
            echo "<div class='row box'>";
            echo "<p class='text'>Percentage of attendance of all students till a particular date.</p>";
            echo "</div>";
            echo "<div class='row'>";
            echo "<form class='form' action='report_calc.php' method='POST' target='Iframe2'>";
            echo "<div class='form-group'>";
            echo "<label>Enter Date :</label>";
            echo "<input type='date' class='form-control' name='date'>";
            echo "</div>";
            echo "<button type='submit' value='8' name='submit' class='btn btn-default'>Search</button>";
            echo "</form>";
            echo "</div>";
            break;*/
          
          default:
            # code...
            break;
        }
    ?>
    <!--<div class="row">
      <iframe src="#" width="100%" height="600px" target='_top' name="Iframe2" frameborder="0">
      </iframe>  
    </div>-->
    </div>
</body>
</html>

