<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$result = "";
$V_code = "65";
$email =$_POST['email'];

$V_code = generate($result);
Send_Email($V_code);
error_reporting(0);
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
//*************************
$goal =$_POST['goal'];
$Physique = $_POST['Physique'];
$Body_Type = $_POST['Body_Type'];
$month = $_POST['month'];
$day= $_POST['DD'];
$year= $_POST['YY'];
$height = $_POST['heightCM'];
$weight = $_POST['currentWeight'];
$level_fit = $_POST['lvl_fit'];
$have_health_iss = $_POST['HI_select'];
$his_issue = $_POST['healthissue'];
$goalweight = $_POST['goalweight'];
$fat_lvl = $_POST['Fat_per'];

$database = new mysqli('localhost','root','','gymedge');
$queryStr = "INSERT INTO `person` (`username`, `password`, `email`) VALUES ('".$username."', '".$V_code."', '".$email."');";
$result = $database->query($queryStr);
$database->commit();
$database->close();

$database = new mysqli('localhost','root','','gymedge');
$queryStr = "INSERT INTO `member` (`username`, `password`, `future_goal`, `future_physique`, `body_type`, `data_birth`, `first_name`, `last_name`, `target_weight`, `lvl_fitness`, `health_rep`, `email`, `height`, `weight`, `gender`, `personalphoto`, `profile_photo`, `have_a_plan`, `plan_id`) 
        VALUES ('".$username."', '".$V_code."', '".$goal."', '".$Physique."', '".$Body_Type."', '".$year."/".$month."/".$day."', '".$firstname."', '".$lastname."', '".$goalweight."', '".$level_fit."', '".$his_issue."', '".$email."', '".$height."', '".$weight."','','unknownuser.png', 'top-banner.jpg', '0','0');";
$result = $database->query($queryStr);
$database->commit();
$database->close();
    echo '<script>window.location.href=("http://localhost/project/Web%20Project/signin.php")</script>';
//    echo '
//        <script type="text/javascript">
//                document.getElementById("Email").style.display = "none" ;
//                document.getElementById("verify").style.display = "flex";
//
//                document.getElementById("range").className = "range_text11" ;
//                document.getElementById("iterations").innerText = "12/12";
//
//
//            function Border_back(){
//                var W = document.getElementById("range").className;
//                if(W == "range_text11"){
//                    setTimeout(function (){
//                        document.getElementById("Email").style.display="flex";
//                        document.getElementById("verify").style.display="none";
//                        document.getElementById("range").className = "range_text10";
//                        document.getElementById("iterations").innerText = "11/12";
//                    },350);
//
//                }
//
//            }
//        </script>
//    ' ;


//if (isset($_POST['Verify_code'])){
//
//    if($_POST['V_Code'] == $V_code){
//        $database = new mysqli('localhost','root','','gymedge');
//        $queryStrperson = "Select * from person";
//        $queryStrmember = "Select * from member";
//        $resultperson = $database->query($queryStrperson);
//        $resultmember = $database->query($queryStrmember);
//            foreach ($resultperson as $person){
//                        if($person['email']=="tmpemail") {$user = $person['username'];}
//            }
//            foreach ($resultmember as $member){
//                if($member['username']==$user){
//                    //this user exists already in data base dont add him
//                    echo '<script>alert "this User alrady in database";
//                    window.location.href = "http://localhost/project/Web%20Project/signin.php";<script/>';
//                }
//            }
//
//
//        echo ' <script type="text/javascript">
//               document.getElementById("Email").style.display = "none" ;
//               document.getElementById("verify").style.display = "none";
//               window.location.href = "http://localhost/project/Web%20Project/signin.php";
//               alert("Your account Added Successfully")
// </script>' ;
//    }
//    else{
//
//    }
//}


function Send_Email($result){

    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';

    $mail = new PHPMailer();
    $mail -> isSMTP();
    $mail ->Host = "smtp.gmail.com";
    $mail ->SMTPAuth = "true";

    $mail ->SMTPSecure = "tls";
    $mail-> Port = "587";

    $mail ->Username = "gym.edge2021@gmail.com";
    $mail ->Password = "Gym_Edge@web2021";

    $mail -> Subject = "Your Password Email!" ;
    $mail ->setFrom("gym.edge2021@gmail.com");
    $mail -> Body = "You can change the password from your profile! Your current Password is : $result";


    $to_Email = $_POST['email'];
    $mail -> addAddress($to_Email);

    if($mail -> Send()){
        echo "Email is sent";
    }
    else{
        echo "Error ..!";
    }

    $mail-> smtpClose();

}
function generate($result) {
    $amount = 1;  // The amount of strings you want.
    $generated_strings = []; // Keep a record of the generated strings.
    $result = generateRandomString(); // Generate a random string
    return $result ;
}

function generateRandomString($length = 9) {
    $characters = '6566416156565161656516513209849784651' ;
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>

