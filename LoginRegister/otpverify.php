<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/logo.jpg" type="image">
    <script src="../sweetalert.min.js"></script>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>

<form method="POST" action="">
    <div class="box">
        <div class="innerbox">
            <h2>Reset Password</h2>
            <?php 
        if(isset($_SESSION['status']))
            {
                ?>
                <script>
                swal({
  title: "<?php echo $_SESSION['status']; ?>",
  icon: "<?php echo $_SESSION['status_code']; ?>",
});
</script>
                <?php
                unset ($_SESSION['status']);
            }
        ?>
                <input type="text" name="otp" placeholder="Verification code" required>
                <input type="submit" value="Verify" name="verifycode">
</form>
    </div>
    </div>
    <style>
        input[type=submit]{
            cursor:pointer;
        }
        .closebtn{
            margin-left:15px;
            color:black;
            font-weight:bold;
            float:right;
            line-height:20px;
            font-size:22px;
            cursor:pointer;
            transition:0.3s;
        }
        #alert{
            height:auto;
            width :100%;
            background : lightcoral;
            padding: 0 15px;
            font-size:14px;
            line-height:40px;
            margin:10px 0;
            color:black;
            border-radius:4px;
        }
    </style>
    <?php
    if(isset($_POST['verifycode']))
    {
        if($_POST['otp']==$_SESSION['otp'])
            {
                $_SESSION['status2']="Email Confirmed. You can reset your password now!";
                $_SESSION['status_code']="success";
              header("Location:newpassword.php");
            }
        else
            {
                $_SESSION['status']="Invalid OTP";
                $_SESSION['status_code']="error";
                echo "<script>         
                window.location.href='otpverify.php';
                    </script>
          ";
            }
    }
    ?>
</body>
</html>