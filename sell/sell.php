<?php 
require('sellconnection.php'); 
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$vname,$model)
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
            $mail->Subject = 'Selling request';
            $mail->Body    = "<h3>Your request for selling <b>$vname $model</b> has been recieved by us. Please visit our Garage for next procedure.</h3>";
        
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


if(isset($_POST['sub']))
    {
        $qry="SELECT * FROM `selltable` where `name`='$_POST[name]' and `email`='$_POST[email]' and `mobile_number`='$_POST[number]' and `brand`='$_POST[brand]' and `model`='$_POST[modal]' and `year`='$_POST[year1]' and `km`='$_POST[km]' and `ownership`='$_POST[ownership1]' and `value`='$_POST[price]' and `user_id`='$_SESSION[user_id]'"; 
        $result=mysqli_query($sellconn,$qry);
        if($result)
            {
                if(mysqli_num_rows($result)>0)
                    {
                        $_SESSION['status']="Already inserted";
                        $_SESSION['status_code']="warning";
                        echo "<script>
                        window.location.href='sellindex.php';
                        </script>";
                    }
                else
                    {
                        $qry="INSERT INTO `selltable`(`user_id`,`name`,`email`,`mobile_number`,`brand`, `model`, `year`, `km`, `ownership`, `value`) VALUES ('$_SESSION[user_id]','$_POST[name]','$_POST[email]','$_POST[number]','$_POST[brand]','$_POST[modal]','$_POST[year1]','$_POST[km]','$_POST[ownership1]','$_POST[price]')";
                        $result=mysqli_query($sellconn,$qry);
                        if($result && sendMail($_POST['email'],$_POST['brand'],$_POST['modal']))
                            {
                                $_SESSION['status']="Successful";
                                $_SESSION['status_code']="success";
                                echo "<script>
                                window.location.href='sellindex.php';
                                </script>"; 
                            }
                        else   
                            {
                                echo "<script>
                                alert('Error while fetching the data');
                                window.location.href='sellindex.php';
                                </script>";
                            }
                    }
            }
        else   
            {
            echo "<script>
            alert('Error while fetching the data');
            window.location.href='sellindex.php';
            </script>";
            }
        
    }
?>