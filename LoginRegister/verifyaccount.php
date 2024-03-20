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
<form method="POST" action="">
    <div class="box">
        <div class="innerbox">
            <h2>Email Verification</h2>
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
                <input type="text" name="otp" placeholder="OTP" required>
                <input type="submit" value="Verify" name="verifyotp">
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
        input[type=submit]{
            cursor:pointer;
        }
    </style>
    <?php
    if(isset($_POST['verifyotp']))
    {
        if($_POST['otp']==$_SESSION['signupotp'])
            {
                $query="INSERT INTO `registered_user`(`username`, `email`, `password`,`picture`) VALUES ('$_SESSION[user_name]','$_SESSION[email]','$_SESSION[password]','$_SESSION[photo]')";
                if(mysqli_query($conn,$query))
                { 
                    $id=mysqli_insert_id($conn);
                    $_SESSION['user_id']=$id;
                    ?>
                    <script>
                swal({
  title: "<?php echo 'Successfully Registered'; ?>",
  icon: "<?php echo 'success'; ?>",
}).then(function(){
    window.location='../index.php';
});
</script>
                    </script>
                    <?php
                }
                else
                {
                    echo "Unable to run query";
                }
            }
        else
            {
                $_SESSION['status']="Invalid OTP";
                $_SESSION['status_code']="error";
                echo "<script>
                window.location.href='verifyaccount.php';
                    </script>
          ";
            }
    }
    ?>
</body>
</html>