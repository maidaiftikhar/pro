

<!DOCTYPE html>
<html>
<head>
  <title>homepage</title>

<meta name="viewport" content="width=device-width, initial-scale=1">


   <link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  



</head>
<style>
 


 .left{
  height: 50px;
  width: 185px;
  float: left;
  margin-top: 7%;
  margin-right: 40px;
  margin-left: 10px;


}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}






/* Slideshow container */
.slideshow-container {
  max-width: auto;
  margin-top: 25px;
  height: auto;
  position: relative;
  margin-left: 225px;
  margin-right: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;

  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.8s ease;
}

.active {
  background-color: #51b5a4;

  

}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
      <img src="./images/logo12.jpg" style="height: 60px; width: 150px;margin-top: 0px;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right nav-pills">         
             <li class="active"><a href="studenthome1.php">HOME</a></li>

        <li ><a href="scholarpageO1.php">SCHOLARSHIP</a></li>

           
           
        <li><a href="cntc12.php">CONTACT</a></li>
               
        <li><a href="aboutus1.php">ABOUT</a></li>
        <!-- <li><a href="#logout">LOGOUT</a></li> -->
       
      </ul>
    </div>
  
</nav>

<br>
<br>

<div  class="left">

  <h3 style="color: white; background-color: skyblue;">News</h3>
<marquee scrollamount="4" direction ="up" height="300" width="185" onmouseover="stop()" onmouseout="start()">
   <?php 
  $connn=mysqli_connect('localhost','root','','student_portal');
  $query1="SELECT * FROM `scholarship` WHERE 1";

  $result=mysqli_query($connn,$query1);
  while ($row=mysqli_fetch_assoc($result)) {
    echo "<p>".$row['name']."</p>";
    echo "<a href=".$row['url']." target='_blank'>click here</a>";
    echo "<hr>";

  }
  ?>

</marquee>

</div>

<div class="slideshow-container">



 <div class="mySlides fade">

     <div class="numbertext">1 / 3</div>
      <img src="images/pic6.jpg" style="width:1000px; height:430px">
  <div class="col" style="background:skyblue;  height: 90px; width: 1000px; margin-left: 1%;">
    <h2><center><b>COURSE MATERIAL</b></center></h2>
    <p><center><b>All the course books/slides are avalaible in soft form</b></center></p>
  </div>
  </div>

  <div class="mySlides fade">
   
       <div class="numbertext">2 / 3</div>

        <img src="./images/pic4.jpg" style="width:1000px; height:430px">
    <div class="col" style="background:lightgrey; height: 90px; width: 1000px; margin-left: 1%;">

    <h2><center><b>SCHOLARSHIP</b></center></h2>
    <p><center><b>All the scholarship details were also provided to the students</b></center></p>

    </div>
    </div>
  
   <div class="mySlides fade">

     <div class="numbertext">3 / 3</div>
      <img src="./images/img8.jpeg" style="width:1000px; height:430px">
<div class="col" style="background:pink; height: 90px; width: 1000px; margin-left:1%;">
    <h2><center><b>OTHER STUFF</b></center></h2>
    <p><center><b>Links of course relared tutorials and ppt/pdf links of the related search are provided</b></center></p>

  </div>
 
    </div>

  </div>



<br>

<div style="text-align:center;margin-left: 8%;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>





<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); // Change image every 2 seconds
}
</script>


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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>