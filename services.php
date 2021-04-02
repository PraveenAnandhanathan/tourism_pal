<?php
      session_start();
        // if((time()-$_SESSION['timestamp']) > 180){
        //   header("Location: expire.php");
        // }
?>

<?php
  if(isset($_POST['vendor'])){
    header("Location: booking.php");
    $_SESSION['vendor']=$_POST['vendor'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tourism Pal</title>
    <link rel="icon" href="icon/tp.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <style>
      ::-webkit-scrollbar {
        display: none;
      }
      /* cursor types */
      html{
        cursor:url(icon/heart.cur), auto;
      }
      input{
        cursor:url(icon/text.cur), auto;
      }
      a,#button,select{
        cursor:url(icon/heart2.cur), auto;
      }
      *:focus{
          outline: none;
        }
      html{
        scroll-behavior: smooth;
      }
      body{
        user-select: none;
        background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,0.3)), url(icon/wedbg.png) center center /cover;
        height: 100vh;
        margin: 0%;
        font-family: Arial;
        font-size: 18px;
        min-width:600px;
      }
      #div1{
        background-color:rgba(0, 0, 0, 0.6);
        height: 100%;
        width: 100%;
        font-size:20px;
        padding-bottom: 10px;
      }
      #menu{
        background: linear-gradient(to right, #1f6632 , #32a852);
        height: 80px;
        position: fixed;
        top:0%;
        width: 100%;
        z-index: 1;
      }
      footer{
        background: linear-gradient(to right, #1f6632 , #32a852);
        height: 80px;
        position:relative;
        bottom:0%; 
        padding-top:10px; 
        padding-bottom:70px;
        text-align: center;
      }
      footer i{
            margin-right: 10px;
            margin-left: 10px;
        }
      #fadeshow1{
        display: inline-block; 
        position: relative;
        bottom: 20px;
        color:black;
      }
      @media only screen and (max-width: 700px) { 
        #fadeshow1 { 
          display: none; 
        } 
      }
      #maindiv{
        padding-top: 150px;
      }
      #vendor{
        padding-left: 50px;
      }
      #sticky{
        position: sticky; 
        top:10%;
        z-index: 1;
      }
      #div2{
        text-align: center;
        background-color: rgba(131, 240, 121, 0.363);
        color:black;
        padding:20px;
        margin: 40px;
        margin-left: 170px;
        margin-right: 170px;
      }
      #sma{
        text-align: center;
        display:inline-block;
        width:135px;
        margin:20px;
      }
      #button,#myBtn{
        background-color: #32a852;
        color: #32a852;
        border: 0px solid gray;
        padding: 5px;
        height: 60px;
        width: 100px;
        font-size: 20px;
        margin: 20px;
      }
      select{
        border:2px solid #32a852;
        width:400px;
        height:60px;
        font-size: 20px;
        margin: 20px;
        color: #32a852;
        background: transparent;
      }
      select option{
        background: #32a852;
        color: black;
      }
      .fig{
        display: inline-block;
        margin: 10px;
        margin-top: 0px;
        background-color: rgba(255,255, 255, 0.7);
        width: 300px;
        height: 200px;
        text-align: center;
      }
      .fig input[type=submit]{
        background-color: #32a852;
        border: 1px solid gray;
        padding: 5px;
        visibility: hidden;
      }
      .fig:hover{
        transform:scale(1.3);
        transition: 0.2s;
        cursor:url(icon/heart2.cur), auto;
      }
      #venlabel{
        position:relative; 
        bottom: 60px; 
        background-color:rgba(0, 0, 0, 0.9); 
        color:white; 
        padding:10px;
        font-size: 25px;
      }
      h3{
        color:white;
      }
      a:link,a:visited{
        margin: 10px;
        text-decoration: none;
        color: black;
      }
      a:hover{
         color: yellowgreen;
       }
      .glow {
        color: #fff;
        animation: glow 1s ease-in-out infinite alternate;
      }

      @keyframes glow {
        from {
          text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #32a852, 0 0 40px #32a852, 0 0 50px #32a852, 0 0 60px #32a852, 0 0 70px #32a852;
        }
        to {
          text-shadow: 0 0 20px #fff, 0 0 30px #32a852, 0 0 40px #32a852, 0 0 50px #32a852, 0 0 60px #32a852, 0 0 70px #32a852, 0 0 80px #32a852;
        }
      }
      #button,#myBtn{
        border:2px solid #32a852;
        padding:5px 20px;
        background:linear-gradient(#32a852,#32a852) center/100% 0px no-repeat;
        transition:0.2s all linear;
      }
      #button:hover,#myBtn:hover{
        background-size:100% 100%;
        color: black;
      }
      #myBtn{
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        cursor:url(icon/heart2.cur), auto;
      }
      .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 30px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
      }
      .closebtn:hover {
        color: black;
      }

    </style>
  <body>
    <form action="" name="plan" method="post">

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div id="div1">
        <div id="menu">
          <div style="float: right; margin: 25px;">
            <span id="google_translate_element" style="position: absolute; right: 400px;"></span>
            <a href="about.php">About</a>
            <a href="city.php">Home</a>
            <a href="services.php" style="color:white"><big>Booking</big></a>
            <a href="index.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
          </div>
          <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tp.png" width="30px" alt="">
        <h3 id="fadeshow1" >TOURISM PAL</h3>
        </div>
     <div id="maindiv">
     <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <div align="center" id="sticky" >
      <select name="country">
          <option value="default" disabled selected>--Select Packages--</option>
          <option value="europe">Europe</option>
          <option value="singa">Singapore</option>
          <option value="andam">Andaman</option>
          <option value="thail">Thailand</option>
          <option value="bal">Bali</option>
          <option value="northea">North East</option>
        </select>
        <select name="budget">
          <option value="default" disabled selected>--Select Budget--</option>
          <option value="10000">10000-50000</option>
          <option value="50000">50000-60000</option>
          <option value="60000">60000-75000</option>
          <option value="75000">75000-100000</option>
          <option value="others">Temporary Stay</option>
        </select>
        <input type="submit" value="FIND" id="button" onclick="return val1()">
        <input type="button" value="CLEAR" id="button" onclick="return val2()">
      </div>

      <!-- <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
          var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("sticky").style.top = "10%";
          } else {
            document.getElementById("sticky").style.top = "-60%";
          }
          prevScrollpos = currentScrollPos;
        }
      </script> -->

      <div id="div2">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <h2>Book your Destination Spot in simple steps</h2>
        <div id="sma">1. Search for the package required</div>
        <div id="sma">2. See the reviews and Budget <br></div>
        <div id="sma">3. Book the Best Packages <br><br></div>
      </div>

     <div id="vendor">
      <?php
          $con=mysqli_connect("localhost", "root", "","tourism_pal");
          $query = mysqli_query($con, "SELECT * from vendors ORDER BY timestamp DESC LIMIT 1");
          while($row = mysqli_fetch_array($query)){
              $name = $row['name'];
              $star="4.5";
              echo ("<h3 class='glow'>Latest Packages</h3>");
              echo ("<label><div class='fig'>
                      <img src='icon/p0.jpg' style='width:100%; height:100%;'>
                      <p id='venlabel'>$name</p>
                      <input type='submit' value='$name' name='vendor'></label>
                      </div>");
          }
      ?>

<h3>Europe Tour Package</h3>
      <label><div class="fig" id="swiss">
        <img src="icon/p1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Swiss Paris Delight</p>
        <input type="submit" value="Swiss Paris Delight" name="vendor"></div></label>
      
      <label><div class="fig" id="spain">
        <img src="icon/p2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Spanish Delight</p>
        <input type="submit" value="Spanish Delight" name="vendor"></div></label>
      
      <label><div class="fig"  id="jewel">
        <img src="icon/p3.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Jewels of Europe</p>
        <input type="submit" value="Jewels of Europe" name="vendor"></div></label>
      
      <h3>Singapore Tour Package</h3>
      <label><div class="fig"  id="soulsin">
        <img src="icon/d1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Soulmate Special-Singapore</p>
        <input type="submit" value="Soulmate Special-Singapore" name="vendor"></div></label>
      
      <label><div class="fig" id="bintan">
        <img src="icon/d2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Mesmerizing Bintan & Singapore</p>
        <input type="submit" value="Mesmerizing Bintan & Singapore" name="vendor"></div></label>
      
      <h3>Andaman Tour Package</h3>
      <label><div class="fig" id="androm">
        <img src="icon/h1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Premium Romantic Escape in Andaman</p>
        <input type="submit" value="Premium Romantic Escape in Andaman" name="vendor"></div></label>
      
      <label><div class="fig" id="neil">
        <img src="icon/h2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Andaman with Neil Island</p>
        <input type="submit" value="Andaman with Neil Island" name="vendor"></div></label>
      
      <h3>Thailand Tour Package</h3>
      <label><div class="fig" id="pattaya">
        <img src="icon/m1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Magical Pattaya & Bangkok</p>
        <input type="submit" value="Magical Pattaya & Bangkok" name="vendor"></div></label>
      
      <h3>Bali Tour Package</h3>
      <label><div class="fig" id="ebali">
        <img src="icon/c1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Experience Bali</p>
        <input type="submit" value="Experience Bali" name="vendor"></div></label>
      
      <h3>North East Tour Package</h3>
      <label><div class="fig" id="snorth">
        <img src="icon/k1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Splendid North East</p>
        <input type="submit" value="Splendid North East" name="vendor"></div></label>
      
      <label><div class="fig" id="sikkim">
        <img src="icon/k2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Sikkim Delight</p>
        <input type="submit" value="Sikkim Delight" name="vendor"></div></label>
     </div>
     </div>
    </div>
    <footer>
    <p align="center">satisfying your services</p>
      <h2 align="center">Tourism Pal</h2>
      <i class="fa fa-facebook-square" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <i class="fa fa-youtube-play" aria-hidden="true"></i>
      <i class="fa fa-pinterest" aria-hidden="true"></i>
    </footer>
    </form>

    <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

  </body>
  </html>
