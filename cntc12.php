<?php include 'cntc1L.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"
<meta name="viewport" content="width=device-width, initial-scale=1"> -->
<style>
       /*.contact{
           height: 550px;
           width:900px;
}*/
body {
  /*font-family: Exotc350 Bd, Helvetica, sans-serif;*/
  /*background-image: url("contactback.jpg");*/
background-size: 100% 768px;
background-repeat: no-repeat;
}
* {box-sizing: border-box;

}
input[type=text], select, textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: red();
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:#3CBC8D;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
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
    background-color: #f4511e !important;
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
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color:  #51b5a4;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    background-color:  #51b5a4;
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
</style>
</head>
<body>
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
     <ul class="nav navbar-nav navbar-right nav-pills">
                 <li><a href="studenthome1.php">HOME</a></li>



        <li><a href="scholarpageO1.php">SCHOLARSHIP</a></li>

           
        <li class="active"><a href="cntc12.php">CONTACT</a></li>
           

        <li><a href="aboutus1.php">ABOUT</a></li>
        <!-- <li><a href="#">LOGOUT</a></li> -->
               
      </ul>
    </div>
  
</nav>
</div>
  <img height="300px" width="100%" src="./images/contactback.jpg" />

<h3 align="center">Contact Form</h3>

<div class="container contact">
  <form action="cntc1.php" method="post">
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="name" placeholder="Your name.." required="required">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your id.." required="required">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="pakistan">Pakistan</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="you're message"> You're Message</label>
    <textarea id="You're message" name="message" required="required" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" name="comment" value="Submit">
  </form>
</div>



<footer class="page-footer font-small indigo" style="background-color: #51b5a4; margin-top: 8%;
  <!-- Footer Links -->
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
