
<?php
session_start();

$username = "";
// $email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_portal');

if (isset($_POST['login_teacher'])) {
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
    $query = "SELECT * FROM teachers WHERE teacher_email='$email' AND teacher_password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['teacher_email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location:hometeacher.php');
    }else {
      array_push($errors, "Wrong username/password combination");
      echo "eror";
    }
  }
}
?>