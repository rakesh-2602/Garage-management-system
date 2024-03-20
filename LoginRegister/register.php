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
    <div class="box">
        <div class="inner-box">
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
                <input type="text" placeholder="Username" name="username" required/>
                <input type="email" placeholder="Email address" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                <input type="password" placeholder="Password" name="password2" required/>
                <input type="password" placeholder="Confirm password" name="cpass" required/><br><br>
                <label for="btn">Add Profile Photo</label>
                <button type="button" name="btn" class="btn-warning">
                    <i class="fa fa-upload"></i>Upload file
                    <input type="file" name="photo" required/>
                </button></label><br><br>
                <input type="submit" class="sub" name="register" value="Sign up"/>
                </form>
                <p style="text-align: center;">
                    <span>Already registered? </span><a class="link" href="login.php">login</a>
                </p>
        </div>
    </div>
</body>
<style>
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
        color:#fff;
        background-color: #ffc100;
        border:0;
        overflow:hidden;
        left:5%;
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
        background: #d9a400;
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
    background-color: blue;
            } 
            input[type="submit"]{
                width:80%;
                cursor:pointer;
                margin-left: 10%;
                border-radius:15px;
                border:none;
            }
            input[type=file]{
                border:1px solid black;
                padding-right: 32%;
                padding-top: 8px;
                padding-bottom: 8px;
                border:none ;
            }

</style>
</html>