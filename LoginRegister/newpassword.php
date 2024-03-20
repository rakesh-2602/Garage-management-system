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
    <div class="box">
        <div class="innerbox">
            <h2>Reset Password</h2>
                <input type="password" placeholder="New Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="confirmpassword" required>
                <input type="submit" value="Save" name="changepassword">
</form>
    </div>
    </div>
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
            padding: 0 15px;
            font-size:14px;
            line-height:40px;
            margin:10px 0;
            color:black;
            border-radius:4px;
        }
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