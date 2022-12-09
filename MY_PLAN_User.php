<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Plan</title>
    <link rel="stylesheet" href="My_Plan.css">
</head>
<body>
<input id="username" type="hidden">
<?php
error_reporting(0);
$username= $_POST['username'];
$arr_rep = Array();
$arr_round = Array();
$arr_name = Array();
$arr_daymusle = Array();
$i = 0;
$database = new mysqli('localhost', 'root', '', 'gymedge');
$queryStr = "Select * from exers";
$result = $database->query($queryStr);
foreach ($result as $row) {
    if ($row['username'] == $username) {
        $arr_rep[$i]=$row['Ex_rep'];
        $arr_round[$i]=$row['Ex_round'];
        $arr_name[$i]=$row['Ex_name'];
        $arr_daymusle[$i]=$row['day_musle'];
        $i=$i+1;
    }
}

?>
<div class="top_screen">
        <div class="top_screen_txt">
                My Plan
        </div>
        <div class="Container">
            <table>
                <tr class="margin_TD">
                    <td class="day">
                        <h1 class="theh1movingtext">Sunday</h1>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="day">
                        <h1 class="theh1movingtext">Monday</h1>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="day">
                        <h1 class="theh1movingtext">Tuesday</h1>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="day">
                        <h1 class="theh1movingtext">Wednesday</h1>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="day">
                        <h1 class="theh1movingtext">Thursday</h1>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="day">
                        <h1 class="theh1movingtext">Saturday</h1>
                    </td>
                </tr>
            </table>
            <table>
                <tr class="margin_TD">
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[4];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[4];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[4];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[4];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[0];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[0];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[0];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[0];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[1];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[1];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[1];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[1];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[2];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[2];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[2];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[2];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[3];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[3];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[3];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[3];
                                        ?>
                                    </span>
                        </div>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[6];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[6];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[6];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[6];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[7];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[7];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[7];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[7];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[8];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[8];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[8];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[8];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[9];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[9];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[9];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[9];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span>
                                <?php
                                echo $arr_name[10];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span>
                                       <?php
                                       echo $arr_rep[10];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_round[10];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span>
                                        <?php
                                        echo $arr_daymusle[10];
                                        ?>
                                    </span>
                        </div>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[11];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[11];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[11];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[11];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[12];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[12];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[12];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[12];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[13];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[13];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[13];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                                    <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[13];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[14];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[14];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[14];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[14];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[15];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[15];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[15];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[15];
                                        ?>
                                    </span>
                        </div>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[16];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[16];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[16];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[16];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[17];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[17];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[17];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[17];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[18];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[18];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[18];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[18];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[19];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[19];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[19];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[19];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[20];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[20];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[20];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[20];
                                        ?>
                                    </span>
                        </div>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[21];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[21];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[21];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[21];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[22];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[22];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[22];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[22];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[23];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[23];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[23];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[23];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[24];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[24];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[24];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[24];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[25];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[25];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[25];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[25];
                                        ?>
                                    </span>
                        </div>
                    </td>
                </tr>
                <tr class="margin_TD">
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[26];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[26];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[26];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[26];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[27];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[27];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[27];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[27];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[28];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[28];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[28];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[28];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[29];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[29];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[29];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[29];
                                        ?>
                                    </span>
                        </div>
                    </td>
                    <td class="exer">
                        <div class="onebrach">
                            <span>
                                Exercise Name:
                            </span>
                            <span class="rusult">
                                <?php
                                echo $arr_name[30];
                                ?>
                            </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Rep:
                                    </span>
                            <span class="rusult">
                                       <?php
                                       echo $arr_rep[30];
                                       ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Exercise Round:
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_round[30];
                                        ?>
                                    </span>
                        </div>
                        <div class="onebrach">
                            <span>
                                        Muscle
                                    </span>
                            <span class="rusult">
                                        <?php
                                        echo $arr_daymusle[30];
                                        ?>
                                    </span>
                        </div>
                    </td>
                </tr>
            </table>
    </div>
    </div>
</body>
</html>