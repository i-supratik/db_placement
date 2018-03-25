<?php
ob_start();
  session_start();
  if(empty($_SESSION["session_id"]))
  {
    header("location:login1.php");
    exit(0);
  }
?>


<?php
include "connect.php";
$oper = $_REQUEST['oper'];


if($oper == "percentage")
{

	$rpcent = $_POST['rpcent'];
	if($rpcent)
	{
		$sqlquery = "SELECT s.SID, CONCAT(s.FIRST_NAME,s.MIDDLE_NAME, s.LAST_NAME ) AS Name
   FROM student s,xth a,xiith b
   WHERE s.SID = a.SID AND s.SID=b.SID AND a.PERCENTAGE>=$rpcent AND b.PERCENTAGE>=$rpcent ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	 	if($rowCount > 0)
	 	{
	 		echo "<table>";
	 		echo "<tr>
	 		<th>SID</th>
	 		<th>Name</th>
	 		</tr>";
			while($row =$res->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>" .$row['SID'] ."</td>";
				echo "<td>" .$row['Name'] ."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
}
else if($oper == "branch")
{
	$rbranch = $_POST['rbranch'];
	if($rbranch)
	{
		$sqlquery = "SELECT s.SID, s.FIRST_NAME  FROM student s,undergraduation u
   WHERE s.SID=u.SID AND u.BRANCH=$rbranch ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;

	 	if($rowCount > 0)
	 	{
	 		echo "<table>";
	 		echo "<tr>
	 		<th>SID</th>
	 		<th>Name</th>
	 		</tr>";
			while($row =$res->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>" .$row['SID'] ."</td>";
				echo "<td>" .$row['FIRST_NAME'] ."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
}
else if($oper == "cgpa")
{
	$rcgpa = $_POST['rcgpa'];
	if($rcgpa)
	{
		$sqlquery = "SELECT s.SID, s.FIRST_NAME
   FROM student s,undergraduation u
   WHERE s.SID = u.SID AND u.CGPA>=$rcgpa
 ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	 	if($rowCount > 0)
	 	{
	 		echo "<table>";
	 		echo "<tr>
	 		<th>SID</th>
	 		<th>Name</th>
	 		</tr>";
			while($row =$res->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>" .$row['SID'] ."</td>";
				echo "<td>" .$row['FIRST_NAME'] ."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
}
else if($oper == "internship")
{
	$rintern = $_POST['rintern'];
	if($rintern)
	{
		$sqlquery = "SELECT s.SID, (s.FIRST_NAME | s.MIDDLE_NAME | s.LAST_NAME ) AS s.Name 
   FROM student s,internship i
   WHERE s.SID=i.SID AND WHERE i.SID IS NOT NULL ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	 	if($rowCount > 0)
	 	{
	 		echo "<table>";
	 		echo "<tr>
	 		<th>SID</th>
	 		<th>Name</th>
	 		</tr>";
			while($row =$res->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>" .$row['SID'] ."</td>";
				echo "<td>" .$row['FIRST_NAME'] ."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
}

else if($oper == "unverified")
{
	
	$sqlquery = "SELECT SID FROM student
	 			WHERE verified ='no' ";
	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	if($rowCount > 0)
	 	{
	 		echo "<table>";
	 		echo "<tr>
	 		<th>SID</th>
	 		</tr>";
			while($row =$res->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>" .$row['SID'] ."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
}
else if($oper == "company")
{
	$rcompany = $_POST['rcompany'];
	if($rcompany)
	{		
        $sqlquery = "SELECT COUNT(SID) AS CNT
   FROM Student
   JOIN Company
   ON Student.SID = Company.SID
   WHERE COMPANY_NAME = $rcompany ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	   if($rowCount > 0)
	 	{
	 		echo "the no of students placed in ".$rcompany ."is ". $row['CNT'];
	 		
		}
	}
}
else if($oper == "location")
{
	$rlocation = $_POST['rlocation'];
	if($rlocation)
	{
		$sqlquery = "SELECT SID, (FIRST_NAME | MIDDLE_NAME | LAST_NAME ) AS Name
   FROM Student
   JOIN Company
   ON Student.SID = Company.SID 
   WHERE LOCATION = $rlocation ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	   if($rowCount > 0)
	 	{
	 		echo "<table>";
	 		echo "<tr>
	 		<th>SID</th>
	 		<th>Name</th>
	 		</tr>";
			while($row =$res->fetch_assoc()) 
			{
				echo "<tr>";
				echo "<td>" .$row['SID'] ."</td>";
				echo "<td>" .$row['Name'] ."</td>";
				echo "</tr>";
			}
		}
	}
}
else if($oper == "package")
{
	$rpackage = $_POST['rpackage'];
	if($rpackage)
	{
		$sqlquery = "SELECT COMPANY_NAME 
   FROM Company 
   WHERE CTC > $rpackage ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	   if($rowCount > 0)
	 	{
	 		echo "<table>";
	 		echo "<tr>
	 		<th>COMPANY_NAME</th>
	 		</tr>";
			while($row =$res->fetch_assoc()) 
			{
				echo "<td>". $row["COMPANY_NAME"] . "</td>";
			}
		}
	}
} 
else if($oper == "CTC")
{
	$rctc = $_POST['rctc'];
	if($rctc)
	{
		$sqlquery = "SELECT SID, (FIRST_NAME | MIDDLE_NAME | LAST_NAME ) AS Name
   FROM Student
   JOIN Company
   ON Student.SID = Company.SID 
   WHERE Company.CTC >= $rctc ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	   if($rowCount > 0)
	 	{
			echo "<table>";
	 		echo "<tr>
	 		<th>SID</th>
	 		<th>Name</th>
	 		</tr>";
			while($row =$res->fetch_assoc()) 
			{
				echo "<tr>";
				echo "<td>" .$row['SID'] ."</td>";
				echo "<td>" .$row['Name'] ."</td>";
				echo "</tr>";
			}
       }
	}
} 
else if($oper == "CTCrange")
{
	$rfrmctc = $_POST['rfrmctc'];
	$rtoctc = $_POST['rtoctc'];
	if($rtoctc && $rfrmctc)
	{
		$sqlquery = "SELECT SID, (FIRST_NAME | MIDDLE_NAME | LAST_NAME ) AS Name
   FROM Student 
   JOIN Company 
   ON Student.SID = Company.SID 
   WHERE CTC > $rfrmctc AND CTC < $rtoctc ";
	 	$res=$conn->query($sqlquery);
	 	$row =$res->fetch_assoc();
        $rowCount = $res->num_rows;
	   if($rowCount > 0)
	 	{
	 		echo "<table>";
	 		echo "<tr>
	 		<th>SID</th>
	 		<th>Name</th>
	 		</tr>";
			while($row =$res->fetch_assoc()) 
			{
				echo "<tr>";
				echo "<td>" .$row['SID'] ."</td>";
				echo "<td>" .$row['Name'] ."</td>";
				echo "</tr>";
			}
		}
	}
}        
?>