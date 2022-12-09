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
<script src="js/bootstrap.bundle.min.js"></script>
<body  style="background-attachment: fixed; overflow-x: hidden">
<?php
$database = new mysqli('localhost', 'root', '', 'gymedge');
$queryStr = "Select * from member";

?>
<input id="hvpln" type="hidden" name="haveplan">

<script>
    var myData = getQueryVariable("variable");
    if(myData){
        console.log(myData);//to verify it

        document.getElementById('hvpln').value=myData;
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