<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GYM Edge</title>
  <link rel="stylesheet" href="MyCss/home.css">
    <link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <script defer src="..fontawesome-free-5.15.4-web/js/brands.js"></script>
    <script defer src="..fontawesome-free-5.15.4-web/js/solid.js"></script>
    <script defer src="..fontawesome-free-5.15.4-web/js/fontawesome.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
<script src="js/bootstrap.bundle.min.js"></script>
<?php
error_reporting(0);
$username = $_POST['uname'];
$pass = $_POST['pass'];
$flag=0;
$flag_plans = 0;
$flag_button_plan = 0;
if (isset($_POST['logbutt'])) {
    echo '
    <script>
    alert("Welcome !");
</script>
';
    $database = new mysqli('localhost', 'root', '', 'gymedge');
    $queryStr = "Select * from member";
    $queryStr2 = "Select * from admin";
    $result = $database->query($queryStr);
    $result2 = $database->query($queryStr2);
    foreach ($result as $row) {
        if ($row['username'] == $username) {
            if ($row['password'] == $pass) {
                $flag = 1;/*found it*/
                /*and hes a client */
                if($row['have_a_plan']==1){
                    //not having a plan

                    $flag_plans = 1;
                }
            }
        }

    }
    foreach ($result2 as $row2) {
        if ($row2['username'] == $username) {
            if ($row2['password'] == $pass) {
                $flag = 99;/*found it*/
                /*and hes a client */
                $flag_plans = 1;
                $flag_button_plan = 1;
            }
        }
    }


}
if ($flag == 99){
    echo '
                <script>
                document.getElementById("cardio").style.display="none";
                document.getElementById("personal").style.display="none";
                document.getElementById("A").style.display="none";
                </script>
                ';
}
elseif ($flag == 0) {
    echo '
                        <script>
                        document.getElementById("spanErorr").innerText ="This Account is not exists";
                        </script>
                        ';
    header('Location: http://localhost/project/Web%20Project/signin.php');
}
else {
    /* Log in to your Profile Current Page */
    echo '
                <script>
                document.getElementById("N").style.display="none";
                document.getElementById("profile").style.display="none";
                </script>
                ';
}

//    //Now Checking the Sign up Button
//    if (isset($_POST['signbutt'])) {
//        /* Start the Sign-up screen */
//        header('Location: http://localhost/project/Web%20Project/signin.php');
//    }

?>
<body id="startpoint">



<!-- Slider show  -->

    <div onselectstart='return false;' id="carouselExampleCaptions" class="carousel slide sliderabs" data-bs-ride="carousel " >

        <div class = "home">
            <div>
                <img src="Iconss\logohome.png" class="logo"></div>
            <div class = "bar">

        <span class="spanbar" id="W">Setting's
        <div class="spandiv" id="work">
<!--                <li id="profile" class="listelement"><a target="_blank" href="Profile.html">Profile</a></li>-->
                <li class="listelement"><a type="submit" value="chpass" name="userpass" target="_blank" href="changepass.php?variable=<?php echo$username ?>">Change Pass</a></li>
                <li  id="personal" class="listelement"><a type="submit" value="Personal" name="user" target="_blank" href="personal%20account.php?variable=<?php echo$username ?>">Personal</a></li>

        </div>

        </span>
                <span class="spanbar" id="N">Plan's
         <div class="spandiv" id="nut">
                <li id="cardio" class="listelement"><a target="_blank" href="Cardio.html">Cardio Plan's</a></li>
                <li class="listelement"><a target="_blank" href="Workoutplan.php">Workout Plan's</a></li>
<!--                <li class="listelement"><a target="_blank" href="Nutplan.html">Nutrition Plan's</a></li>-->
        </div>

        </span>
                <span class="spanbar" id="el">Element
         <div class="spandiv" id="element">

                <li class="listelement"><a target="_blank" href="BMI%20Calculator.php">BMI Calculator</a></li>
                <li class="listelement"><a target="_blank"  href="Fat%20Calculator.php">Fat Calculator</a></li>
                <li class="listelement"><a target="_blank"  href="Cal%20Calculator.php">Cal Calculator</a></li>

        </div>

        </span>
                <span class="spanbar" id="A">About
          <div class="spandiv" id="about">

                <li class="listelement"><a href="we.html" target="_blank">Who we are ?</a></li>
                <li class="listelement"><a href="Rate.html" target="_blank">Rate Us!</a></li>

        </div>
        </span>
                <span class="spanbar" id="H" onclick="window.location.href='http://localhost/project/Web%20Project/signin.php';">Exit

                    <div class="spandiv" id="home"></div>

        </span>

            </div>


        </div>
        <div  class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <form action="MY_PLAN_User.php" method="post">
        <div  class="buttout">
            <h1 id="animtext" class="class1home" onselectstart='return false;'>
                <span style="color:  rgb(251,91,33);">Build </span>Your <span style="color:  rgb(251,91,33);">Body</span></span> Strong</h1>
            <div class="class1home">
            <button type="submit" id="cenB"  onselectstart='return false;'>My Paln</button></div>
            </div>
<!--            onclick="location.href='MY_PLAN_User.php?variable=--><?php //echo$username ?><!--'"-->
            <input name="username" id="username" type="hidden" value="<?php echo $username ?>">
        </form>
        <!-- adding text animation script-->
        <script>
            const op = document.getElementById("animtext");
            op.addEventListener("animationend",listener,false);
            function listener (){
                op.style.letterSpacing = '0px';
            }

        </script>

        <?php
        if($flag_button_plan==1){
        echo '
        <script>
        document.getElementById("cenB").style.display="none";
        </script>
        ';}

        ?>


        <!-- calling Script-->
        <?php
        if ($flag_plans == 1){
            echo '
                <script>
                document.getElementById("buyplan").style.display="none";
                </script>
                ';
        }


        if ($flag == 99){
            echo '
                <script>
                document.getElementById("cardio").style.display="none";
                document.getElementById("personal").style.display="none";
                document.getElementById("A").style.display="none";
                </script>
                ';
        }
        elseif ($flag == 0) {
            echo '
                        <script>
                        document.getElementById("spanErorr").innerText ="This Account is not exists";
                        </script>
                        ';
            header('Location: http://localhost/project/Web%20Project/signin.php');
        }
        else {
            /* Log in to your Profile Current Page */
            echo '
                <script>
                document.getElementById("N").style.display="none";
                document.getElementById("profile").style.display="none";
                </script>
                ';
        }

        ?>
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: myfont; font-weight: bold; color: rgb(251,91,33);">Stop Wishing Start Doing</h5>
                    <p  style="font-family: myfont; font-weight: lighter; color:white">We train because fitness is one of those special things in life that you can’t buy, steal, or fake. There aren’t any rewards for complaining or failing, and fitness doesn’t care about your opinions or feelings.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: myfont; font-weight: bold; color: rgb(251,91,33);">No Pain No Gain</h5>
                    <p  style="font-family: myfont; font-weight: lighter; color:white">The last three or four reps is what makes the muscle grow. This area of pain divides a champion from someone who is not a champion.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: myfont; font-weight: bold; color: rgb(251,91,33);">Go After Your Dream</h5>
                    <p  style="font-family: myfont; font-weight: lighter; color:white">All progress takes place outside the comfort zone.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: myfont; font-weight: bold; color: rgb(251,91,33);">Go Harder !</h5>
                    <p  style="font-family: myfont; font-weight: lighter; color:white">Success is walking from failure to failure with no loss of enthusiasm.</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="img/5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: myfont; font-weight: bold; color: rgb(251,91,33);">No Pain No Gain</h5>
                    <p  style="font-family: myfont; font-weight: lighter; color:white">If you want something you’ve never had, you must be willing to do something you’ve never done</p>
                </div>
            </div>
            <div class="carousel-item" >
                <img src="img/6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: myfont; font-weight: bold; color: rgb(251,91,33);">Stop Wishing Start Doing</h5>
                    <p  style="font-family: myfont; font-weight: lighter; color:white">Well done is better than well said.</p>
                </div>
            </div>

        </div>
        <button    class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="custom"></span>
        </button>
        <button  class="carousel-control-next "type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="custom"></span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </button>
    </div>

<table class="sportsbar">
            <tr>
                <td style="position: relative" id="firstshaft">
                     <div id="whtplay" class="whattoplay">
                     <span class="spanplay">What to play <i id = "dumb" style="opacity: 0; color: white" class="fas fa-dumbbell">&nbsp;&nbsp;</i></span>
                    </div>
                </td>
                <td id="p2" class="tabeldata">
                    <div>
                        <h4>Body Building</h4>&nbsp;&nbsp;<i style="color: rgb(251,91,33)" class="fas fa-anchor"></i>
                        <p>The best plans for bulking under the supervision of coaches</p>
                    </div>
                </td>
                <td id="p3" class="tabeldata">
                    <h4>Fitness</h4>&nbsp;&nbsp;<i style="color: rgb(251,91,33)" class="fas fa-running"></i>
                    <p>Best plans to achieve the perfect cutting</p>
                </td>
                <td id="p4" class="tabeldata">
                    <h4>Slim body</h4>&nbsp;&nbsp;<i style="color: rgb(251,91,33)" class="fas fa-swimmer"></i>
                    <p>The best plans for achieving the best slim body</p>
                </td>
                <td id="p5" class="tabeldata">
                    <h4>Lifting</h4>&nbsp;&nbsp;<i style="color: rgb(251,91,33)" class="fas fa-fist-raised"></i>
                    <p>Increased lifting strength and endurance</p>
                </td>
            </tr>
        </table>
    <div class="ourprogram" id="outer">
        <div class="innerprog">
            <div style="display: inline-block; ">
            <div>
                <div style="margin: 60px">
            <h4 style="width: 50%; font-weight: bold; color: black;font-size: 40px;margin-left: 10px; margin-top: 10px" >Our Program</h4>
                </div>
                <table style="height: 100%;width: 50%; ">
                    <tr style="margin-top: 50px">
                        <td>
                            <div>
                                <img src="bodes/Gain%20Muscle%20Mass.png">
                            </div>
                            <h4>Weight Lifting</h4>
                            <p>Increase endurance and lift weights effectively and dramatically in the shortest possible period through violent exercises</p>
                        </td>
                        <td>
                            <div>
                                <img src="bodes/Body%20Builder.png">
                            </div>
                            <h4>Body Building</h4>
                            <p>Plans to gain weight and gain large muscle mass in the shortest possible time under the supervision of professional trainers</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <img src="bodes/Athlete.png">
                            </div>
                            <h4>Athlete</h4>
                            <p>Become an athlete who combines agility and strength</p>
                        </td>
                        <td>
                            <div>
                                <img src="bodes/Lose%20Weight.png">
                            </div>
                            <h4>Lose Weight</h4>
                            <p>Lose weight and remove fat within a quick period of time through cardio exercises</p>
                        </td>
                        <td>

                    </tr>
                </table>
            </div>

                <form  id="discussionForm" method="POST" enctype="multipart/form-data" action="http://localhost/project/Web%20Project/processplan1.php?variable=<?php echo$username; ?>'">
                <!--            //*****************-->
                <button id="buyplan" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"
                style="background-color: transparent;border: rgb(251,91,33) 2px solid; border-radius:30px;color: black;
                    transition: 0.8s">Take plan</button>
                <div style=";border-top:rgb(123,123,123) 1px dashed ;border-left:rgb(123,123,123) 1px dashed ; height:37vw" class="offcanvas offcanvas-top " tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                    <div style="width: 80vw;height: 30vh" class="offcanvas-header">
                        <span class="picktit" style="font-size: 30px; font-family: myfont2" id="offcanvasTopLabel">Pick a plan</span>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div style="display: flex; flex-direction: column">
                            <div class="labelphoto1">
                                <input id="plan1" type="radio" value="1"  name="planpicker">
                                <span class="spanplanname">Body Builder</span>
                                <label for="plan1" class=""><img src="MyCss/imgesStyle/BODYBUILDER.png"></label>
                            </div>
                            <div class="labelphoto1">
                                <input id="plan2"  type="radio" value="2"  name="planpicker">
                                <span class="spanplanname">Slim Shredded Body</span>
                                <label for="plan2" class=""><img src="MyCss/imgesStyle/SLIM_SHREDDED_BODY.png"></label>
                            </div>
                            <div class="labelphoto1">
                                <input id="plan3"  type="radio" value="3"  name="planpicker">
                                <span class="spanplanname">Workout Body</span>
                                <label for="plan3" class=""><img src="MyCss/imgesStyle/WORKOUT_BODY.png"></label>
                            </div>
                            <div class="labelphoto1">
                                <input id="plan4"  type="radio" value="4"  name="planpicker">
                                <span class="spanplanname">Athlete Body</span>
                                <label for="plan4" class=""><img src="MyCss/imgesStyle/ATHLETE.png"></label>
                            </div>
                            <div class="labelphoto1">
                                <input id="plan5"  type="radio" value="5"  name="planpicker">
                                <span class="spanplanname">BEACH BODY</span>
                                <label for="plan5" class=""><img src="MyCss/imgesStyle/BEACH_BODY.png"></label>
                            </div>
                            <div class="labelphoto1">
                                <input id="plan6"  type="radio" value="6"  name="planpicker">
                                <span class="spanplanname">Hero</span>
                                <label for="plan6" class=""><img src="MyCss/imgesStyle/HERO.png"></label>
                            </div>
                            <div class="labelphoto1">
                                <input id="plan7"  type="radio" value="7"  name="planpicker">
                                <span class="spanplanname">Cross Fit Body</span>
                                <label for="plan7" class=""><img src="MyCss/imgesStyle/CROSS_FIT_BODY.png"></label>
                            </div>
                            <div class="labelphoto1">
                                <input id="plan8"  type="radio" value="8"  name="planpicker">
                                <span class="spanplanname">Slim Body</span>
                                <label for="plan8" class=""><img src="MyCss/imgesStyle/SLIM_BODY.png"></label>
                            </div>
                            <div class="labelphoto1">
                                <input  class="buyplan" value="Buy Paln"  type="submit" style=" width: 160px; border-radius: 15px">
                                <input name="uer" type="hidden" value="<?php echo $username;?>">
                            </div>
                        </div>
                    </div>
                </div>
                <!--            //*****************-->

                </form>
                <?php
                if ($flag_plans == 1){
                    echo '
                                        <script>
                                        document.getElementById("buyplan").style.display="none";
                                        </script>
                                        ';
                }
                ?>




        </div>
            <div style="padding-right: 20%;width: 50%;height: 100%;left: 50%;top:0;position: absolute">
                <div style=" padding-top: 50%;margin-bottom: 40%">
                    <img src="being-builder.png">
                </div>
                <div style="width: 130%; padding-left: 50%;text-align:center; font-family: myfont;
                    font-size: 40px"><span style="color: rgb(251,91,33)">NO</span> Pain <span style="color: rgb(251,91,33)">NO</span> Gain</div>
            </div>
        </div>
    </div>
    <div class="Ad1" >
        <div onselectstart='return false;' style="margin-top:85px;font-size: 60px;color:rgba(255,255,255,0.8);">Get More Shredded</div>
    </div>
    <div class="spacebet1">
        <p style="color: black; font-size:30px">The Developing Team</p>
        <table>
            <tr>
                <td>
                    <p>Majdy Sabra</p>
                </td>
                <td>

                </td>
                <td>
                     <p>Khalid Jabr</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="span1"></div>
                </td>
                <td>
                    <div class="span3"></div>
                </td>
                <td>
                    <div class="span2"></div>
                </td>
            </tr>
        </table>
    </div>

    <div class="Ad2">
        <div style="position: relative">

        <div id="paragraph1">
        </div>
            <div class="middiv">
                <p style="font-size: 25px;font-weight: lighter; ">
                    <span style=" color:rgb(251,91,33)">Gym</span> edge offers you a professional and innovative <br>training program with which you can<span style="color: rgb(251,91,33);"> improve your performance in sport and your fitness</span> in everyday life.
                </p>
            </div>

          <!--  <tabel>
                <tr id="crphotofa">
                    <td class="crphotos">
                        a
                    </td>
                    <td class="crphotos">
                        a
                    </td>
                    <td class="crphotos">
                        a
                    </td>
                    <td class="crphotos">
                        a
                    </td>
                </tr>
            </tabel> -->
        <div id="paragraph2">

        </div>

            <div class="middiv2">
                <p style="font-size: 40px;font-weight: lighter;color: black ">
                    OUR EXPERT TRAINERS
                </p>
                <table>
                    <tr>
                        <td><div class="puta"> <div class="coatch1"><p style="color: black; font-weight: lighter" class="sara">no pain no gain</p></div><p id="whatcoatchdo1" >Fitness Trainer</p><p class="names">Sara</p></div></td>
                        <td><div class="puta"><div class="coatch2"><p style="color: black; font-weight: lighter" class="jon">this body need to burn</p></div><p id="whatcoatchdo2" >Athletics Trainer</p><p class="names">Jon</p></div></td>
                        <td><div class="puta"><div class="coatch3"><p style="color: black; font-weight: lighter" class="mia">Train you brain</p></div><p id="whatcoatchdo3" >Yoga Trainer</p><p class="names">Mia</p></div></td>
                        <td><div class="puta"><div class="coatch4"><p style="color: black; font-weight: lighter"  class="david">Let's Gain!</p></div><p id="whatcoatchdo4" >Gainer Trainer</p><p class="names">David</p></div></td>
                    </tr>
                    <tr>
                    </tr>
                </table>
            </div>
            <div id="paragraph3">

            </div>
            <div class="middivmodify">
                <p style="font-size: 50px;font-weight: lighter;color: black">
                    Start your journey now
                </p>
            </div>

            <div id="paragraph4">

            </div>
            <div class="middivmodify2">
                <div class="infocompclass">
                    <div style="height: 20px"></div>
                    <table>
                        <tr>
                            <td style="color:rgb(251,91,33) ">About Company</td>
                            <td style="color:rgb(251,91,33) ">Corporate Office</td>
                        </tr>
                        <tr>
                            <td>Praesent vel rutrum purus. Nam vel dui eu risus duis dignissim <br>dignissim. Suspen disse at eros tempus, congueconsequat.Fusce sit amet urna <br> feugiat.Praesent vel rutrum purus. Nam vel dui eu  <br>risus.</td>
                            <td>
                                <ul style="list-style-type: none">
                                    <li><i style="color:rgb(251,91,33) " class="fas fa-paper-plane">  </i>  44 New Design Street, rne 005</li>
                                    <li><i  style="color:rgb(251,91,33) " class="fas fa-phone"></i>01800433633</li>
                                    <li><i style="color:rgb(251,91,33)" class="far fa-envelope"></i> info@gymedge.com</li>
                                    <li><i style="color:rgb(251,91,33)" class="fas fa-fax"></i> (123) 118 9999</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="folterinfoclass">
                    <a style="color: white;border-bottom:0px; text-decoration: none;margin-top: 10px" href="#startpoint"><i  style="width: 40px; border: 1px solid  rgb(251,91,33); font-size: 25px; color: rgb(251,91,33); margin-right: 20px" class="fas fa-angle-double-up"></i> </a>© Copyright GymEdge 2016. All Right Reserved. Designed and Developed by RadiusTheme
                </div>
            </div>

        </div>
    </div>
<script src="javascript/HomescriptArrow.js"></script>
</body>
</html>