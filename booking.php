<?php
     session_start();
        // if((time()-$_SESSION['timestamp']) > 180){
        //   header("Location: expire.php");
        // }
?>

<?php
    $con=mysqli_connect("localhost", "root", "","tourism_pal");

    $vendor=$_SESSION['vendor'];
    if(is_null($vendor)){
        header('Location:services.php');
    }
    $query = mysqli_query($con, "SELECT * from vendors WHERE name = '$vendor'");
    while($row = mysqli_fetch_array($query)){
        $id= $row['id'];
        $name = $row['name'];
        $city = $row['city'];
        $service = $row['service'];
        $intro = $row['intro'];
        $s1 = $row['s1'];
        $s2 = $row['s2'];
        $s3 = $row['s3'];
        $s4 = $row['s4'];
        $s5 = $row['s5'];
        $s6 = $row['s6'];
        $s10 = "Rs.".$s1." per day";
        $s20 = "Rs.".$s2." per day";
        $s30 = "Rs.".$s3." per day";
        $s40 = "Rs.".$s4." per day";
        $s50 = "Rs.".$s5." per day";
        $s60 = "Rs.".$s6." per day";
        $addr = $row['addr'];
        $eid = $row['eid'];
        $phone = $row['phone'];
        $pastwork=$row['pastwork'];
        $img=$row['img'];
        $loc='<img src="data:image/jpeg;base64,'.base64_encode($img).'" width=500px />';
    }

    if(isset($_POST['post'])){
        $comments = $_POST['comments'];
        $cid=$_POST['post'];
        $query1 = mysqli_query($con, "INSERT INTO vendors(cid,comments,timestamp) VALUES ('$cid','$comments','')");
    }

    if(isset($_POST['upload']))  
    {  
         $file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
         $cpid=$_POST['upload'];  
         $query2 = mysqli_query($con, "INSERT INTO vendors(cid,img,timestamp) VALUES ('$cpid','$file','')");
    }

    mysqli_close($con);
?>

<?php
    if($service=="Europe"){
        $S1="Accomodation Villas >= 3 stars";
        $S2="Hotels and Meals";
        $S3="Local Travel Guide";
        $S4="Chartered Flight";
        $S5="Tickets for entry to events or attractions";
        $S6="Firecamp and Additional Services";
        $hide1=0;
    }
    if($service=="Singapore"){
        $S1="Accomodation Villas >= 3 stars";
        $S2="Hotels and Meals";
        $S3="Local Travel Guide";
        $S4="Rental Cars";
        $S5="Tickets for entry to events or attractions";
        $S6="Firecamp and Additional Services";
        $hide2=0;
    }
    if($service=="Andaman"){
        $S1="Accomodation Villas >= 3 stars";
        $S2="Hotels and Meals";
        $S3="Local Travel Guide";
        $S4="Cruise Ship ";
        $S5="Tickets for entry to events or attractions";
        $S6="Firecamp and Additional Services";
        $hide3=0;
    }
    if($service=="Thailand"){
        $S1="Accomodation Villas >= 3 stars";
        $S2="Hotels and Meals";
        $S3="Local Travel Guide";
        $S4="Rental Cars";
        $S5="Tickets for entry to events or attractions";
        $S6="Firecamp and Additional Services";
        $hide4=0;
    }
    if($service=="Bali"){
        $S1="Accomodation Villas >= 3 stars";
        $S2="Hotels and Meals";
        $S3="Local Travel Guide";
        $S4="Rental Cars";
        $S5="Tickets for entry to events or attractions";
        $S6="Firecamp and Additional Services";
        $hide5=0;
    }
    if($service=="North East"){
        $S1="Accomodation Villas >= 3 stars";
        $S2="Hotels and Meals";
        $S3="Guest Makeup";
        $S4="Rental Jeeps";
        $S5="Tickets for entry to events or attractions";
        $S6="Firecamp and Additional Services";
        $hide6=0;
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
    <script>
    var redirectTime = "4000";
    var redirectURL = "thanks.php";
    function payment() {
      var pay = document.getElementsByName("pay");
      var isChecked = false;
      for(var i=0; i<pay.length;i++){
        if(pay[i].checked){
          isChecked = true;
          document.getElementById("message").innerHTML = "Please wait, your payment is on process.";
          setTimeout("location.href = redirectURL;",redirectTime);
          break;
        }
      }
      if(isChecked == false){
        swal("Select Payment",{timer: 2000});
      }
      return isChecked;
    }

    var add = (function () {
    var counter = 0;
    return function () {return counter += 1;}
    })();
    function clickcounter(){
    document.getElementById("add").innerHTML = "ADDED: "+add();
    }

    var add1 = (function () {
    var counter1 = 0;
    return function () {return counter1 += 1;}
    })();
    function clickcounter1(){
    document.getElementById("add1").innerHTML = "ADDED: "+add1();
    }

    var add2 = (function () {
    var counter2 = 0;
    return function () {return counter2 += 1;}
    })();
    function clickcounter2(){
    document.getElementById("add2").innerHTML = "ADDED: "+add2();
    }

    var add3 = (function () {
    var counter3 = 0;
    return function () {return counter3 += 1;}
    })();
    function clickcounter3(){
    document.getElementById("add3").innerHTML = "ADDED: "+add3();
    }

    var add4 = (function () {
    var counter4 = 0;
    return function () {return counter4 += 1;}
    })();
    function clickcounter4(){
    document.getElementById("add4").innerHTML = "ADDED: "+add4();
    }
    </script>
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
            <a href="city.php">Home</a>
            <a href="services.php" style="color:white"><big>Booking</big></a>
            <a href="index.php"  onclick="return confirm('Are you sure to logout?');">Logout</a>
          </div>
          <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tp.png" width="30px" alt="">
        <h3 id="fadeshow1" >TOURISM PAL</h3>
        </div>
        <div id="info">
          <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <table>
                <tr>
                    <td><h1><?php if(isset($name)){ echo $name; } else { echo 'No Name Set'; }?></h1>
                        <span id="hl"><?php if(isset($city)){ echo $city; } else { echo ''; }?></span>
                        <span id="hl"><?php if(isset($service)){ echo $service; } else { echo ''; }?></span></td>
                </tr>
                <tr>
                    <td style="padding-top: 50px;"><h3>INTRODUCTION</h3></td>
                </tr>
                <tr>
                    <td><p><?php if(isset($intro)){ echo $intro; } else { echo 'No Intro Given'; }?></p></td>
                </tr>
                <tr>
                    <td>
                    <table width=100%>
                        <tr>
                            <td><h3>SERVICES AND PRICING</h3>
                                 <p><b><?php echo $S1;?></b><br><?php if(isset($s1)){ echo $s10; } else { echo ''; }?><br><br>
                                    <b><?php echo $S2;?></b><br><?php if(isset($s2)){ echo $s20; } else { echo ''; }?><br><br>
                                    <b><?php echo $S3;?></b><br><?php if(isset($s3)){ echo $s30; } else { echo ''; }?><br><br>
                                    <b><?php echo $S4;?></b><br><?php if(isset($s4)){ echo $s40; } else { echo ''; }?><br><br>
                                    <b><?php echo $S5;?></b><br><?php if(isset($s5)){ echo $s50; } else { echo ''; }?><br><br>
                                    <b><?php echo $S6;?></b><br><?php if(isset($s6)){ echo $s60; } else { echo ''; }?><br><br>
                                 </p></td>
                            <td><h3>DETAILS</h3>
                                <p><b>Address</b><br><?php if(isset($addr)){ echo $addr; } else { echo 'Not Provided'; }?> <br><br>
                                    <b>Email</b><br><a href="mailto:<?php if(isset($eid)){ echo $eid; } else { echo ''; }?>?Subject=Hello%20again" target="_top"><?php if(isset($eid)){ echo $eid; } else { echo 'Not Provided'; }?></a> <br><br>
                                    <b>Phone</b><br><?php if(isset($phone)){ echo $phone; } else { echo 'Not Provided'; }?> <br><br>
                                </p><br><br><br><br><br><br><br><br><br></td>
                            <td align="center"><h3>PAST WORKS</h3>
                                <iframe width="500" height="300" src="<?php if(isset($pastwork)){ echo $pastwork; } else { echo ""; }?>" frameborder="0"></iframe>
                                <br><br><br><br><br><br><br></td>
                        </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                <td><input type="text" id="review" placeholder="Write a review" name="comments">
                    <label><i class="fa fa-picture-o" aria-hidden="true" style="font-size:30px; margin-left: 20px; position: relative; right:80px; top:8px;"></i><input type="file" name="img" id="img"></label>
                    <label><i class="fa fa-comment" aria-hidden="true" style="font-size:30px; margin-left: 20px; position: relative; top:8px;"></i><input type="submit" value="<?php echo $id;?>" name="post" style="display:none;"></label>
                    <label><i class="fa fa-upload" aria-hidden="true"style="font-size:30px; margin-left: 20px; position: relative; top:8px;"></i><input type="submit" value="<?php echo $id;?>" name="upload" style="display:none;"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width=100%>
                            <tr>
                                <td align="left"><div>

                                    <?php    
                                    $con1=mysqli_connect("localhost", "root", "","tourism_pal");
                                    $query3 = mysqli_query($con1, "SELECT * from vendors WHERE cid='$id'");
                                    $counter=mysqli_num_rows($query3);
                                    echo "<h3>ALL REVIEWS (".$counter.")</h3><br>";
                                    ?>

                                    <nav style='overflow-y: scroll; overflow-x: hidden; height: 500px; width: 620px; background-color: rgba(255,255,255, 0.3);'>
                                        <ul style="width: 600px; list-style-type:none;">
                                            <?php    
                                                $con2=mysqli_connect("localhost", "root", "","tourism_pal");
                                                $query4 = mysqli_query($con2, "SELECT * from vendors WHERE cid='$id' and img is NULL");;
                                                while($row1 = mysqli_fetch_array($query4)){
                                                    echo "<li>".$row1['comments']."</li>";
                                                    echo "<hr style='margin-left: -50px; margin-bottom: 30px;'>";
                                                }
                                            ?>

                                            <?php  
                                                $con3=mysqli_connect("localhost", "root", "","tourism_pal");
                                                $query5 = mysqli_query($con3, "SELECT * FROM vendors WHERE cid='$id' and comments is NULL");  
                                                while($row2 = mysqli_fetch_array($query5))  
                                                {  
                                                    echo '<li><img src="data:image/jpeg;base64,'.base64_encode($row2['img'] ).'" width="300"/><li>';  
                                                    echo "<hr style='margin-left: -50px; margin-bottom: 30px;'>";
                                                }  
                                            ?>
                                        </ul>
                                    </nav>     
                                    </div></td>

                                            <?php 
                                                printf('<div style="display:none">');
                                                    $con10=mysqli_connect("localhost", "root", "","tourism_pal");
                                                    $query10 = mysqli_query($con10, "SELECT * from vendors WHERE cid='$id'");
                                                    while($row10 = mysqli_fetch_array($query10)){
                                                        $comm= $row10['comments'];
                                                    }
                                                    include ('lib/sentiment_analyser.class.php');
                                                    $sa = new SentimentAnalysis();
                                                    $sa->initialize();
                                                    $sa->analyse("$comm");
                                                    $score = $sa->return_sentiment_rating();
                                                printf('</div>');
                                            ?>

                                <td align="right">
                                    <table>
                                        <tr>
                                            <td colspan="2"><h1 style="font-size: 100px; font-weight: normal; text-align: center;"><?php if(isset($score)){ echo $score; } else { echo 'Review '; }?></h1></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><img src="icon/star.png" alt="" style="width: 50px; height: 50px; " >
                                                <img src="icon/star.png" alt="" style="width: 50px; height: 50px; " >
                                                <img src="icon/star.png" alt="" style="width: 50px; height: 50px; " >
                                                <img src="icon/star.png" alt="" style="width: 50px; height: 50px; " >
                                                <img src="icon/star.png" alt="" style="width: 50px; height: 50px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Responsiveness</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Professionalism</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Value</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Flexibility</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Behaviour</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                   <td><div><h3>SERVICE REQUIREMENTS</h3>
                        <p>Leave blank if you are not sure. You can discuss with your Package manager & finalize, to receive the quote from the vendors. You have cancel your order before 30 days on the date of travel plan and the cancellation charges is 25% of total packages price.</p>
                        </div></td>
                </tr>
                <tr>
                    <td>
                        <table width=100%>
                            <tr>
                                <td><table width=100% cellspacing="20">
                                        <caption><b>SELECT SERVICE TYPE</b></caption>
                                        <tr>
                                            <td><?php echo $S1;?></td>
                                            <td><button type="button" id="add"  onclick="clickcounter()">ADD</button></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $S2;?></td>
                                            <td><button type="button" id="add1" onclick="clickcounter1()">ADD</button></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $S3;?></td>
                                            <td><button type="button" id="add2" onclick="clickcounter2()">ADD</button></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $S4;?></td>
                                            <td><button type="button" id="add3" onclick="clickcounter3()">ADD</button></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $S5;?></td>
                                            <td><button type="button" id="add4" onclick="clickcounter4()">ADD</button></td>
                                        </tr>
                                    </table></td>
                                <td align="right"><table cellspacing="10" style="width: 500px;">
                                        <caption><b>SELECT PAYMENT METHOD</b></caption>
                                        <tr>
                                            <td><input type="radio" name="pay" id="pay"></td>
                                            <td>UPI</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="pay" id="pay"></td>
                                            <td>Add Credit/Debit Card</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="pay" id="pay"></td>
                                            <td>Net Banking</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="pay" id="pay"></td>
                                            <td>Direct Payment</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><input type="button" value="PAY" id="button" style="height: 50px; width: 100px; font-size: 20px;" onclick="payment();"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p id="message"></p></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
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

        <!--?rel=0;&autoplay=1&mute=1&loop=1-->
        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
     
    </body>
  </html>
