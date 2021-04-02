<?php
    session_start();
    $email=$_SESSION["email"];
    //   if((time()-$_SESSION['timestamp']) > 180){
    //     header("Location: expire.php");
    //   }
?>

<?php
if(isset($_POST['submit'])){
  $eid= $_POST['eid'];
  $phn= $_POST['phn'];
  $query= $_POST['query'];
  mail("user@example.com","Queries from $eid.$phn",$query);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tourism Pal</title>
    <link rel="icon" href="icon/tp.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <style>
      ::-webkit-scrollbar {
        display: none;
      }
        /* cursor types */
      html{
        cursor:url(icon/heart.cur), auto;
      }
      input,textarea{
        cursor:url(icon/text.cur), auto;
      }
      a,#button,select{
        cursor:url(icon/heart2.cur), auto;
      }
      ::placeholder{
        color: rgba(131, 240, 121, 0.363);
      }
      :focus::placeholder {
        color: transparent;
      }
      *:focus{
        outline: none;
      }
      input[type=text],textarea{
        border: 1px solid #32a852;
        background: transparent;
        color: #32a852;
        padding-left: 5px;
      }
      #button{
        border:2px solid #32a852;
        color: #32a852;
        padding:5px 20px;
        background:linear-gradient(#32a852,#32a852) center/100% 0px no-repeat;
        transition:0.2s all linear;
      }
      #button:hover {
        background-size:100% 100%;
        color: black;
      }
      body{
        user-select: none;
        background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,0.3)), url(icon/wedbg.png) center center /cover;
        height: 100vh;
        font-size: 18px;
        text-align: center;
        margin: 0%;
        font-family: Arial;
        overflow: hidden;
      }
      a:link#a1, a:visited#a1{
        color: white;
        text-decoration: underline;
      }
      a:hover#a1{
        color: #32a852;
      }
      #div1{
        background-color:rgba(0, 0, 0, 0.6);
        height: 100%;
        width: 100%;
        font-size:20px;
      }
      #menu{
        background: linear-gradient(to right, #32a852 , #32a852);
        height: 80px;
        text-align: left;
        position: fixed;
        top:0%;
        width: 100%;
      }
      #querymsg{
        position: fixed; 
        bottom: 0%; 
        left: 5%;
        text-align: left;
        font-size: 15px;
        z-index: 1;
      }  
      #querydummy{
        border: 2px solid #32a852;
        background-color: transparent;
        color: #32a852;
        height: 30px;
        width: 200px;
        padding: 10px 0px 0px 30px;
      }
      #querycontent{
        z-index: 1;
        background-color: transparent;
        color: #32a852;
        border: 2px solid #32a852;
        display: none;
        z-index: 1;
        height: 320px;
        width: 220px;
        position: absolute;
        bottom: 0px;
        right: 0px;
        left: 0px;
        padding: 10px 0px 0px 10px;
      }
      #querymsg:hover #querycontent{
        display: block;
      }
      #querymsg:hover #querydummy{
        display: none;
      }
      #fadeshow1{
        display: inline-block; 
        position: relative;
        bottom: 20px;
      }
      @media only screen and (max-width: 700px) { 
        #fadeshow1 { 
          display: none; 
        } 
      }
      a:link,a:visited{
        margin: 10px;
        text-decoration: none;
        color: black;
      }
      a:hover{
         color: yellowgreen;
       }
      #thanks{
        padding-top: 350px;
        padding-bottom: 240px;
      } 
    </style>
  </head>
  <body>
    <form method="POST">

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
          <a href="services.php">Booking</a>
          <a href="index.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
        </div>
        <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tp.png" width="30px" alt="">
        <h3 id="fadeshow1" >TOURISM PAL</h3>
      </div>

      <div id="querymsg">
          <div id="querycontent">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" placeholder="Email Address" name="eid"><br><br>
            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
            <input type="text" placeholder="Phone Number" name="phn">
            <p>Please let us know whether you are happy with our service</p>
            <textarea name="query" id="" cols="25" rows="10" placeholder="Your Queries"></textarea>
            <input type="submit" value="Submit" name="submit" id="button">
          </div>
          <div id="querydummy">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            &nbsp;&nbsp;Message your query
          </div>
      </div>

      <div id="thanks" >
        <h1>Thanks <font color="#32a852"><?php if(isset($email)){ echo $email; } else { "" ;}?></font> for booking</h1>
        <a id="a1" href="services.php"> <p>Back to Services</p> </a>
      </div>
    </div>
    <!-- <button type="button" onclick="document.getElementById('menu').style.backgroundColor = 'red'">Click Me!</button> -->
    </form>
  </body>
</html>
