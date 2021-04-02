<?php
      $conn = mysqli_connect("localhost", "root", "","tourism_pal");
      session_start();
      
      if (isset($_POST['submit'])){
          $name=$_POST['name'];
          $city=$_POST['city'];
          $service=$_POST['service'];
          $intro=$_POST['intro'];
          $s1=$_POST['s1'];
          $s2=$_POST['s2'];
          $s3=$_POST['s3'];
          $s4=$_POST['s4'];
          $s5=$_POST['s5'];
          $s6=$_POST['s6'];
          $addr=$_POST['addr'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $pastwork=$_POST['pastwork'];

          $query = "INSERT INTO vendors VALUES (DEFAULT,'','$name','$city','$service','$intro','$s1','$s2','$s3','$s4','$s5','$s6','$addr','$email','$phone','$pastwork','','',now())";
          if(mysqli_query($conn,$query)){
            $msg="Updated Sucessfully";
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>
      $(document).ready(function() {   
      $('#serviceno').change(function(){   
      if($('#serviceno').val() === '1')   
        {   
        $('#s1').show();    
        }
      else if($('#serviceno').val() === '2')   
        {   
        $('#s1').show();
        $('#s2').show();    
        }
      else if($('#serviceno').val() === '3')   
        {   
        $('#s1').show();
        $('#s2').show();    
        $('#s3').show();
        }  
      else if($('#serviceno').val() === '4')   
        {   
        $('#s1').show();
        $('#s2').show();    
        $('#s3').show();
        $('#s4').show();
        }
      else if($('#serviceno').val() === '5')   
        {   
        $('#s1').show();
        $('#s2').show();    
        $('#s3').show();
        $('#s4').show();
        $('#s5').show();
        }
      else if($('#serviceno').val() === '6')   
        {   
        $('#s1').show();
        $('#s2').show();    
        $('#s3').show();
        $('#s4').show();
        $('#s5').show();
        $('#s6').show();
        }
      else 
        {   
        $('#s1').hide();
        $('#s2').hide();      
        $('#s3').hide();
        $('#s4').hide();
        $('#s5').hide();
        $('#s6').hide();
        } 

      });   
      }); 
    </script>
    <style>
        #div1{
          overflow-y: scroll; 
        }
    </style>
  </head>
  <body>
    <form action="" method="POST">
     <div id="div1" align="center">
       <h1>Register to Tourism Pal</h1>
       <p>Easily using</p>
       <a href="https://www.facebook.com" target="_blank" style="margin-right:20px"><img src="icon/fb.png" width=40px></a>
       <a href="https://aboutme.google.com" target="_blank"><img src="icon/g.png" width=40px></a>
       <p>OR</p>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="name" placeholder="Name" required pattern="[A-z]+">
       </div>
       <select name="city" id="city" required>
           <option value="">--Select Budget--</option>
           <option value="10000-50000">10000-50000</option>
           <option value="50000-60000">50000-60000</option>
           <option value="60000-75000">60000-75000</option>
           <option value="75000-100000">75000-100000</option>
           <option value="Temporary Stay">Temporary Stay</option>
       </select>
       <select name="service" id="service" required>
           <option value="">--Select Package--</option>
           <option value="Europe">Europe</option>
           <option value="Singapore">Singapore</option>
           <option value="Andaman">Andaman</option>
           <option value="Thailand">Thailand</option>
           <option value="Bali">Bali</option>
           <option value="North East">North East</option>
       </select>
       <textarea name="intro" id="" cols="30" rows="10" placeholder="Describe yourself" required></textarea>
       <select name="serviceno" id="serviceno" onclick="serviceno()">
         <option value="default" disabled selected>--Select No. of Services--</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
       </select>
       <input type="number" placeholder="Service 1" name="s1" id="s1" style="display: none;">
       <input type="number" placeholder="Service 2" name="s2" id="s2" style="display: none;">
       <input type="number" placeholder="Service 3" name="s3" id="s3" style="display: none;">
       <input type="number" placeholder="Service 4" name="s4" id="s4" style="display: none;">
       <input type="number" placeholder="Service 5" name="s5" id="s5" style="display: none;">
       <input type="number" placeholder="Service 6" name="s6" id="s6" style="display: none;">
       <textarea name="addr" id="" cols="30" rows="10" placeholder="Address" required></textarea>
       <div id="textdes">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Email Address" required  pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
       </div>
       <select name="countryCode" id="">
        <option data-countryCode="IN" value="91">India (+91)</option>
        <optgroup label="Other countries">
          <option data-countryCode="US" value="1">USA (+1)</option>
          <option data-countryCode="GB" value="44">UK (+44)</option>
        </optgroup>
      </select>
      <div id="textdes">
          <i class="fa fa-phone" aria-hidden="true"></i>  
          <input type="text" name="phone" placeholder="Phone No."  required pattern="\d{10}">
       </div>
       <div id="textdes">
          <i class="fa fa-youtube-play" aria-hidden="true"></i>
          <input type="text" name="pastwork" placeholder="Past Works (in Embed link)">
       </div>
       <br><br>
       <input type="submit" value="SUBMIT" id="button" name="submit"> <br><br>
       <?php if(isset($msg)){ echo $msg; } else { ""; }?>
       <p>Go Back to <a href="index.php">Login Page</a> </p>
     </div>
    </form>
  </body>
</html>
