<?php
if (isset($_GET['i']) && isset($_GET['q']) ) {

  ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>About website</title>
                <script type="text/javascript">
                  function Check_password(){
                    var P1=document.getElementById('p1').value;
                    var P2=document.getElementById('p2').value;
                    var m=document.getElementById('msg');
                    if (P1!=P2  ||  P2!=P1) {
                      m.innerHTML='New Password and Confrom Password are Not Match!.';
                      return false;
                    }else {
                      m.innerHTML='';
                    }
                  }
                </script>
         <style>
body {font-family: Arial, Helvetica, sans-serif;
  background-color: #82E0AA ;
}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 50%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 53%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>       
   </head>
   <body>
       <div id="md">
         <div class="ab" id="abdiv">
               <!--transparent form for the login of the Account -->
           <div class="col-xl " id="outdiv_login" >
                   <form class="login_inputdiv" action="" method="post" onsubmit="return Check_password()">
                     <h2 class="text-center" id="login_heading"><b>Reset Your Password</b></h2>
                     <?php
                      $db = mysqli_connect('localhost', 'root', '', 'student_portal');
                        $id=$_GET['i'];  $q=$_GET['q'];  $email='';
                          $sql=mysqli_query($db ,"SELECT teacher_email FROM teachers WHERE teacher_id='$id' AND security_question='$q'");
                          if (mysqli_num_rows($sql)==1) {
                              $r=mysqli_fetch_array($sql);
                              $email=$r[0];
                          }else {
                            echo "record problem try again";
                          }
                     ?>
                     <!--==== display ===============================================================================-->
                    <!--  <div class=" col-sm " style="padding-left: 23%;border-left:solid 2px #fff;border-right:solid 2px #fff;border-bottom:solid 2px #fff;border-radius: 8px">
                       <label><b>Email Address</b></label>
                         <div class="alert alert-primary w-75 py-2 justify-content-center font-weight-bold">
                            <?php //echo $email; ?>
                         </div>

                         <label class="mt-3"><b>Enter New Password</b></label>
                         <input type="password" name="password" id="p1"  placeholder="Enter the new password" class="form-control w-75 py-4 font-weight-bold" autocomplete="off"  minlength="8" required>

                       <label class="mt-4"><b>Conform Password</b></label>
                       <input type="password" name="confromp" id="p2" placeholder="Conform your new password" class="form-control w-75 py-4 font-weight-bold" autocomplete="off"  minlength="8" required>
                       <label class="font-weight-bold text-warning pb-3" id="msg"> </label><br>

                       <style media="screen">
                         @media (max-width: 257px) {   #recover_pass{ width: 80%;height: 20px;font-size: 10px}  }
                       </style>
                       <input type="submit" class="btn btn-lg xl-w-25 mt-4" value="Reset Password" name="reset_pass" id="recover_pass" -->
                     <!-- ended ======================================================================================-->
                     <!--==== display ===============================================================================-->
                           <!-- <form action="/action_page.php" style="max-width:500px;margin:auto"> -->
                         
                           <label><b>Email Address</b></label>
                          <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="input-field" type="text" placeholder="Email" name="email" value=" <?php echo $email; ?>">
                          </div>
                          <label class="mt-3"><b>Enter New Password</b></label>
                          <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" type="password" placeholder="Enter the new password" name="password" required>
                          </div>
                          <label class="mt-3"><b>Conform Password</b></label>
                          <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" type="password" placeholder="Conform your new password" name="confromp"" required>
                          </div>

                          <button type="submit" class="btn" name="reset_pass">Reset Password</button>
                        </form>
                     <!-- ended ======================================================================================-->
                       <div class="pp pt-4" >
                           <p>Click for Log in ?    <a href="teacherLogin.php"> Click here</a></p>
                           <p  style="font-size: 1.0em">
                             <b> Note: </b>
                             Please Select & Enter Your New Password and reset your new password.
                          </p>
                       </div>
                     </div>
                   </form>
                   <?php
                   if (isset($_POST['reset_pass'])) {
                     $p1= $_POST['password'];
                     $p2= $_POST['confromp'];
                     echo "botton mama are presss";
                     if ($p1!=$p2 ||  $p2!=$p1) {
                       echo "<script>  document.getElementById('msg').innerHTML='New Password and Confrom Password are Not Match!.';  </script>";
                     }else {
                       
                         $st="UPDATE `teachers` SET `teacher_password`='$p2' WHERE teacher_id='$id' AND teacher_email='$email'";

                         if (mysqli_query($db ,$st)) {  ?>
                           <script type="text/javascript">
                           alert('Your Account password are Successfully changed');
                           var a=confirm('Do you want to Login to your Account.');
                           if (a==true) {  window.location.href='teacherLogin.php';}
                           else {window.location.href='index.php';}
                           </script>
                           <?php
                         }else {
                           echo "<script> alert('Problem Occur While Changing your password!. Try Again'); </script>";
                         }
                       //ended
                     }
                   }
                    ?>
           </div>
           </div>
         </div>

   </body>
 </html>
