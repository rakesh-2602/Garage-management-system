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
    <script src="../sweetalert.min.js"></script>
</head>
<body>
<div class="container">
<form method="POST" action="register_login.php">
    <div class="login-box">
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
                <div class="input-box">
                    <input type="text" name="email_username" required>
                    <label>Email or Username</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password1" required>
                    <label>Password</label>
                </div>
                <div class="forgot-pass">
                    <a href="forgotPass.php" class="forgot">Forgot password?</a>
                </div>
                <button type="submit" class="btn" value="Login" name="login">Login</button>
                <div class="signup-link">
                    <a href="register.php" class="link">Not a member Sign up</a>
                </div>
                <div class="signup-link">
                    <a href="../admin/adminlogin.php" class="link">Login as Admin</a>
                </div>

    </form>
                <!-- <input type="text" placeholder="Email or Username" name="email_username" required>
                <input type="password" placeholder="Password" name="password1" required>

                <div class="forgot">
                    <span class="forgot"><a href="forgotPass.php">Forgot password?</a></span>
                </div>
                <input type="submit" value="Login" name="login">

        <p>
            <span>Not a member? </span><a href="register.php" class="link">Sign up</a>
            &emsp;&emsp;&emsp;<span>Login as </span><a href="../admin/adminlogin.php" class="link">Admin</a>
        </p> -->
    </div>
    </div>
    <span style="--i:0;"></span>
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <span style="--i:4;"></span>
        <span style="--i:5;"></span>
        <span style="--i:6;"></span>
        <span style="--i:7;"></span>
        <span style="--i:8;"></span>
        <span style="--i:9;"></span>
        <span style="--i:10;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:13;"></span>
        <span style="--i:14;"></span>
        <span style="--i:15;"></span>
        <span style="--i:16;"></span>
        <span style="--i:17;"></span>
        <span style="--i:18;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:21;"></span>
        <span style="--i:22;"></span>
        <span style="--i:23;"></span>
        <span style="--i:24;"></span>
        <span style="--i:25;"></span>
        <span style="--i:26;"></span>
        <span style="--i:27;"></span>
        <span style="--i:28;"></span>
        <span style="--i:29;"></span>
        <span style="--i:30;"></span>
        <span style="--i:31;"></span>
        <span style="--i:32;"></span>
        <span style="--i:33;"></span>
        <span style="--i:34;"></span>
        <span style="--i:35;"></span>
        <span style="--i:36;"></span>
        <span style="--i:37;"></span>
        <span style="--i:38;"></span>
        <span style="--i:39;"></span>
        <span style="--i:40;"></span>
        <span style="--i:41;"></span>
        <span style="--i:42;"></span>
        <span style="--i:43;"></span>
        <span style="--i:44;"></span>
        <span style="--i:45;"></span>
        <span style="--i:46;"></span>
        <span style="--i:47;"></span>
        <span style="--i:48;"></span>
        <span style="--i:49;"></span>
    </div>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #1f293a;
    background-image: url(../images/logo2.jpg);
}
.container {
    position: relative;
    width: 256px;
    height: 256px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container span {
    position: absolute;
    left: 0;
    width: 32px;
    height: 6px;
    background: #2c4766;
    border-radius: 8px;
    transform-origin: 128px;
    transform: scale(2.2) rotate(calc(var(--i) * (360deg / 50)));
    animation: animateBlink 3s linear infinite;
    animation-delay: calc(var(--i) * (3s / 50));
}
@keyframes animateBlink {
    0% {
        background: #0ef;
    }
    25% {
        background: #2c4766;
    }
}
.login-box {
    position: absolute;
    width: 400px;
}
.login-box form {
    width: 100%;
    padding: 0 50px;
}
h2 {
    font-size: 2em;
    color: white;
    text-align: center;
    margin-top: -150px;
    margin-left: -400px;
}
.input-box {
    position: relative;
    margin: 25px 0;
}
.input-box input {
    width: 90%;
    height: 50px;
    background: transparent;
    border: 2px solid #2c4766;
    outline: none;
    border-radius: 50px;
    font-size: 1em;
    color: #fff;
    padding: 0 20px;
    transition: .5s ease;
    margin-left: -180px;
}
.input-box input:focus,
.input-box input:valid {
    border-color: #0ef;
}
.input-box label {
    position: absolute;
    top: 50%;
    left: -160px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    pointer-events: none;
    transition: .5s ease;
}
.input-box input:focus~label,
.input-box input:valid~label {
    top: 1px;
    font-size: .8em;
    background: #1f293a;
    padding: 0 6px;
    color: #0ef;
}
.forgot-pass {
    margin: -15px 0 10px;
    text-align: center;
}
.forgot-pass a {
    font-size: .85em;
    color: #fff;
    text-decoration: none;
    margin-left: -400px;
}
.forgot-pass a:hover {
    text-decoration: underline;
}
.btn {
    width: 50%;
    height: 45px;
    background: red;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: white;
    font-weight: 600;
    margin-left: -100px;
}
.btn:hover{
    background-color: green;
}
.signup-link {
    margin: 20px 0 10px;
    text-align: center;
}
.signup-link a {
    font-size: 1em;
    color: white;
    text-decoration: none;
    font-weight: 600;
    margin-left: -400px;
}
.signup-link a:hover {
    text-decoration: underline;
}
        /* .box{
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
        }*/
    </style> 
</body>
</html>