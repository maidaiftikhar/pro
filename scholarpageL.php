<?php
session_start();
if (isset($_POST['submit'])) {
	$sname=$_POST['name'];
	$url=$_POST['url'];
	echo $sname;
	echo $url;

	$conn=mysqli_connect('localhost','root','','student_portal');
	$query="INSERT INTO `scholarship`(`name`, `url`) VALUES ('$sname','$url')";
	$result=mysqli_query($conn, $query);
	if ($result) {
		header('location:scholarpage.php');
	}
	else{
		// echo "<script>alert('hello')</script>";
	}
}

if (isset($_GET['id'])) {
	$rowid=$_GET['id'];
	$con1=mysqli_connect('localhost','root','','student_portal');
$query2="DELETE FROM `scholarship` WHERE id='$rowid'";
$hit=mysqli_query($con1,$query2);
if ($hit) {
	header('location:scholarpage.php');
}

}



 ?>
