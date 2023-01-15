
<?php
require('connect.php');

$EmployeeID   = $_REQUEST['EmployeeID'];
$Title		  = $_REQUEST['Title'];
$Name		  = $_REQUEST['Name'];
$Sex		  = $_REQUEST['Sex'];
$Education	  = $_REQUEST['Education'];
$Start_Date	  = $_REQUEST['Start_Date'];
$Salary		  = $_REQUEST['Salary'];
$DepartmentID = $_REQUEST['DepartmentID'];

$sql = "
	INSERT INTO employee
	VALUES ('$EmployeeID','$Title','$Name','$Sex','$Education','$Start_Date','$Salary','$DepartmentID');
	";


?> 