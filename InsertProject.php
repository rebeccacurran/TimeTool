<?php
$con = mysqli_connect("23.229.191.132", "patrickkill", "ilwp2000","TimeTool");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$ProjectID = mysqli_real_escape_string($con, $_POST['ProjectID']);
$ProjectName = mysqli_real_escape_string($con, $_POST['ProjectName']);
$ProjectDesc = mysqli_real_escape_string($con, $_POST['ProjectDescription']);
$Show = mysqli_real_escape_string($con, $_POST['HomeScreen']);
$result = mysqli_query($con,"SELECT * FROM coffeeTable");

$sql="INSERT INTO ProjectTableAll (ProjectID, ProjectName, ProjectDescription, HomeScreen )
VALUES ('$ProjectID', '$ProjectName', '$ProjectDesc', '$Show')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

if ($_POST['param'] == 'page1' )
    readfile('page1.html');
else
    readfile('other.html');
?>
