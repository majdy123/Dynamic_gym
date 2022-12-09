<?php
function Display_Reset()
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="Reset_Pass.css">
</head>
<body style="overflow: hidden">

<div class="PA">
    <div style="display: inline-block ; margin: 15px;" class="img"><img src="Icons\logohome.png" class="logo navbar fixed-top"></div>
        <div class="Container">
            <div class="R_C" id="Reset_C" style="opacity: 1;">
                <div class="Re_txt">
                    <h1>
                        <span style="color: rgb(251,91,33)">Reset</span> Password
                    </h1>
                    <form method="post">
                        <p id="Re_txt_p" class="Re_txt_p">
                            Fill the following, to get your account back :
                        </p>
                        <div id="input" class="input" style="display: flex">
                            <div class="email_in">
                                        <span class="em_in_text" style="margin-bottom: 10px">
                                            Email:
                                        </span>
                                <span class="em_in_data">
                                            <input type="email" name="Email_Reset"  class="Input_EM" id="email_reset" autocomplete="off" placeholder="Name@Example.com">
                                        </span>
                            </div>
                        </div>
                        <div id="verify_input" class="input" style="display: none">
                            <div class="verify_in">
                                        <span class="VER_in_text" style="margin-bottom: 10px">
                                            Verification_code:
                                        </span>
                                <span class="VER_in_data">
                                            <input type="text" name="Ver_Reset"  class="Ver_EM" id="Ver_reset" autocomplete="off">
                                        </span>
                            </div>
                        </div>
                        <div id="Reset_Pass" class="input" style="display: none">
                            <div class="Reset_in">
                                <span class="Res_in_text" style="margin-bottom: 10px">
                                    New Password:
                                </span>
                                <span class="Res_in_data">
                                            <input type="text" name="Ver_Reset"  class="Res_in" id="Res_in" autocomplete="off">
                                        </span>
                                <span class="Res_in_text" style="margin-top: 5px ;margin-bottom: 10px">
                                    Confirm Password:
                                </span>
                                <span class="Res_in_data">
                                    <input type="text" name="Ver_Con_Reset"  class="Res_in" id="Res_Con_in" autocomplete="off">
                                </span>
                            </div>
                        </div>
                        <div class="continue1">
                            <input type="submit" value="Continue" title="Continue" name="Con_reset" class="Continue_reset">

                            </input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php
}
Display_Reset();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$result = "";
$V_code = "";

if (isset($_POST['Con_reset'])) {
    $V_code = generate($result);
    Send_Email($V_code);
    echo '
        <script>
            document.getElementById("Re_txt_p").innerText = "We Have Sent you a Verification code, Please Check Your Email";
            document.getElementById("input").style.display = "none";
            document.getElementById("verify_input").style.display = "flex";
         </script>   
    ' ;

    if (isset($_POST['Ver_Reset'])) {
        echo '
            <script>
            document.getElementById("Re_txt_p").innerText = "Please now enter a your new password";
            document.getElementById("verify_input").style.display = "none";
            document.getElementById("Reset_Pass").style.display = "flex";
         </script>   
        ';
    }
}

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

    $mail -> Subject = "Reset Password" ;
    $mail ->setFrom("gym.edge2021@gmail.com");
    $mail -> Body = " Your Reset password Verification code is : $result";


    $to_Email = $_POST['Email_Reset'];
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
    $characters = '12345_6789q@WeRTy#uiOPlk$jhgfds*AzXcv@bNm' ;
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}












