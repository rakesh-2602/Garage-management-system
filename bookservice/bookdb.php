<?php 
require('bookconnection.php'); 
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$token,$date,$time,$vname)
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
            $mail->Body    = "<h3>Token Number : $token<br><br>Vehicle Name : $vname <br><br>Service Date : $date<br><br>Time Slot : $time</h3>";
        
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

$id=$_SESSION['user_id'];
if(isset($_POST['sub']))
{
    $date=date('Y-m-d');
    $servicedate=$_POST['service_date'];
    if($servicedate>$date)
    {
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
    $qry="SELECT * FROM `service` WHERE  `service_date`='$_POST[service_date]'";
    $result=mysqli_query($bookconn,$qry);
    if($result)
        {
            if(mysqli_num_rows($result)>0)
                {
                    $qry="SELECT * FROM `service` WHERE   `time_slot`='$_POST[time]'";
                    $result=mysqli_query($bookconn,$qry);
                    if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                                {
                                    $_SESSION['status']="Selected time slot is not available please select another time or date";
                                    $_SESSION['status_code']="warning";
                                    echo 
                                    "<script>
                                        window.location.href='bookservice.php';
                                    </script>";
                                }
                            else
                                {
                                    $rno=rand(111111,999999);
                                    $date=date('y-m-d');
                                    $qry="INSERT INTO `service`(`user_id`,`name`, `reg_no`, `address`, `mobile_no`, `email`, `v_name`, `fuel_level`,`booked_date`, `service_date`, `time_slot`, `complaint`, `token`) VALUES ('$id','$_POST[name]','$_POST[regno]','$_POST[address]','$_POST[mobile_number]','$_POST[email]','$_POST[vehicle_name]','$_POST[fuel]',$date,'$_POST[service_date]','$_POST[time]','$_POST[complaint]','$rno')";
                                    $result=mysqli_query($bookconn,$qry);
                                    if($result)
                                        {
                                            if(sendMail($_POST['email'],$rno,$_POST['service_date'],$_POST['time'],$_POST['vehicle_name']))
                                            {
                                            $_SESSION['status']="Successfully booked, Your token number is $rno";
                                            $_SESSION['status_code']="success";
                                            echo 
                                             "<script>
                                             window.location.href='bookservice.php';
                                            </script>";   
                                            }
                                            else
                                            {
                                            $_SESSION['status']="Connection error";
                                            $_SESSION['status_code']="error";
                                            echo 
                                             "<script>
                                             window.location.href='bookservice.php';
                                            </script>";   
                                            }
                                        }
                                    else   
                                        {
                                            echo "<script>
                                            alert('Error while fetching the data');
                                            window.location.href='bookservice.php';
                                            </script>";
                                        }
                                }
                        }
                    else
                        {
                            echo "<script>
                            alert('Error while fetching the data');
                            window.location.href='bookservice.php';
                            </script>";
                        }
                }
            else    
                {
                    $rno=rand(111111,999999);
                    $date=date('y-m-d');
                    $qry="INSERT INTO `service`(`user_id`,`name`, `reg_no`, `address`, `mobile_no`, `email`, `v_name`, `fuel_level`,`booked_date`, `service_date`, `time_slot`, `complaint`,`token`) VALUES ('$id','$_POST[name]','$_POST[regno]','$_POST[address]','$_POST[mobile_number]','$_POST[email]','$_POST[vehicle_name]','$_POST[fuel]','$date','$_POST[service_date]','$_POST[time]','$_POST[complaint]','$rno')";
                    $result=mysqli_query($bookconn,$qry);
                    if($result)
                        {
                            if(sendMail($_POST['email'],$rno,$_POST['service_date'],$_POST['time'],$_POST['vehicle_name']))
                            {
                            $_SESSION['status']="Successfully booked, Your token number is $rno";
                            $_SESSION['status_code']="success";
                            echo 
                            "<script>
                            window.location.href='bookservice.php';
                            </script>";  
                            }
                            else
                            {
                                $_SESSION['status']="Connection error";
                                $_SESSION['status_code']="error";
                                echo 
                                 "<script>
                                 window.location.href='bookservice.php';
                                </script>"; 
                            }                 
                        }
                    else
                        {
                            echo "<script>
                            alert('Error while fetching the data');
                            window.location.href='bookservice.php';
                            </script>";
                        }
                }

        }
    else
        {
            echo "<script>
            alert('Error while fetching the data');
            window.location.href='bookservice.php';
                </script>
                 ";
        }
    }
        else {
            $_SESSION['status']="Invalid Email";
            $_SESSION['status_code']="error";
            echo "<script>
            window.location.href='bookservice.php';
                </script>
        "; 
        }
}
else
    {
        $_SESSION['status']="Please select a valid date";
         $_SESSION['status_code']="warning";
        echo 
         "<script>
         window.location.href='bookservice.php';
        </script>";
    }
}
?>