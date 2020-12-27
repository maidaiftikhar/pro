<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'student_portal');
// $_SESSION['key']=$_GET['key'];
// echo $_GET['key'];
// $key=$_GET['key'];

if (isset($_POST['submit'])) {
  $cid=$_SESSION['cid'];
 $status=0;
  for ($i=0; $i < count($_FILES["filename"]["name"]); $i++) 	{
  $filetmp = $_FILES["filename"]["tmp_name"][$i];
  $filename = $_FILES["filename"]["name"][$i];
  $filetype = $_FILES["filename"]["type"][$i];
  $filepath="testfiles/".$filename;
  move_uploaded_file($filetmp, $filepath);
  // $key='64786s0';
  // $key=$_GET['key'];
     $qry = "INSERT INTO `files`(`class_id`,`file_name`, `file_path`,`file_type`) VALUES ($cid, '$filename', '$filepath','$filetype')";
     $result = mysqli_query($conn,$qry);
      if ($result) {
        $status=1;
      
      }
     
  }

  if($status==1){
     echo "<script>alert('File is successfully uploaded...!');</script>";
  }
}
mysqli_close($conn);
?>
