<?php
session_start();
require('connection.php');
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
<?php 
        if(isset($_SESSION['status2']))
            {
                ?>
                <script>
                swal({
  title: "<?php echo $_SESSION['status2']; ?>",
  icon: "<?php echo $_SESSION['status_code']; ?>",
});
</script>
                <?php
                unset ($_SESSION['status2']);
            }
        ?>
<form method="POST" action="">
    <div class="container">
        <div class="login-box">
            <h2>Reset Password</h2>
            <div class="input-box">
            <input type="password" name="password" required>
                    <label>New Password</label>
            </div>
            <div class="input-box">
            <input type="password" name="confirmpassword" required>
                    <label>Confirm Password</label>
            </div>

            <button type="submit" class="btn" name="changepassword">Save</button>

                <!-- <input type="password" placeholder="New Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="confirmpassword" required>
                <input type="submit" value="Save" name="changepassword"> -->
</form>
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
        *{
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
    background-size: 100%;
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
    transform: scale(2.4) rotate(calc(var(--i) * (360deg / 50)));
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
}
.input-box {
    position: relative;
    margin: 25px 0;
}
.input-box input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: 2px solid #2c4766;
    outline: none;
    border-radius: 40px;
    font-size: 1em;
    color: #fff;
    padding: 0 20px;
    transition: .5s ease;
}
.input-box input:focus,
.input-box input:valid {
    border-color: #0ef;
}
.input-box label {
    position: absolute;
    top: 50%;
    left: 20px;
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
    margin-left: 100px;
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
    color: #0ef;
    text-decoration: none;
    font-weight: 600;
}
.signup-link a:hover {
    text-decoration: underline;
}
        /* .closebtn{
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
        } */
    </style>
</body>
</html>
<?php
if(isset($_POST['changepassword']))
        {
            if($_POST['password']==$_POST['confirmpassword'])
                {
                    $hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $query="UPDATE `registered_user` set `password`='$hash' where `email`='$_SESSION[forgot_email]'";
                    if(mysqli_query($conn,$query))
                        {?>
                            <script>
                            swal({
              title: "<?php echo "Password Updated Successfully Please login again" ?>",
              icon: "<?php echo "success" ?>",
            }).then(function(){
                window.location="login.php";
            });
                  <?php      }
                    ?>

</script><?php
                }
            else
                {
                    $_SESSION['status2']="Password and confirm password mismatched";
                    $_SESSION['status_code']="error";
                    echo "<script>         
                window.location.href='newpassword.php';
                    </script>
          ";
                }
        }
?>