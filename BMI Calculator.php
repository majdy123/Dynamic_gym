<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="MyCss/Westyle.css">
    <link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <script defer src="..fontawesome-free-5.15.4-web/js/brands.js"></script>
    <script defer src="..fontawesome-free-5.15.4-web/js/solid.js"></script>
    <script defer src="..fontawesome-free-5.15.4-web/js/fontawesome.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="js/bootstrap.bundle.min.js"></script>
<body>
<div class="wallpaper">
<div class="centerdiv">
    <span><span style="color:rgb(251,91,33);">BMI</span> Calculator </span>
    <form class="BMI" method="post" action="BMI%20Calculator.php">
        <?php
        error_reporting(0);
        $height = $_POST['Height'];
        $weight = $_POST['Height'];
        $height = $height/100;
        ?>
        <table class="bmitabel">
            <tr>
                <td>
                </td>
                <td>
                    <label for="Weight">Weight : </label>
                    <input  name="Weight" id="Weight" required value="weight" class="inputclac" type="number" max="200" min="40" maxlength="3" placeholder="Enter Your Weight in KG">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <label for="Height">Height : </label>
                    <input name="Height" id="Height" required value="height" class="inputclac" type="number" min="100" max="200" maxlength="3" placeholder="Enter Your Height in cm">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td style="display: flex; justify-content: right">
                    <input id="butonsumbmitmbi" style="border: 1px solid rgb(220, 63, 8); background-color: rgb(220, 63, 8); color: white; border-radius: 15px;" class="inputclac" type="submit" value="Calculate">
                </td>
            </tr>
        </table>
    </form>
    <p class="result">
        <?php
        $result =($weight)/pow((($height)),3);
        echo number_format((float)$result, 2, '.', '');
        ?>
        <link rel="stylesheet" href="MyCss/Westyle.css">
    </p>
</div>
</div>
</body>
</html>