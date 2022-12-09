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
error_reporting(0);
$username = $_POST['username'];
$database = new mysqli('localhost', 'root', '', 'gymedge');
$queryStr = "Select * from member";
$result = $database->query($queryStr);
foreach ($result as $row){
    if($row['username']==$username){
        $email =$row['email'];
        $password =$row['password'];
        $future_goal =$row['future_goal'];
        $future_physique =$row['future_physique'];
        $body_type=$row['body_type'];
        $data_birth=$row['data_birth'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $target_weight=$row['target_weight'];
        $lvl_fitness=$row['lvl_fitness'];
        $health_rep=$row['health_rep'];
        $height =$row['height'];
        $weight=$row['weight'];
        $gender =$row['gender'];
        $personalphoto =$row['personalphoto'];
        $profile_photo=$row['profile_photo'];
        $plan_id=$row['plan_id'];
        $have_a_plan=$row['have_a_plan'];
        $personal =$row['personalphoto'];
        $background=$row['profile_photo'];
    }
}
$database->close();
$flagloaded = 1;
if(isset($_POST['subandshow'])){
    $database = new mysqli('localhost', 'root', '', 'gymedge');
    $queryStr = "Select * from member";
    $result = $database->query($queryStr);
    foreach ($result as $row2){
        if($row2['username']==$username)
        {
//            $background = $_FILES['Change_back']['name'];
//            $personal = $_FILES['filename']['name'];
            if($_FILES['Change_back']['name']==''){
//                $background = "top-banner.jpg";
            }
            else{
                $background = $_FILES['Change_back']['name'];
            }
            if($_FILES['filename']['name']==''){
//                $personal = "unknownuser.png";
            }
            else{
                $personal = $_FILES['filename']['name'];
            }
            $queryStr2 = "UPDATE `member` SET `personalphoto`='$personal',`profile_photo`='$background' WHERE username = '$username'";
            $result = $database->query($queryStr2);
        }
    }
    $database->commit();
    $database->close();
}

?>
<div id="sa">
        <form name="personalform"   method="post" enctype="multipart/form-data">
            <div id="a" class="ACC">

                <div class="Container_Pic">
                    <div id="backback" class="Back_pic" style="background-image: radial-gradient(rgba(0,0,0,0.2) ,rgba(0,0,0,0.2)) ,url('icons/<?php echo $background ?>')">
                                <input value="top-banner.jpg" type="file" name="Change_back" id="Change_Back" " class="Back_C">
                                <label class="Lab_CB" for="Change_Back" onmouseenter="image_replace()" onmouseout="image_origin()">
                                    <span  onmouseenter="image_replace()" onmouseout="image_origin()">
                                        Edit Your Background Pic <i class="fas fa-upload"></i>
                                    </span>
                                </label>
                    </div>
                        <div class="jone" style="height: 300px;">
                            <div style="display: flex; width: 70vw;flex-direction: row;justify-content: right;">
                                <div  style="display: flex; flex-direction: column">
                                    <label for="fileup" id="personalphoto" class="photo" style="background-image: radial-gradient(rgba(0,0,0,0.2) ,rgba(0,0,0,0.2)) ,url('icons/<?php echo $personal ?>')" ></label>
                                    <div class="yop" style="display: flex;flex-direction: row;justify-content: center">
                                        <label id="labelbuttup" class="myupbutt" for="fileup">Upload Image</label>
                                        <input style="display: none; z-index: -1; border: 1px rgb(251,91,33)solid;border-radius: 20px;   " id="fileup" value="unknownuser.png" name="filename" class="uploader" type="file">
                                    </div>
                                </div>

                                <script>
                                    document.getElementById("personalphoto").addEventListener("mouseenter", addhover);
                                    function addhover(){
                                        document.getElementById('fileup').classList.add("anim11")
                                    }
                                </script>
                            </div>
                        </div>
                </div>
            </form>

                <div style="margin-bottom: 200px" class="content">
                    <input id="aaa"  name="username" type="hidden" class="username">
                        <div id="username" class="username" >My Name Is</div>
                        <input name="subandshow"  class="myshowbutton" type="submit" value="Show My Data">
                        <div class="username">
                        My Goal Is
                        </div>
                        <div class="tabeldata username">
                       <table style= "font-size: 25px; width: 65vw" class="mytabel">
                           <tr>
                               <td class="username2">Email</td>
                               <td>
                                   <?php
                                   echo $email
                                   ?>
                               </td>
                               <td class="username2">Password</td>
                               <td>
                                   <?php
                                   echo $password
                                   ?>
                               </td>
                           </tr>
                           <tr> <td class="username2">Future Goal</td>
                               <td><?php
                                   echo $future_goal
                                   ?></td>
                               <td class="username2">Future Physique</td>
                               <td>
                                   <?php
                                   echo $future_physique
                                   ?></td>

                           </tr>
                           <tr><td class="username2">Body Type</td>
                               <td><?php
                                   echo $body_type
                                   ?></td>
                               <td class="username2">First name</td>
                               <td><?php
                                   echo $first_name
                                   ?></td>
                           </tr>
                           <tr><td class="username2">Last Name</td>
                               <td><?php
                                   echo $last_name
                                   ?></td>
                               <td class="username2">Target Weight</td>
                               <td><?php
                                   echo $target_weight
                                   ?></td>

                           </tr>
                           <tr><td class="username2">Level of fit</td>
                               <td><?php
                                   echo $lvl_fitness
                                   ?></td>
                               <td class="username2">Plan ID</td>
                               <td><?php
                                   echo $plan_id
                                   ?></td>
                           </tr>
                           <tr><td class="username2">Height</td>
                               <td><?php
                                   echo $height
                                   ?></td>
                               <td class="username2">Weight</td>
                               <td><?php
                                   echo $weight
                                   ?></td>

                           </tr>
                       </table>
                    </div>
                </div>
                <div style="display: flex;justify-content: center"class="username">
                Progress Plan Schedule Soon...
                </div>
                <script>
                    var myData = getQueryVariable("variable");
                    if(myData){
                        console.log(myData);//to verify it
                        document.getElementById('username').innerHTML=myData;
                        document.getElementById('username').innerHTML=myData;
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
            </div>
        </form>
</div>
</body>
<script src="javascript/script1back1.js"></script>
<script src="javascript/script1back2.js"></script>
<script>
    VANTA.NET({
        el: "#sa",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xff6c06,
        backgroundColor: 0x0,
        points: 17.00,
        maxDistance: 27.00,
        spacing: 14.00
    })
</script>
</html>
<script>
    function image_replace(){
        document.getElementById("image_BC").src = "icons/edit_pic_hover.png"
    }
    function image_origin(){
        document.getElementById("image_BC").src = "icons/edit_pic.png";
    }
</script>