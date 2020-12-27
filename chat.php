<?php
session_start();

if (!isset($_SESSION['student_email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: studentlogin.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: studentlogin.php");
  }
  if (isset($_GET['cid'])) {
    $_SESSION['class_ids']=$_GET['cid'];
    // echo "<script>alert(".$_SESSION['class_ids'].") </script>";


  }


 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
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
<body onload="scrolltop()">
<?php
if (isset($_POST['postmessage'])) {
  $message=$_POST['message'];
  // echo "<script>alert(".$message.") </script>";
  include 'db_connection.php';
  $classid=$_SESSION['class_ids'];
  $email=$_SESSION['student_email'];
  $query="INSERT INTO `messages`( `class_id`, `name`, `message`) VALUES ( '$classid', '$email', '$message')";
  $result=mysqli_query($conn,$query);
  if ($result) {
    $message=NULL;
    header('location:chat.php');
  }

  // $query="SELECT * FROM `messages` WHERE 1";
  // $result= mysqli_query($conn, $query);
  // while ($row<mysqli_fetch_assoc($result)) {
  //   echo "<p>".$row['message']."</p>";
  // }
}
 ?>

<!-- navigation start -->
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="images/logo12.jpg" style="height: 60px; width: 150px;margin-top: 0px;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar nav-pills" style="margin-left: 50px;">
             <li ><a href="studenthome.php">HOME</a></li>

        <li ><a href="scholarpageO.php">SCHOLARSHIP</a></li>

           <li class="active"><a href="studentclass.php">CLASSES</a></li>

        <li><a href="cntc1.php">CONTACT</a></li>

        <li><a href="aboutus.php">ABOUT</a></li>
      </ul>
      <div class="navbar-nav ml-auto" style="margin-top:13px; margin-left: 25%; ">
        <div class="dropdown">
          <button class="dropbtn"><?php echo $_SESSION['student_email']; ?>&nbsp <span class="glyphicon glyphicon-chevron-down"></span></button>
          <div class="dropdown-content">

            
            <a href="studentclass.php?logout='1'">Logout</a>
          </div>
        </div>
      </div>

    </div>
</nav>

<?php
include 'db_connection.php';
$id=$_SESSION['class_ids'];
$queryname="SELECT  `class_name` FROM `classes` WHERE class_id=$id";
$result=mysqli_query($conn, $queryname);
$row2=mysqli_fetch_assoc($result);

 ?>
 
<nav class="navbar navbar-default navbar-fixed-top" style="margin-top:64px; background-color:grey; height:20px;">
  <div style="margin-top:15px; margin-left:25px;">
  <p style="color:white; font-size:18px;"> <?php echo $row2['class_name']; ?> </p>
</div>
</nav>
<!-- navigation end --><br>
<br>
<script>
function showUser(str) {
  // alert(str);
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("messagesdiv").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","chatLogic.php",true);
        xmlhttp.send();
    }
}
setInterval(showUser("sdfsf"), 300);
function scrolltop(){
  var objDiv = document.getElementById("messagesdiv");
        objDiv = objDiv.scrollHeight;
window.scrollTo(0, objDiv);
}
setInterval(scrolltop(),1000);
</script>
<div onload="scrolltop()" style="background-color:lightgrey; height:100%;width:700px; margin-left:25%; margin-top:30px; padding-top:30px;margin-bottom:50px; padding-bottom:20px;" id="messagesdiv">

</div>
<br>
<div class="footer" style="height:70px;">
  <div class="form-group" style="float:left; width:80%; margin-left:10%; margin-top:10px;">
    <form method="post" action="chat.php">
      <input type="text" autofocus required name="message" class="form-control" placeholder="Type a message" id="email" style="height:50px;">
    </div>
    <button type="submit" name="postmessage" class="btn btn-success" style="margin-top:10px; height:50px;" value="fffd" onclick="showUser(this.value)">Send</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
