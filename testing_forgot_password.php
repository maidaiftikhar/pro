 <?php
      $db = mysqli_connect('localhost', 'root', '', 'student_portal');
          if (isset($_POST['recover_pass'])) {
            // echo "<script> alert('recover_pass are press '); </script>";
            if ($db) {
              $email=$_POST['email'];
              $question=$_POST['select_question'];
              $answer=$_POST['q_answer'];
             

             
                $e=mysqli_query($db ,"SELECT student_id,student_email , security_question,question_answer FROM students WHERE student_email='$email' AND security_question='$question' AND question_answer='$answer'");
                $status=mysqli_num_rows($e);
                if ($status==1) {
                  $r=mysqli_fetch_array($e);
                  /// href
                  ?><script> window.location.href="p_set.php?i=<?php echo $r[0]; ?>&q=<?php echo $question; ?>" </script>
                   <?php
                }else {
                  $status_email=mysqli_num_rows(mysqli_query($db ,"SELECT student_email FROM students WHERE student_email='$email'"));
                  if ($status_email==1) {
                    $sql=mysqli_query($db ,"SELECT student_email , security_question,question_answer FROM students WHERE student_email='$email' AND security_question='$question' AND question_answer='$answer'");
                    $status=mysqli_num_rows($sql);
                    if ($status==1) {  /// href
                      $r=mysqli_fetch_array($status);
                        ?><script> window.location.href="p_set.php?i=<?php echo $r[0]; ?>&q=<?php echo $question; ?>" </script> <?php
                    }else {
                        // echo "Wrong Security question is selected or Wrong Answer.";
                        ?><script type="text/javascript">
                              var m=document.getElementById('amsg'); m.innerHTML='Wrong Security Question is selected? or Wrong Answer!.';
                              function c(){ m.innerHTML=''; }  setTimeout(c ,8000);
                        </script>
                        <?php
                    
                  }
                }else{
                	echo "<script>  alert('Sorry Email is Wrong!'); </script>";

                }
              } //end else


            }
          }
            ?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Portal</title>


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<style> 
body{
  background-color: #FDEBD0;
}


 .Register-box{

  border: 2px solid blue; margin-left: 350px; margin-top: 3px; padding-left: 50px;padding-right: 50px;  background-color:  #51b5a4 ;  height: 530px; width: 440px; border-radius: 10px 10px 10px 10px;">
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
  background-color:#C2FCFA;
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
  
  width: 60%;
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

 <body>
 
   

<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<h4 style="color: white; margin-top: 10px;padding-top: 5px;margin-left: 5px;letter-spacing: 1px; "> Student Registeration</h4>    
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
</div> -->
 <div class="container">
  <form action="#" method="post">
     <?php //include('error.php'); ?>
    <div class="row">
      <h2 style="text-align:center">Recover Your Account Password</h2>

      <div class="col">
        
         
        <label  for="sel1"><b>Email* </b></label><br>
        <input type="email" name="email" placeholder="Enter Email Address" required>
        <label  class="font-weight-bold text-warning" id="emsg"> </label><br>
        <br><br>
         <label  for="sel1"><b>Select  Security  Qustion </b></label><br>
                      <select name="select_question" class="form-control font-weight-bold"   id="sel1" required >
                        <option value="">Select Your Security Question</option>
                          <option value="What is Your Childhood School name?">What is Your Childhood School name?</option>
                          <option value="What Is your favorite book?">What Is your favorite book?</option>
                          <option value="What is the name of the road you grew up on?">What is the name of the road you grew up on?</option>
                          <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                          <option value="What was the first company that you worked for?">What was the first company that you worked for?</option>
                          <option value="Where did you go to high school/college?">Where did you go to high school/college?</option>
                          <option value="What is your favorite food?">What is your favorite food?</option>
                          <option value="What city were you born in?">What city were you born in?</option>
                          <option value="Where is your favorite place to vacation?">Where is your favorite place to vacation?</option>
                          <option value="What is your Childhood friend name?">What is your Childhood friend name?</option>
                          <option value="What is your bestfriend name?">What is your bestfriend name?</option>
                      </select>
        <br>
        <label class="text-warning font-weight-bold" id="qmsg"></label>
        <br>
        <label><b>Enter Your Answer</b></label>
                      <input type="text" name="q_answer"  placeholder="Enter the Answer of Your Security Question" class="form-control w-75 py-4 font-weight-bold" autocomplete="off"  maxlength="30" required>

        <input type="submit" value="Recover Password" name="recover_pass">
      </div>
      
    </div>
  </form>
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

</body>
</html>