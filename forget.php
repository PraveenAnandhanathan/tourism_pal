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
    <form action="" method="POST">
     <div id="div1" align="center">
       <h1>Login to Tourism Pal</h1>
       <p>Easily using</p>
       <a href="https://www.facebook.com" target="_blank" style="margin-right:20px"><img src="icon/fb.png" width=40px></a>
       <a href="https://aboutme.google.com" target="_blank"><img src="icon/g.png" width=40px></a>
       <h2>** Forget Password **</h2>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Your Email Address" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass1" id="pass" placeholder="New Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$">
          <label style="top:340px;"><i class="fa fa-eye" aria-hidden="true"></i><input type="checkbox" name="sh" id="sh" onclick="showpass()" style="visibility: hidden;"></label>
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass2" id="pass1" placeholder="Re-enter Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$">
       </div>     
       <br><br>  
       <?php
        $conn = mysqli_connect("localhost", "root", "","tourism_pal");
        session_start();

        if (isset($_POST['submit'])){            
            $email=$_POST['email'];
            $pass1=$_POST['pass1'];
            $pass2=$_POST['pass2'];

            $mail_query =mysqli_query($conn, "SELECT * from customers WHERE email='$email'") ;
            $rows = mysqli_num_rows($mail_query);
            if($rows == 1){
                if($pass1 == $pass2){
                    $query = mysqli_query($conn, "UPDATE customers SET password='$pass1' WHERE email='$email'");
                    echo ("Updated Sucessfully<br><br>");
                    $subject="Password Change";
                    $message="Your Password has been Changed";
                    // mail($email,$subject,$message);
                }
                else{
                    echo ("Password doesn't match<br><br>");
                }
                mysqli_close($conn);
                }
            else{
                echo ("Email doesn't exists<br><br>");
            }
            }
        ?>
        
       <input type="submit" value="SUBMIT" id="button" name="submit">
       <p>Go Back to <a href="index.php">Login Page</a> </p>
     </div>
    </form>
  </body>
</html>
