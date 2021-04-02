<?php
     session_start();
        // if((time()-$_SESSION['timestamp']) > 180){
        //   header("Location: expire.php");
        // }
?>

<?php
    $con=mysqli_connect("localhost", "root", "","tourism_pal");

    $city=$_SESSION['city'];
    if(is_null($city)){
        header('Location:city.php');
    }
    $query = mysqli_query($con, "SELECT * from city WHERE city = '$city'");
    while($row = mysqli_fetch_array($query)){
        $id= $row['id'];
        $city = $row['city'];
        $intro = $row['intro'];
        $pandemic = $row['pandemic'];
        $climatic = $row['climatic'];
        $protest = $row['protest'];
        $location = $row['location'];
        $date = $row['date'];
        $status = $row['status'];
        $war = $row['war'];
        $military = $row['military'];
        $terrorism = $row['terrorism'];
        $meal=$row['meal'];
        $cappuccino=$row['cappuccino'];
        $milk=$row['milk'];
        $rice=$row['rice'];
        $potato=$row['potato'];
        $transport=$row['transport'];
        $gasoline=$row['gasoline'];
        $newcar=$row['new car'];
        $basic=$row['basic'];
        $internet=$row['internet'];
        $mobileplans=$row['mobile plans'];
        $img1=$row['img1'];
        $name1=$row['name1'];
        $img2=$row['img2'];
        $name2=$row['name2'];
        $img3=$row['img3'];
        $name3=$row['name3'];
        $img4=$row['img4'];
        $name4=$row['name4'];
        $img5=$row['img5'];
        $name5=$row['name5'];
        $loc1='<img src="data:image/jpeg;base64,'.base64_encode($img1).'" style="width:200px; height:120px;"/>';
        $loc2='<img src="data:image/jpeg;base64,'.base64_encode($img2).'" style="width:200px; height:120px;"/>';
        $loc3='<img src="data:image/jpeg;base64,'.base64_encode($img3).'" style="width:200px; height:120px;"/>';
        $loc4='<img src="data:image/jpeg;base64,'.base64_encode($img4).'" style="width:200px; height:120px;"/>';
        $loc5='<img src="data:image/jpeg;base64,'.base64_encode($img5).'" style="width:200px; height:120px;"/>';
        // $wall=$row['wallpaper'];
        // $wallpaper= "background-image: url(data:image/jpeg;base64,'.base64_encode($wall).')";
        // $wall1= "url(data:image/jpeg;base64,'.base64_encode($wall).')";
    }

    mysqli_close($con);
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
        input{
            cursor:url(icon/text.cur), auto;
        }
        a,#button,button,select,input[type=radio],i{
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
        body{
          user-select: none;  
          background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,0.3)), url(icon/wedbg.png) center center /cover;
          height: 100vh;
          font-size: 18px;
          text-align: center;
          margin:0%;
          font-family: Arial;
          min-width:1500px;  
        }
        #div1{
          background-color:rgba(0, 0, 0, 0.6);
          font-size:20px;
          padding-bottom: 20px;
        }
        #menu{
          background: linear-gradient(to right, #32a852 , #32a852);
          height: 80px;
          text-align: left;
          position: fixed;
          top:0%;
          width: 100%;
          z-index: 1;
        }
        footer{
          background: linear-gradient(to right, #32a852 , #32a852);
          height: 80px;
          position:relative;
          bottom:0%; 
          padding-top:10px; 
          padding-bottom:70px;
        }
        footer i{
            margin-right: 10px;
            margin-left: 10px;
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
        #info{
           text-align: left;
           margin: 50px;
           padding-top: 100px;
           text-shadow: 1px 1px 40px white;
         }
        a:link,a:visited{
          margin: 10px;
          text-decoration: none;
          color: black;
        }
        a:hover{
           color: yellowgreen;
         }
         #list,li{
           max-width: 600px;
           margin:50px;
           margin-top:0px;
           margin-left:-20px;
         }
         #list{
          list-style: none;
         }
         #message{
           color:white;
         }
         input[type=button], input[type=submit],button{
          background-color: #32a852;
          border: 0px solid gray;
          padding: 5px;
         }
         input[type="file"] {
            display: none;
         }
         input[type='text']{
            height: 30px; 
            width: 600px; 
            font-size: 20px; 
            padding: 10px; 
            border: 0px solid #32a852; 
            border-bottom:3px solid #32a852; 
            color: #32a852; 
            background: transparent;
         }
         input:-webkit-autofill,
         input:-webkit-autofill:hover,
         input:-webkit-autofill:focus,
         input:-webkit-autofill:active {
            -webkit-animation: autofill 0s forwards;
            animation: autofill 0s forwards;
         }
         @keyframes autofill {
            100% {
                background: transparent;
                color: #32a852;
            }
         }
         @-webkit-keyframes autofill {
            100% {
                background: transparent;
                color: #32a852;
            }
         }
         #hl{
             background-color: rgba(255,255,255, 0.5);
             padding: 8px;
             padding-left: 15px;
             padding-right: 15px;
             border-radius: 20px;
         }
         .B1{
             display: none;
         }
         #button,#add,#add1,#add2,#add3,#add4{
            border:2px solid #32a852;
            padding:5px 20px;
            background:linear-gradient(#32a852,#32a852) center/100% 0px no-repeat;
            transition:0.2s all linear;
            color: #32a852;
        }
        #button:hover ,#add:hover ,#add1:hover ,#add2:hover ,#add3:hover ,#add4:hover {
            background-size:100% 100%;
            color: black;
        }
        .dot {
            cursor: url(icon/heart2.cur), auto;
            background-color: rgba(255,255,255, 0.5);
            padding: 8px;
            padding-left: 15px;
            padding-right: 15px;
            border-radius: 20px;
            transition: background-color 0.6s ease;
        }
        .active, .dot:hover {
            background-color: #717171;
        }
        /* .fig {
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
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        } */
        th, td {
            padding: 5px;
        }
        .fig{
            display: inline-block;
            margin: 10px;
            margin-top: 0px;
            background-color: rgba(255,255, 255, 0.7);
            width: 200px;
            height: 100px;
            text-align: center;
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
            /* padding:10px; */
            font-size: 15px;
        }
        #myBtn{
            background-color: #32a852;
            color: #32a852;
            border: 0px solid gray;
            padding: 5px;
            height: 60px;
            width: 100px;
            font-size: 20px;
            margin: 20px;
        }
        #myBtn{
            border:2px solid #32a852;
            padding:5px 20px;
            background:linear-gradient(#32a852,#32a852) center/100% 0px no-repeat;
            transition:0.2s all linear;
        }
        #myBtn:hover{
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
    </head>
    <body>
      <form action="" method="POST" enctype="multipart/form-data">

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
            <a href="index.php"  onclick="return confirm('Are you sure to logout?');">Logout</a>
          </div>
          <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tp.png" width="30px" alt="">
          <h3 id="fadeshow1" >TOURISM PAL</h3>
        </div>
        <div id="info">
          <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <table>
                <tr>
                    <td><h1><?php if(isset($city)){ echo $city; } else { echo 'No Name Set'; }?></h1></td>
                </tr>
                <tr>
                    <td><h3>INTRODUCTION</h3></td>
                </tr>
                <tr>
                    <td><p><?php if(isset($intro)){ echo $intro; } else { echo 'No Intro Given'; }?></p></td>
                </tr>
            </table>

            <div>
                    <h4>FAMOUS TOURIST SPOTS</h4>

                    <label><div class="fig">
                    <?php if(isset($loc1)){ echo $loc1; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name1)){ echo $name1; } else { echo 'Not Set'; }?></p></div></label>

                    <label><div class="fig">
                    <?php if(isset($loc2)){ echo $loc2; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name2)){ echo $name2; } else { echo 'Not Set'; }?></p></div></label>

                    <label><div class="fig">
                    <?php if(isset($loc3)){ echo $loc3; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name3)){ echo $name3; } else { echo 'Not Set'; }?></p></div></label>

                    <label><div class="fig">
                    <?php if(isset($loc4)){ echo $loc4; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name4)){ echo $name4; } else { echo 'Not Set'; }?></p></div></label>

                    <label><div class="fig">
                    <?php if(isset($loc5)){ echo $loc5; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name5)){ echo $name5; } else { echo 'Not Set'; }?></p></div></label>

            </div>

            <br><br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)">PANDEMIC SITUATION</span> 
                <span class="dot" onclick="currentSlide(2)">CLIMATIC SITUATION</span> 
                <span class="dot" onclick="currentSlide(3)">POLITICAL SITUATION</span> 
                <span class="dot" onclick="currentSlide(4)">STANDARD OF LIVING</span> 
            </div>
            <br><br>
            <div class="container" style="text-align:center">
                <div class="tabs"><iframe width="1200px" height="600px" src="<?php if(isset($pandemic)){ echo $pandemic; } else { echo ""; }?>"></iframe></div>
                <div class="tabs"><iframe width="1200px" height="600px" src="<?php if(isset($climatic)){ echo $climatic; } else { echo ""; }?>" frameborder="0"></iframe></div>
                <div class="tabs" style="width: 1100px; height: 500px; margin-left: 120px; padding: 50px; background-color: rgba(131, 240, 121, 0.363)">
                    <table style="text-align: left; font-size: large; width: 100%;">
                        <tr>
                            <th colspan="2">PROTESTS / DOMESTIC ISSUES</th>
                        </tr>
                        <tr>
                            <td colspan="2"><?php if(isset($protest)){ echo $protest; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>Location:</td>
                            <td><?php if(isset($location)){ echo $location; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td><?php if(isset($date)){ echo $date; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td><?php if(isset($status)){ echo $status; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">WAR SITUATION</th>
                        </tr>
                        <tr>
                            <td colspan="2"><?php if(isset($war)){ echo $war; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">MILITARY RULE</th>
                        </tr>
                        <tr>
                            <td colspan="2"><?php if(isset($military)){ echo $military; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">RECENT TERRORIST ATTACK</th>
                        </tr>
                        <tr>
                            <td colspan="2"><?php if(isset($terrorism)){ echo $terrorism; } else { echo 'Not Set'; }?></td>
                        </tr>
                    </table>
                </div>
                <div class="tabs" style="width: 1100px; height: 500px; margin-left: 120px; padding: 50px; background-color: rgba(131, 240, 121, 0.363)">
                    <table style="text-align: left; font-size: large; width: 100%;">
                        <tr>
                            <th>RESTAURANTS</th>
                        </tr>
                        <tr>
                            <td>Meal, Inexpensive Restaurant</td>
                            <td><?php if(isset($meal)){ echo $meal; } else { echo 'Not Set'; }?></td>
                            <td rowspan="18" align="right">
                                <script>var fm = "EUR";var to = "USD";var tz = "timezone";var sz = "300x300";var lg = "en";var st = "info";var lr = "0";var rd = "0";</script>
                                <a href="https://currencyrate.today/converter-widget" title="Currency Converter">
                                <script src="//currencyrate.today/converter"></script></a>
                                <div style="font-size:.8em;">
                                    <a href="https://currencyrate.today">currencyrate.today</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Cappuccino</td>
                            <td><?php if(isset($cappuccino)){ echo $cappuccino; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th>MARKETS</th>
                        </tr>
                        <tr>
                            <td>Milk (1 liter)</td>
                            <td><?php if(isset($milk)){ echo $milk; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>Rice (1 kg)</td>
                            <td><?php if(isset($rice)){ echo $rice; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>Potato (1 kg)</td>
                            <td><?php if(isset($potato)){ echo $potato; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th>TRANSPORTATION</th>
                        </tr>
                        <tr>
                            <td>Local Transport</td>
                            <td><?php if(isset($transport)){ echo $transport; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>Gasoline</td>
                            <td><?php if(isset($gasoline)){ echo $gasoline; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>Equivalent New Car</td>
                            <td><?php if(isset($newcar)){ echo $newcar; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th>UTILITY</th>
                        </tr>
                        <tr>
                            <td>Basic (Electricity, Heating, Cooling, Water, Garbage)</td>
                            <td><?php if(isset($basic)){ echo $basic; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>Internet (60 Mbps or More, Unlimited Data, Cable/ADSL)</td>
                            <td><?php if(isset($internet)){ echo $internet; } else { echo 'Not Set'; }?></td>
                        </tr>
                        <tr>
                            <td>1 min. of Prepaid Mobile Tariff Local (No Discounts or Plans)</td>
                            <td><?php if(isset($mobileplans)){ echo $mobileplans; } else { echo 'Not Set'; }?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <h4>SEE FOR PACKAGES</h4>
                <table style="width: 95%;">
                    <tr>
                        <td>
                            <p>Book your vacations packages and holiday packages in <?php if(isset($city)){ echo $city; } else { echo 'Not Set'; }?> with us. ... via Tourism Pal's booking service on best-selling deals... Hope to see you make memories in the laps of <?php if(isset($city)){ echo $city; } else { echo 'Not Set'; }?>, soon!</p>
                        </td>
                        <td>
                            <a href="services.php"><input type="button" value="Packages" id="button" style="height: 50px; width: 150px; font-size: 20px;"></a>
                        </td>
                    </tr>
                </table>
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
                var slides = document.getElementsByClassName("tabs");
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
        <!--?rel=0;&autoplay=1&mute=1&loop=1-->
        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
     
    </body>
  </html>
