<?php
  // session_start();
include 'teacherhomeL.php';
// include 'filesList.php';
  if (!isset($_SESSION['teacher_email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: teacherLogin.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: teacherLogin.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 -->

<style>

body {
  background-image: url('.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 700px;
  justify-content: center;
  }
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#51b5a4;
   color: white;
   text-align: center;
}
  .jumbotron {
    background-color: #lightblue;
    color: #fff;
    padding: 100px 25px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #lightblue;
  }
  .logo-small {
    color: #lightblue;
    font-size: 50px;
  }
  .logo {
    color: #lightblue;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e;
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #51b5a4;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #51b5a4;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #51b5a4;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    margin-top: 5px;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #51b5a4 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }

  /*starting point*/

    .dropbtn {
      background-color: #51b5a4;
      color: black;
      padding: 7px;
      font-size: 16px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      color: white;


    }
    .dropdown {
      position: relative;
       display: inline-block;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #51b5a4;
      min-width: 150px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: white;
      padding: 5px 10px;
      text-decoration: none;
      display: block;
      font-weight: bold;
    }
    .dropdown-content a:hover {
      background-color: #f1f1f1;
      color: black;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .dropdown:hover .dropbtn {
       background-color: white;
       color: black;
       border-radius: 3px;
    }
    /*ending point*/


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 3%;
  margin-top: 3%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}

tr {
  background-color: #dddddd;
}
.key{
  margin-top: 3%;
}
.p{
  margin-top: 3%;
  margin-left: 2px;
}
hr.new{
    border: 1px solid #51b5a4;
}


</style>
</head>
<body>

  <!-- navigation start -->
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="./images/logo12.jpg" style="height: 60px; width: 150px;margin-top: 0px;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar nav-pills" style="margin-left: 50px;">
             <li><a href="hometeacher.php">HOME</a></li>

        <li ><a href="scholarpage.php">SCHOLARSHIP</a></li>

           <li class="active"><a href="teacherhome.php">CLASSES</a></li>


        <li><a href="aboutusteacher.php">ABOUT</a></li>
      </ul>

      <div class="navbar-nav ml-auto" style="margin-top:13px; margin-left: 25%; ">
        <div class="dropdown">
          <button class="dropbtn"><?php echo $_SESSION['teacher_email']; ?>&nbsp <span class="glyphicon glyphicon-chevron-down"></span></button>
          <div class="dropdown-content">

            
            <a href="teacherhome.php?logout='1'">Logout</a>
          </div>
        </div>
      </div>

    </div>
</nav>
<!-- navigation end -->

<br>
<br>
<div class="p">
  <h3>&nbsp About this page</h3>
<p>&nbsp &nbsp This page shows the classes .To create a new class, enter the class name, subject name and class key and click on create button  </p>
</div>
<div class="key">
 <form method="post" action="teacherhome.php" enctype="multipart/form-data">

     <label>&nbsp&nbsp&nbsp Class Name</label>
     &nbsp&nbsp&nbsp
     <input type="text" name="classname" >
     <label>&nbsp&nbsp&nbsp Subject Name</label>
    &nbsp&nbsp&nbsp
    <input type="text" name="subject" >
      <label>&nbsp&nbsp&nbsp Class Key</label>
     &nbsp&nbsp&nbsp
     <input type="text" name="classkey" >

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <button type="submit" name="create" class=" btn btn-info ">Create</button>
   </form>
 </div>
 <hr class="new">
<div>
<center><h2>Classes</h2></center>
   <?php
    ?>
      <table class="table table-straped table-responsive-sm table-hover" id="tb">
          <tr>
    <th>Class</th>
    <th>Subject</th>
    <th>Class ID</th>
    <th>Class Key</th>
    <th>Add Files from here</th>
    <th>Student List</th>
    <th>Files List</th>
  </tr>
        <?php
        include('db_connection.php');
        $teacheremail=$_SESSION['teacher_email'];
        if (!(is_null($teacheremail))) {
          $query="SELECT `class_id`,`subject`, `unique_id`, `teacher_email`, `class_name` FROM `classes` WHERE teacher_email='$teacheremail'";
          $result = mysqli_query($conn, $query);
      while($row= mysqli_fetch_assoc($result)){
          $classname=$row['class_name'];
          // $uniquekey=$row['class_key'];
          $cid=$row['class_id'];
          ?>
          <tr>
            <td><?php echo $row['class_name'];  ?></td>
            <td><?php echo $row['subject'];  ?></td>
            <td><?php echo $row['class_id'];  ?></td>
            <td><?php echo $row['unique_id'];  ?></td>
            <td><a href="fileupload.php?cid=<?php echo $cid; ?>" >add files</a></td>
            <td>
              <!-- <form action="studentlist.php" method="post"> -->
              <a href="studentlist.php?key=<?php echo $cid;  ?>"><button type='button' name='classidbtn' value="<?php echo $cid;  ?>" class='btn btn-info btn-sm'>Click</button></a>
             <!-- </form> -->
           </td>
           <td>
            <!-- <form method="post" action="teacherhome.php"> -->
              <a href="filesList.php?key=<?php echo $cid;  ?>"> 
              <button type='submit' name='filesbtn' value="<?php echo $cid;  ?>" class='btn btn-info btn-sm'>Click</button>
              </a> 
           <!-- </form> -->
           </td>
          </tr>

          <?php
    }
    echo '</table>';
    mysqli_close($conn);
  }
     ?>
</div>
<br>

<footer class="page-footer font-small indigo" style="background-color: #51b5a4; margin-top: 8%;
  <!-- Footer Links 
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 style="color: white;" class="font-weight-bold text-uppercase mt-3 mb-4">Contact Developers</h5>

        <ul class="list-unstyled">
          <li>
            <p style="color: white;">Contact Dev Team</p>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 style="color: white; margin-left: 700px;" class="font-weight-bold text-uppercase mt-3 mb-4">Email</h5>

        <ul class="list-unstyled" style="margin-left: 700px;">

          <li>
            <p style="color: white;">maidaiftikhar5@gmail.com</p>
          </li>
          <li>
            <p style="color: white;">sumeethassan4@gmail.com</p>
          </li>
          <li>
            <p style="color: white;">hadiqakhan566@gmail.com</p>
          </li>
        </ul>

      </div>
      </div>
      </div>


    </div>


  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 ">
    <p style="color: white; margin-left: 900px;"> <b>© 2019 Copyright</b> <br><b>Student Portal 2019</b></p>
  </div>
  <!-- Copyright -->

</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
