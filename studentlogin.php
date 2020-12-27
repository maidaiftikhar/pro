<?php include('studentloginL.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>login form</title>
  <style type="text/css">
/* 
    .container{
      background-color:#51b5a4;
      width: 350px;
      height: 400px;
      margin-top: 0px;
      border-radius: 10px;
       border: 2px solid blue;
}
*/
  .navbar {
    margin-bottom: 0;
    background-color: #51b5a4;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    height: 40px; 


   
  }
  
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    margin-top: 3px;
    height: 45px;


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
  <style>
  body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
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
    <h4 style="color: white; margin-top: 10px;padding-top: 5px;margin-left: 5px;letter-spacing: 1px; "> Student Login</h4>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right nav-pills">

                 <li><a href="studenthome1.php">HOME</a></li>



        <li><a href="scholarpageO1.php">SCHOLARSHIP</a></li>

           
        <li><a href="cntc12.php">CONTACT</a></li>
                

        <li><a href="aboutus1.php">ABOUT</a></li>
     
      </ul>
    </div>
  
</nav>
</div>
<br>

  
<img src="images/logo12.jpg" style="height: 150px; width: 200px; margin-left: 43%;margin-top: 35px;">

<!-- <div class="container">

  <br>
    <h4 style="color: white;">Student Login</h4>

<hr>

    <form action="studentlogin.php" method="post">
      <?php //include('error.php'); ?>
    <div class="form-group">
    
      <label for="Email" style="color: white;">Email</label><br>

      
              <input style="width: 250px;height: 30px; border-radius:5px;" type="email" required="required" class ="form" name="email">
    </div>
    <div class="form-group">
      <label for="pwd" style="color: white;">Password</label>
<input style=" width: 250px;height: 30px; border-radius: 5px;" required="required" type="password"class ="form" name="password">
    </div>




 <button type="submit" name="login_student" class="btn btn-primary ">Login</button>
   </form>


    <p style="margin-top: 20px; color: white;">Forget password?Click here to <a style="color: blue;"  href="forgetpassword.php">Reset password</a></p>

    <p style="margin-top: 15px; color: white;">Dont have an account ?Click here to <a style="color: blue;" href="studentRegistration.php">Signup</a></p>
  </div> -->
  <div class="container">
  <form action="studentlogin.php" method="post">
     <?php //include('error.php'); ?>
    <div class="row">
      <h2 style="text-align:center">Student Login Form</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="https://www.facebool.com" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="https://www.twitter.com" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="https://www.google.com" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="email" name="email" placeholder="type email here" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" name="login_student">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="studentRegistration.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="testing_forgot_password.php" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
  <br><footer class="page-footer font-small indigo" style="background-color: #51b5a4; margin-top: 8%;
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
