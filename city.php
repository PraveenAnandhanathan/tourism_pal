<?php
      session_start();
        // if((time()-$_SESSION['timestamp']) > 180){
        //   header("Location: expire.php");
        // }
?>

<?php
  if(isset($_POST['city'])){
    header("Location: spot.php");
    $_SESSION['city']=$_POST['city'];
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
        max-width: 1000px;
        position: relative;
        margin: auto;
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
        /* margin: 10px; */
        margin-top: 0px;
        background-color: rgba(255,255, 255, 0.7);
        width: 1000px;
        height: 500px;
        text-align: center;
      }
      .fig input[type=submit]{
        background-color: #32a852;
        border: 1px solid gray;
        padding: 5px;
        visibility: hidden;
      }
      /* .fig:hover{
        transform:scale(1.3);
        transition: 0.2s;
        cursor:url(icon/heart2.cur), auto;
      } */
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
      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active, .dot:hover {
        background-color: #717171;
      }
      /* Next & previous buttons */
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 30px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
      }

      /* Fading animation */
      .fig {
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
        .prev, .next,.text {font-size: 11px}
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
            <a href="city.php" style="color:white"><big>Home</big></a>
            <a href="services.php">Booking</a>
            <a href="index.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
          </div>
          <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tp.png" width="30px" alt="">
        <h3 id="fadeshow1" >TOURISM PAL</h3>
        <div class='immersive-reader-button' data-button-style='icon'></div>
        </div>
     <div id="maindiv">
           
     <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

     <div id="vendor">

      <label><div class="fig">
        <img src="icon/ct1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Europe</p>
        <input type="submit" value="Europe" name="city"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Singapore</p>
        <input type="submit" value="Singapore" name="city"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct3.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Andaman</p>
        <input type="submit" value="Andaman" name="city"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct4.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Thailand</p>
        <input type="submit" value="Thailand" name="city"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct5.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Bali</p>
        <input type="submit" value="Bali" name="city"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct6.jpg" style="width:100%; height:100%;">
        <p id="venlabel">North East</p>
        <input type="submit" value="North East" name="city"></div></label>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <br><br>
     </div>
      <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
          <span class="dot" onclick="currentSlide(5)"></span> 
          <span class="dot" onclick="currentSlide(6)"></span> 
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

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("fig");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
      }
    </script>

  </body>
  </html>
