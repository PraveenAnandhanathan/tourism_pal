<?php
    session_start();
    // $timestamp=$_SESSION["timestamp"];
    // $present = time()-$timestamp-180;
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>Tourism Pal</title>
    <link rel="icon" href="icon/tp.png">
    <link href="sheet.css" rel="stylesheet" type="text/css">
    <style>
        #div2{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width:80%;
        }
    </style>
  </head>
  <body>
     <div id="div1" align="center">
         <div id="div2">
            <h1>You have been Logout due to inactivity for <?php echo gmdate("H:i:s", $present); ?></h1>  
            <p>Go Back to <a href="index.php">Login Page</a> </p>
         </div>
     </div>
  </body>
</html>
