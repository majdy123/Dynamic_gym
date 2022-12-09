<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account</title>
    <link rel="stylesheet" href="personal%20account.css">
    <link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <script defer src="..fontawesome-free-5.15.4-web/js/brands.js"></script>
    <script defer src="..fontawesome-free-5.15.4-web/js/solid.js"></script>
    <script defer src="..fontawesome-free-5.15.4-web/js/fontawesome.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    </head>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
<style>
    /* Cool infinite background scrolling animation.
     * Twitter: @kootoopas
     */
    /* Exo thin font from Google. */
    @import url(https://fonts.googleapis.com/css?family=Exo:100);
    /* Background data (Original source: https://subtlepatterns.com/grid-me/) */
    /* Animations */
    @-webkit-keyframes bg-scrolling-reverse {
        100% {
            background-position: 50px 50px;
        }
    }
    @-moz-keyframes bg-scrolling-reverse {
        100% {
            background-position: 50px 50px;
        }
    }
    @-o-keyframes bg-scrolling-reverse {
        100% {
            background-position: 50px 50px;
        }
    }
    @keyframes bg-scrolling-reverse {
        100% {
            background-position: 50px 50px;
        }
    }
    @-webkit-keyframes bg-scrolling {
        0% {
            background-position: 50px 50px;
        }
    }
    @-moz-keyframes bg-scrolling {
        0% {
            background-position: 50px 50px;
        }
    }
    @-o-keyframes bg-scrolling {
        0% {
            background-position: 50px 50px;
        }
    }
    @keyframes bg-scrolling {
        0% {
            background-position: 50px 50px;
        }
    }
    /* Main styles */
    body {
        margin-top: 13.5rem;
        color: #999;
        font: 400 16px/1.5 exo, ubuntu, "segoe ui", helvetica, arial, sans-serif;
        text-align: center;
        /* img size is 50x50 */
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
        -webkit-animation: bg-scrolling-reverse 0.92s infinite;
        /* Safari 4+ */
        -moz-animation: bg-scrolling-reverse 0.92s infinite;
        /* Fx 5+ */
        -o-animation: bg-scrolling-reverse 0.92s infinite;
        /* Opera 12+ */
        animation: bg-scrolling-reverse 0.92s infinite;
        /* IE 10+ */
        -webkit-animation-timing-function: linear;
        -moz-animation-timing-function: linear;
        -o-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    body::before {
        font-family: myfont;
        content: "Change your Password";
        font-size: 30px;
        color: black;
        font-style: normal;
    }
    table tr td{
        width: 150px;
        height: 50px;
    }
    .sub{
        border: 2px solid rgb(251,91,33);
        border-radius: 20px;
        font-size: 15px;
        width: 150px;
        background-color: transparent;
        height: 30px;
        transition: 0.8s;
    }
    .sub:hover{
        background-color: rgb(251,91,33);
        color: black;
    }
</style>
<script src="js/bootstrap.bundle.min.js"></script>
<body>
<?php
error_reporting(0);
$user = $_POST['username'];
if(isset($_POST['submit'])){
    if($_POST['pass1']==$_POST['pass2']){
        /*the right folder*/
        error_reporting(0);
        $username = $_POST['username'];
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Select * from member";
        $result = $database->query($queryStr);
        foreach ($result as $row){
        if($row['username']==$username){
            $pass=$_POST['pass1'];

            $queryStr2 = "UPDATE `member` SET `password`='$pass' WHERE username = '$username'";
            $result = $database->query($queryStr2);
            $database->commit();
            $database->close();
            echo '<script>alert("Password changed successfly")</script>';
            echo '<script>window.close()</script>';
        }
        }
        }
    else{
        echo '<script>alert("Someting WentWrong")</script>';
        
    }

}
else echo '<script>"echo Check password"</script>'
?>
<?php
error_reporting(0);
$user = $_POST['username'];
if(isset($_POST['submit'])){
    if($_POST['pass1']==$_POST['pass2']){
        /*the right folder*/
        error_reporting(0);
        $username = $_POST['username'];
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr1 = "Select * from admin";
        $result1 = $database->query($queryStr1);
        foreach ($result1 as $row){
            if($row['username']==$username){
                $pass=$_POST['pass1'];
                $queryStr2 = "UPDATE `member` SET `password`='$pass' WHERE username = '$username'";
                $result = $database->query($queryStr2);
                $database->commit();
                $database->close();
                echo '<script>alert("Password changed successfly")</script>';
                echo '<script>window.close()</script>';
            }
        }
    }
    else{
        echo '<script>alert("Someting WentWrong")</script>';

    }

}
else echo '<script>"echo Check password"</script>'
?>
<form method="post">
    <div style="display: flex ;flex-direction: column">
        <table style="margin-left: 400px;margin-right: 400px;margin-top: 100px">
            <tr>
                <td><label for="pass1">New Password  :</label></td>
                <td></td>
                <td><input style="background-color: transparent; border-radius: 20px;" id="pass1" type="password" name="pass1"></td>
            </tr>
            <tr>
                <td><label for="pass2">Conform Password :</label></td>
                <td></td>
                <td><input style="background-color: transparent; border-radius: 20px;" id="pass1" type="password" name="pass2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input name="submit" value="ChangePass" type="submit" class="sub"></td>
                <td> <input id="aaa"  name="username" type="hidden" class="username"></td>
            </tr>
        </table>
    </div>
</form>
<script>
    var myData = getQueryVariable("variable");
    if(myData){
        console.log(myData);//to verify it

        document.getElementById('aaa').value=myData;
    }

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("?");

        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        console.log('Query Variable ' + variable + ' not found');
    }
</script>

</body>
</html>