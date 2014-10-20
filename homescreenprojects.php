<?php

$con = mysqli_connect("23.229.191.132", "patrickkill", "ilwp2000","TimeTool");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"TimeTool");
$sql="SELECT ProjectID,ProjectName,TaskName,ProjectDate,ProjectMinutes FROM ProjectTableAll";
// "WHERE USERID = @User AND ProjectDate @Date AND HomeScreen = 1"
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ProjectName'] . "</td>";
  echo "<td>" . $row['TaskName'] . "</td>";
  echo "<td>" . $row['ProjectMinutes'] . "</td>";
  echo "</tr>";
}

mysqli_close($con);

?>