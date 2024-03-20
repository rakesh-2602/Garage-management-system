<?php
session_start();
require('connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$user)
{
require('../phpmailer/PHPMailer.php');
require('../phpmailer/SMTP.php');
require('../phpmailer/Exception.php');
$mail = new PHPMailer(true);
try {
    $otp=rand(111111,999999);
    //Server settings                  //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vinayakaautoworks00@gmail.com';                     //SMTP username
    $mail->Password   = 'tlbblrtlfeydpkla';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('vinayakaautoworks00@gmail.com', 'Vinayaka Auto Works');
    $mail->addAddress($email);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset Password';
    $mail->Body    = "<h3>Hi <b>$user</b>, </h3><br><h3>Use below OTP to change the password</h3><br/><br/><br/><div style='background-color:white;text-align:center;color:black;padding:5px;margin:40px;'><h3 style='color:black;'>$otp</h3></div>";
    $_SESSION['otp']=$otp;


    $mail->send();
    return true;
} catch (Exception $e) {
    return false;
}
}


//btnclick
if(isset($_POST['forgot_password']))
    {
        $qry="SELECT * FROM `registered_user` WHERE `email`='$_POST[email]'";
        $result=mysqli_query($conn,$qry);
        $email=$_POST['email'];
        
        if($result)
            {
                if(mysqli_num_rows($result)>0)
                    {
                        $row=mysqli_fetch_assoc($result);
        $user=$row['username'];
                        if(sendMail($email,$user))
                        {
                        $_SESSION['forgot_email']=$_POST['email'];
                        $_SESSION['status']="OTP Sent";
                        $_SESSION['status_code']="success";
                        echo "<script>
                        window.location.href='otpverify.php';
                            </script>
                  ";
                    }
                    else
                        {
                            $_SESSION['status']="Connection Error!";
                        $_SESSION['status_code']="error";
                        echo "<script>
                        window.location.href='forgot.php';
                            </script>
                  ";
                        }
                }
                else
                    {
                        $_SESSION['status']="Entered email is not registered";
                        $_SESSION['status_code']="error";
                        echo "<script>
                        window.location.href='forgotpass.php';
                            </script>
                  ";
                    }
            }
        else
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='forgotpass.php';
                    </script>
                ";
            }
    }
?>