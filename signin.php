<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin</title>
    <link rel="stylesheet"  href="MyCss/homestyle.css">

</head>

<body id="body">
<?php
//$database = new mysqli('localhost','root','','gymedge');
//$queryStrperson = "Select * from person";
//$queryStrmember = "Select * from member";
//$queryStradimn = "Select * from admin";
//$resultperson = $database->query($queryStrperson);
//$resultmember = $database->query($queryStrmember);
//$resultadmin = $database->query($queryStradimn);
//foreach ($resultperson as $person){
//    $checker = 0;
//    foreach ($resultadmin as $admin){
//        if($person['username']==$admin['username']){
//            $checker=1;
//        }
//    }
//    foreach ($resultmember as $member){
//        if($person['username']==$member['username']){
//            $checker=1;
//        }
//    }
//    if($checker==0){
//        //Delete this data
//        $name = $person['username'];
//        $qurydelete = "DELETE FROM `member` WHERE username =.'$name'.";
//        $qurydelete = "DELETE FROM `person` WHERE username =.'$name'.";
//        $resultperson = $database->query($qurydelete);
//        $database->commit();
//    }
//}
//$database->commit();
//$database->close();
?>

    <div id="anim" class="fit"style="z-index: -1">
        <div style="color:#000;top: 416px;left: 770px;position: absolute;z-index: 5" class="table2">
            <button name="signbutt" id="button1" onclick="location.href ='http://localhost/project/Web%20Project/signUP.php'">Sign Up</button>

        </div>
        <form action="Home.php" method="post">
            <img src="Iconss\logohome1.png" class="logo">
            <div style=" user-select: none ;margin-bottom:100px">
                <h1 style="
            color : transparent;
            -webkit-text-stroke: 1px transparent;
            background-image:url('Iconss/backh1.png');
            -webkit-background-clip: text;
            background-position: 0 0;
            animation: back 20s linear infinite;
            top: 120px;
            display: inline-block;
            }
            position: absolute;
                                  ">GYM EDGE</h1>
            </div>
            <div class="outerdiv">
                <div class="signin-panel">
                    <table class="tabel1"  style="user-select: none">
                        <tr style="padding-top: 20px;">
                            <td style=" user-select: none"><span style="color: rgb(251,91,33)">User</span><span style="color: white"> Name</span></td>
                            <td>
                                    <input id="txt1" class="textfiled"  type="text" name="uname"></span><br>
                            </td>
                        </tr>
                        <tr >
                            <td style="text-align: center;padding-bottom: 45px"><span style="color: rgb(255,255,255)">Pass</span><span style="color: #fb5b21">word</span></td>
                            <td>
                                    <input id="txt2"  class="textfiled"   type="password"  name="pass"><br>
                                    <span class="forgetpass">Forget password</span>
                            </td>
                        </tr>
                    </table>
                <table  class="table2" >
                    <tr style="display: flex">
                        <td><button name="logbutt" id="button2"  type="submit">Log in</button></td>
                        <td></td>
                    </tr>
                </table>
                </div>

                </div>
        </form>

    </div>
    <script src="javascript/script1back.js"></script>
    <script src="javascript/script2back.js"></script>
    <script>
        VANTA.NET({
            el: "#anim",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x0,
            backgroundColor: 0xffffff,
            points: 20.00,
            maxDistance: 28.00,
            spacing: 12.00
        })
    </script>

</body>
</html>