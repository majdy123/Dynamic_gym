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
<div class="calwallpaper" id="background">
    <div class="child" id="asd">
        <h1 class="calcalu"><span style="color: rgb(251,91,33)">Calculate</span> <span style="color: rgb(255,255,255)">Your Need</span> <span style="color: rgb(123,123,123)">!</span></h1>
      <!--  <script type="text/javascript" async id="bmr-calculator" data-type="verywell-tool" data-vertical="verywellfit" src="https://www.verywellfit.com/static/4.257.0/components/tools/calculators/iframe-embed/embed.min.js?id=bmr-calculator"></script>-->
        <form class="BMRform" method="post" action="Cal%20Calculator.php">
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
                    <td></td>
                    <td>
                        <div class="radiobut1">
                            <input required name="active" type="radio" id="Sedentary/Inactive" value="Sedentary/Inactive">
                            <i class="fas fa-bed labelsicon"></i>
                            <label for="Sedentary/Inactive">Sedentary/Inactive</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="radiobut1">
                            <input required name="active" type="radio" id="Lightly Active" value="Lightly Active">
                            <i class="fas fa-briefcase labelsicon"></i>
                            <label for="Lightly Active">Lightly Active</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="labels">Active Level <i class="fas fa-chart-line labelsicon"></i></td>
                    <td>
                        <div class="radiobut1">
                            <input required name="active" type="radio" id="Moderately Active" value="Moderately Active">
                            <i class="fas fa-running labelsicon"></i>
                            <label for="Moderately Active">Moderately Active</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="radiobut1">
                            <input required name="active" type="radio" id="Heavily Active" value="Heavily Active">
                            <i class="fas fa-dumbbell labelsicon"></i>
                            <label for="Heavily Active">Heavily Active</label>
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
                            $active = $_POST['active'];
                            if($_POST['gender']=="female"){
                                $bmr = $weight*10 + $height*6.25 - 5*$age -161;
                                //echo number_format((float)$bmr, 2, '.', '');
                                if($active=="Sedentary/Inactive"){
                                    $ans_low=$bmr*1.2;
                                    $ans_hi=$bmr*1.5;
                                }
                                elseif($active=="Lightly Active"){
                                    $ans_low=$bmr*1.379;
                                    $ans_hi=$bmr*1.6;
                                }
                                elseif($active=="Moderately Active"){
                                    $ans_low=$bmr*1.55;
                                    $ans_hi=$bmr*1.7;
                                }
                                elseif($active=="Heavily Active"){
                                    $ans_low=$bmr*1.9;
                                    $ans_hi=$bmr*2;
                                }
                            }
                            else {
                                $bmr = $weight * 10 + $height * 6.25 - 5 * $age + 5;
                                if($active=="Sedentary/Inactive"){
                                    $ans_low=$bmr*1.2;
                                    $ans_hi=$bmr*1.5;
                                }
                                elseif($active=="Lightly Active"){
                                    $ans_low=$bmr*1.379;
                                    $ans_hi=$bmr*1.6;
                                }
                                elseif($active=="Moderately Active"){
                                    $ans_low=$bmr*1.55;
                                    $ans_hi=$bmr*1.7;
                                }
                                elseif($active=="Heavily Active"){
                                    $ans_low=$bmr*1.9;
                                    $ans_hi=$bmr*2;
                                }
                            }
                            echo " Minimum need ".'<span style="color:#fd7e14">'.$ans_low.'</span>';
                            echo " Maximum need ".'<span style="color:#fd7e14">'.$ans_hi.'</span>';
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