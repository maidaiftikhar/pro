<?php
session_start();
$teacheremail=$_SESSION['teacher_email'];
include('db_connection.php');
if (isset($_POST['create'])) {
  $classname= mysqli_real_escape_string($conn,$_POST['classname']);
  $class_key= mysqli_real_escape_string($conn,$_POST['classkey']);
   // $class_key= mysqli_real_escape_string($conn,$_POST['subject']);
    //......
 $subject= mysqli_real_escape_string($conn,$_POST['subject']);


  // $random=(rand(100000,999999));
  // echo $random;
  // echo $classname;
  // echo $teacheremail;
 $query="INSERT INTO `classes`(`unique_id`, `teacher_email`, `class_name`, `subject`) VALUES ('$class_key','$teacheremail','$classname','$subject')";
 $result=mysqli_query($conn,$query);
 if ($result) {
header('location: teacherhome.php');
 }
 else {
   echo "unsuccess";
 }

}
mysqli_close($conn);
 ?>
<?php



 ?>
