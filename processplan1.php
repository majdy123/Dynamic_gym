<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Flow field n.2</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">
    <link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <script defer src="..fontawesome-free-5.15.4-web/js/brands.js"></script>
    <script defer src="..fontawesome-free-5.15.4-web/js/solid.js"></script>
    <script defer src="..fontawesome-free-5.15.4-web/js/fontawesome.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    *{
        user-select: none;
    }
    @font-face {
        font-family: 'myfont';
        src: url('ZenKurenaido-Regular.ttf');
    }
    .buttonback{
        background-color: transparent;
        transition: 0.8s;
        font-size: 18px;
        color: white;
        font-family: myfont;
        border-radius: 30px;
        border: 2px solid rgb(251,91,33);
    }
    .buttonback:hover{
        background-color: rgb(251,91,33);
        color: black;
    }

</style>
</head>
<input id="user" type="hidden" name="user">

<script>
    var myData = getQueryVariable("variable");
    if(myData){
        console.log(myData);//to verify it

        document.getElementById('user').value=myData;
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
<?php
error_reporting(0);

$username=$_POST['uer'];
$plan_id = $_POST['planpicker'];
$database = new mysqli('localhost', 'root', '', 'gymedge');
$queryStr2 = "UPDATE `member` SET `have_a_plan`=1 , `plan_id`= '$plan_id' WHERE `username`='$username'";
$database->query($queryStr2);
$database->commit();
$database->close();
?>
<script src="js/bootstrap.bundle.min.js"></script>
<body>
<div style="position: absolute;display:flex;justify-content: center;width: 100vw;height: 20vh">
    <button onclick="back()" class="buttonback" style="margin-top: 40vh;height: 50px;width: 150px">Back To Sign In</button>
</div>
<script>
    function back(){
        window.location.href=("http://localhost/project/Web%20Project/signin.php");
    }
</script>
<div>

        <button style="display: none" id="btntrigger" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
        <div style="color: black;height: 500px;background-position: right;background-size: contain;background-repeat: no-repeat;background-image: url('MyCss/imgesStyle/runer.jpg')" class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
                <h3 style="font-family: myfont" class="offcanvas-title" id="offcanvasBottomLabel">Waiting Your Plan</h3>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div style="font-family: myfont ; font-size: 20px" class="offcanvas-body small">
                Your Plan has Submitted!.
                waiting for the Admin to make it Ready For you!
            </div>
        </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.10.2/p5.min.js'></script><script  src="./script.js"></script>
</div>
</body>
<script>
    document.getElementById('btntrigger').click();
</script>
</html>
