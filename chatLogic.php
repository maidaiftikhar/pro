<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
session_start();
include 'db_connection.php';
$classid=$_SESSION['class_ids'];
$query="SELECT * FROM `messages` WHERE class_id=$classid";
$result= mysqli_query($conn, $query);

while ($row=mysqli_fetch_assoc($result)) {
  // echo "<script>alert(".$row['message'].") </script>";
  if ($_SESSION['student_email']==$row['name']) {
    echo "<div style='background-color:lightgreen; width:250px; height:50px; margin-left:55%;margin-top:25px;margin-30px; border-radius:3px;'>";
    // echo "<p>".$row['name']."</p>";
    echo "<p style='padding-top:10px; padding-left:10px;'>".$row['message']."</p>";
    echo "</div>";
  }
  else{
  echo "<div style='background-color:white; width:250px; margin-left:10%;margin-top:25px;margin-30px; border-radius:3px;'>";
  echo "<p>".$row['name']."</p>";
  echo "<p>".$row['message']."</p>";
  echo "</div>";
}
}

 ?>
  </body>
</html>
