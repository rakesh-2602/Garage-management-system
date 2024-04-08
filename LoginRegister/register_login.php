<html>
    <head>
    <script src="../sweetalert.min.js"></script>
    </head>
</html>
<?php
session_start();
require('connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$otp,$user)
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
            $mail->Subject = 'Email Verification from Vinayaka Auto Works';
            $mail->Body    = "Hi $user, <br/><br/>Please use the below OTP to complete the registration.<br/><br/><br/><div style='background-color:white;text-align:center;color:black;padding:10px;margin:40px;'>$otp</div>";
        
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


//login
if(isset($_POST['login']))
{
    $query="SELECT * FROM `registered_user` WHERE `email`='$_POST[email_username]' or `username`='$_POST[email_username]'";
    $result=mysqli_query($conn,$query);
    $_SESSION['user']=$_POST['email_username'];
    if($result)
            {
                if(mysqli_num_rows($result)==1)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                        //matching passwords
                        if(password_verify($_POST['password1'],$row['password']))
                            {
                                $_SESSION['user_id']=$row['id'];
                                $_SESSION['user_name']=$row['username'];
                                $_SESSION['email']=$row['email'];
                                header('Location:../index.php');
                                die;
                            }
                        else 
                            {
                                $_SESSION['loginstatus']="Incorrect Password!";
                                $_SESSION['status_code']="error";
                               echo "<script>
                                        window.location.href='login.php';
                                </script>";
                            }
                        }
                    }
                else   
                    {
                        $_SESSION['loginstatus']="Entered email or username is not registered";
                        $_SESSION['status_code']="error";
                        echo 
                                "<script>
                                        window.location.href='login.php';
                                </script>
                                ";
                    }
            }
    else
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='login.php';
                    </script>
          ";
            }
    
}
// register
// if signup button is clicked
if(isset($_POST['register']))                                           
    {     
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
        if ($_POST['password2']==$_POST['cpass'])
        {
        $user_exists="SELECT * from `registered_user` where `username`='$_POST[username]' or `email`='$_POST[email]'";
        $result=mysqli_query($conn,$user_exists);
        if($result)
            {
                if(mysqli_num_rows($result)>0)
                    {
                        $res_fetch=mysqli_fetch_assoc($result);
                        if($res_fetch['username']==$_POST['username'])
                            {
                                // username alredy exists
                                $_SESSION['status']="username already exists";
                                $_SESSION['status_code']="error";
                                echo 
                                "<script>
                                    window.location.href='register.php';
                                </script>";
                            }
                        else
                            {
                                // email already exists
                                $_SESSION['status']="Email already exists";
                                $_SESSION['status_code']="error";
                                echo 
                                "<script>
                                    window.location.href='register.php';
                                </script>";

                            }
                    }
                else
                    {
                        $filename=$_FILES['photo']['name'];
                        $temp_name=$_FILES['photo']['tmp_name'];
                        $folder='profile/'.$filename;
                        move_uploaded_file($temp_name,$folder);
                        //password encryption
                        if($filename!="")
                        {
                        $hash=password_hash($_POST['password2'],PASSWORD_DEFAULT);
                        $otp=rand(111111,999999);
                        if(sendMail($_POST['email'],$otp,$_POST['username']))
                            {
                                $_SESSION['signupotp']=$otp;
                                $_SESSION['user_name']=$_POST['username'];
                                $_SESSION['email']=$_POST['email'];
                                $_SESSION['password']=$hash;
                                $_SESSION['photo']=$folder;
                                ?>
                                <script>
                                    swal({
                                            title: "<?php echo 'An email with OTP has been sent to your Email Id. Please verify your email' ?>",
                                            icon: "<?php echo 'success' ?>",
                                            }).then(function(){
                                                window.location="verifyaccount.php";
                                            });
                                </script>
                                <?php 
                            }
                        else    
                            {
                                // data insertion not successfull
                                echo "<script>
                            alert('Error while fetching the data');
                            window.location.href='register.php';
                                </script>
                                 ";

                            }
                    }
                    else
                        {
                            echo "<script>
                            alert('Please upload file');
                            window.location.href='register.php';
                      </script>
                      ";
                        }
                }
            }
        else   
            {
                        echo "<script>
                        alert('Error while fetching the data');
                        window.location.href='register.php';
                        </script>
                        ";
            }
        }
    else
        {
            $_SESSION['status']="Password and confirm password mismatched";
            $_SESSION['status_code']="error";
                echo "<script>
                window.location.href='register.php';
                    </script>
          ";              
        }
    }
    else {
        $_SESSION['status']="Invalid Email";
        $_SESSION['status_code']="error";
        echo "<script>
        window.location.href='register.php';
            </script>
    "; 
    }
    }