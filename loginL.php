
<?php
session_start();

$username = "";
// $email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_portal');

if (isset($_POST['login_student'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM students WHERE student_email='$email' AND student_password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['student_email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: studenthome.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>