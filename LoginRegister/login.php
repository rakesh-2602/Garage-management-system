<?php 
require('connection.php');
session_start();
if(isset($_SESSION['user_id']))
{
    header('Location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="images/logo.jpg" type="image">
    <link rel="stylesheet" href="stylelogin.css">
    <script src="../sweetalert.min.js"></script>
</head>
<body>
<form method="POST" action="register_login.php">
    <div class="box">
        <div class="innerbox">
            <h2>Login</h2>
            <!-- alerting for wrong password -->
            <?php 
       if(isset($_SESSION['loginstatus']))
       {
           ?>
           <script>
           swal({
title: "<?php echo $_SESSION['loginstatus']; ?>",
icon: "<?php echo $_SESSION['status_code']; ?>",
});
</script>
           <?php
           unset ($_SESSION['loginstatus']);
       }
        ?>
                <input type="text" placeholder="Email or Username" name="email_username" required>
                <input type="password" placeholder="Password" name="password1" required>

                <div class="forgot">
                    <span class="forgot"><a href="forgotPass.php">Forgot password?</a></span>
                </div>
                <input type="submit" value="Login" name="login">
</form>
        <p>
            <span>Not a member? </span><a href="register.php" class="link">Sign up</a>
            &emsp;&emsp;&emsp;<span>Login as </span><a href="../admin/adminlogin.php" class="link">Admin</a>
        </p>
    </div>
    </div>
    <style>
        .box{
            border-radius:50px;
        }
        h2{
            color: black;
        }
        .forgot a{
            text-decoration: none;
            color: black;
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
        .email_username{
            color: balck;
        }
        #alert{
            height:auto;
            width :100%;
            background : lightcoral;
            padding: 0 10px;
            font-size:14px;
            line-height:40px;
            margin:10px 0;
            color:black;
            border-radius:4px;
        }
        input[type="submit"]{
            cursor: pointer;
            border-radius: 50px;
            background-color:red;
        }
        input[type="submit"]:hover{
        background-color: green;
        }
        input[type=text]{
            border-radius:50px;
        }
        input[type=password]{
            border-radius:50px;
        }
        span{
            color:black;
        }
    </style>
</body>
</html>