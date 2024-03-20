<?php
session_start();
require('buyconnection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$brand,$model)
    {
        require('../phpmailer/PHPMailer.php');
        require('../phpmailer/SMTP.php');
        require('../phpmailer/Exception.php');
        $mail = new PHPMailer(true);
        try {
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
            $mail->Subject = 'Successfully booked';
            $mail->Body    = "<h3>Thank you for booking $brand $model. Please visit our Garage within 48 hours to complete the procedure.</h3>";
        
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
if(isset($_POST['book']))
    {
        $model=$_POST['bike_model'];
        $price=$_POST['bike_price'];
        $qry1="UPDATE `buytable` set `status`='booked' where `model`='$model' and `price`='$price'";
        mysqli_query($buyconn,$qry1);
        $qry="INSERT into `userbought`(`user_id`,`brand`,`model`,`year`,`ownership`,`price`,`image`) values('$_SESSION[user_id]','$_POST[bike_brand]','$_POST[bike_model]','$_POST[bike_year]','$_POST[bike_ownership]','$_POST[bike_price]','$_POST[bike_photo]')";
        if(mysqli_query($buyconn,$qry))
            {
                if(sendMail($_SESSION['email'],$_POST['bike_brand'],$_POST['bike_model']))
                {
                $_SESSION['status']="Successfully booked";
                $_SESSION['status_code']="success";
                echo "<script>
                window.location.href='buy.php';</script>
                ";
               }
        }
    }
}
?>