<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calories</title>
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
<div class="calwallpaper" id="background12">
    <div class="child" id="asd">
        <h1 class="calcalu"><span style="color: rgb(251,91,33)">Calculate</span> <span style="color: rgb(255,255,255)">Your Need</span> <span style="color: rgb(123,123,123)">!</span></h1>
        <!--  <script type="text/javascript" async id="bmr-calculator" data-type="verywell-tool" data-vertical="verywellfit" src="https://www.verywellfit.com/static/4.257.0/components/tools/calculators/iframe-embed/embed.min.js?id=bmr-calculator"></script>-->
        <form class="BMRform" method="post" action="Fat%20Calculator.php">
            <table class="BMRtabel">
                <tr>
                    <td class="labels">
                        Weight <i class="fas fa-weight labelsicon"></i>
                    </td>
                    <td>
                        <input required name="weight" min="40" max="120" class="numberin" id="weight" placeholder="Enter Your Weight in KG"  type="number">
                    </td>
                </tr>
                <tr>
                    <td class="labels">
                        Height <i class="fas fa-arrows-alt-v labelsicona"></i>
                    </td>
                    <td>
                        <input required name="height" min="150" max="210"  class="numberin" id="height" placeholder="Enter Your Height in CM" type="number">
                    </td>
                </tr>
                <tr>
                    <td class="labels">
                        Age<i class="fas fa-calendar-week labelsicon"></i>
                    </td>
                    <td>
                        <input required name="age" min="17" max="50"  class="numberin" id="age" placeholder="Enter Your Age" type="number">
                    </td>
                </tr>
                <tr>
                    <td class="labels">
                        Gender<i class="fas fa-venus-mars labelsicon"></i>
                    </td>
                    <td>
                        <div class="radiobut">
                            <input class="roundedradio" type="radio" name="gender" value="female" id="female">
                            <i class="fas fa-female labelsicon"></i>
                            <label for="female">Female</label>
                            <input class="roundedradio" type="radio" name="gender" value="male" id="male">
                            <i class="fas fa-male labelsicon" ></i>
                            <label for="male">Male</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i style="font-size: 30px;margin-right: 5px" class="fas fa-calculator labelsicon"></i><input class="submitbut" type="submit" value="Calculate  ">
                    </td>
                    <td>
                        <p class="resultBMR">
                            <?php
                            error_reporting(0);
                            $height = $_POST['height'];
                            $weight = $_POST['weight'];
                            $age = $_POST['age'];
                            $height=$height/100;
                            $bmi =($weight)/pow((($height)),2);
                            if($_POST['gender']=="female"){
                                $answer = number_format((float)($bmi*1.2 + 0.23*$age -5.4), 2, '.', '');
                                echo " Fat Percentage ".'<span style="color:#fd7e14">'.$answer.'</span>';
                            }
                            else {
                                $answer = number_format((float)($bmi*1.2 + 0.23*$age -16.2), 2, '.', '');
                                echo " Fat Percentage ".'<span style="color:#fd7e14">'.$answer.'</span>';
                            }

                            ?>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>







</body>
</html>