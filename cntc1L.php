<?php
session_start();

if (isset($_POST['comment'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$message=$_POST['message'];

	$conn=mysqli_connect('localhost','root','','student_portal');
	$query="INSERT INTO `contact`(`name`, `email`, `country`, `message`) VALUES ('$name','$email','$country','$message')";
	$result=mysqli_query($conn,$query);
	if($result){
		header('location:studenthome.php');
	}
}


 ?>