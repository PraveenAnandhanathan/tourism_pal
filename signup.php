<?php
      $conn = mysqli_connect("localhost", "root", "","tourism_pal");

      if (isset($_POST['submit'])){
          session_start();
          $email=$_POST['email'];
          $email2=$_POST['email2'];
          $pass=$_POST['pass'];
          $number=$_POST['number'];
          
          if($email == $email2){
            $query = "INSERT INTO customers(email,password,phone) VALUES ('$email','$pass','$number')";
            mysqli_query($conn,$query);
            // $_SESSION['message'] = "You are now logged in";
            header("Location: index.php");
          }
          else{
            echo "<script type='text/javascript'>alert('Email does not match');</script>";
          }
          mysqli_close($conn);
        }
    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tourism Pal</title>
    <link rel="icon" href="icon/tp.png">
    <link href="sheet.css" rel="stylesheet" type="text/css" />
    <script src="script1.js" type="text/javascript"></script>
  </head>
  <body>
    <form action=""  method="POST">
     <div id="div1" align="center">
       <h1>Signup with Tourism Pal</h1>
       <p>Easily using</p>
       <a href="https://www.facebook.com" target="_blank" style="margin-right:20px"><img src="icon/fb.png" width=40px></a>
       <a href="https://aboutme.google.com" target="_blank"><img src="icon/g.png" width=40px></a>
       <p>OR</p>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Email Address" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
       </div>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email2" placeholder="Re-enter Email Address"  required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass" id="pass" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$">
          <label style="top:375px;"><i class="fa fa-eye" aria-hidden="true"></i><input type="checkbox" name="sh" id="sh" onclick="showpass()" style="visibility: hidden;"></label>
       </div>
       <div id="textdes">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <input type="text" name="number" placeholder="10 digit mobile no." required pattern="^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$">
       </div>
       <br><br>
       <input type="submit" value="REGISTER" id="button" name="submit">
       <p>Already have an account? <a href="index.php">LOG IN</a> </p>
       <p>OR <a id="a1" href="vendor.php">I'M A TRAVEL AGENCY</a> </p>
     </div>
    </form>
  </body>
</html>
