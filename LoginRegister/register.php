<?php require('connection.php'); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="images/logo6.png" type="image">
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../sweetalert.min.js"></script>
</head>
<body>
<div class="container">
    <div class="login-box">
                <h2>Register Here</h2>
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

                <form action="register_login.php" method="POST" enctype="multipart/form-data">
                <div class="input-box">
                <input type="text" name="username" required/>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password2" required/>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <input type="password" name="cpass" required/><br><br>
                    <label>Confirm Password</label>
                </div>
                <div class="photo">
                <label for="btn">Add Profile Photo</label>
                <button type="button" name="btn" class="btn-warning">
                    <i class="fa fa-upload"></i> Upload file
                    <input type="file" name="photo" required/>
                </button></label>
                </div>
                <button type="submit" class="btn" name="register">Sign Up</button>
                <div class="signup-link">
                    <a class="link" href="login.php">Already registered</a>
                </div>
                </form>


                
                <!-- <input type="text" placeholder="Username" name="username" required/>
                <input type="email" placeholder="Email address" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                <input type="password" placeholder="Password" name="password2" required/>
                <input type="password" placeholder="Confirm password" name="cpass" required/><br><br>
                <label for="btn">Add Profile Photo</label>
                <button type="button" name="btn" class="btn-warning">
                    <i class="fa fa-upload"></i> Upload file
                    <input type="file" name="photo" required/>
                </button></label><br><br>
                <input type="submit" class="sub" name="register" value="Sign up"/>
                </form>
                <p style="text-align: center;">
                    <span>Already registered? </span><a class="link" href="login.php">login</a>
                </p> -->
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
</body>
<style>
    .photo{
        margin-top:-20px;
    }
    label{
        color: white;
    }
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
    border-radius: 50px;
    transform-origin: 128px;
    transform: scale(2.8) rotate(calc(var(--i) * (360deg / 50)));
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
    width: 450px;
}
.login-box form {
    width: 100%;
    padding: 0 50px;
}
h2 {
    font-size: 2em;
    color: white;
    text-align: center;
    margin-top: 50px;
}
.input-box {
    position: relative;
    margin: 1px 0;
}
.input-box input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: 2px solid #2c4766;
    outline: none;
    border-radius: 50px;
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
    top: 40%;
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
.btn {
    width: 50%;
    height: 45px;
    background: red;
    border: none;
    outline: none;
    border-radius: 50px;
    cursor: pointer;
    font-size: 1em;
    color: white;
    font-weight: 600;
    margin-left: 100px;
    margin-top:20px;
}
.btn:hover{
    background-color: green;
}
.signup-link {
    margin: 20px 0 10px;
    text-align: center;
    margin-top: 10px;
}
.signup-link a {
    font-size: 1em;
    color: white;
    text-decoration: none;
    font-weight: 600;
    margin-top: 10px;
}
.signup-link a:hover {
    text-decoration: underline;
}
input[type=file]{
                border:1px solid black;
                padding-right: 32%;
                padding-top: 8px;
                padding-bottom: 8px;
                border:none ;
            }
            input[type='text'],input[type='password'],input[type='email']
            {
                border-radius:50px;
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
    .btn-warning{
        position:relative;
        padding:8px 17px;
        font-size:15px;
        line-height: 1.5;
        border-radius:3px;
        color:white;
        background-color: red;
        border:0;
        overflow:hidden;
        left:5%;
        border-radius:50px;
    }
    .btn-warning input[type=file]{
        cursor:pointer;
        position:absolute;
        left:0%;
        top:0%;
        transform:scale(5);
        opacity:0;
    }
    .btn-warning:hover{
        background: green;
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
<!-- /* .box{
        border-radius:50px;
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
            padding: 0 10px;
            font-size:14px;
            line-height:40px;
            margin:10px 0;
            color:black;
            border-radius:4px;
        }
    .btn-warning{
        position:relative;
        padding:8px 17px;
        font-size:15px;
        line-height: 1.5;
        border-radius:3px;
        color:white;
        background-color: red;
        border:0;
        overflow:hidden;
        left:5%;
        border-radius:50px;
    }
    .btn-warning input[type=file]{
        cursor:pointer;
        position:absolute;
        left:0%;
        top:0%;
        transform:scale(5);
        opacity:0;
    }
    .btn-warning:hover{
        background: green;
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
        input[type="submit"]:hover{
            background-color: green;
            } 
            input[type="submit"]{
                width:80%;
                cursor:pointer;
                margin-left: 10%;
                border-radius:15px;
                border:none;
                border-radius:50px;
                background-color: red;
            }
            input[type=file]{
                border:1px solid black;
                padding-right: 32%;
                padding-top: 8px;
                padding-bottom: 8px;
                border:none ;
            }
            input[type='text'],input[type='password'],input[type='email']
            {
                border-radius:50px;
            } */ -->
</html>