<?php
require('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../sweetalert.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="back"><a href="../index.php">Back</a></div>
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
    <div class="container">
    <div class="profile">
    <?php
$qry="SELECT * from `registered_user` where `id`='$_SESSION[user_id]'";
$res=mysqli_query($conn,$qry);
if(mysqli_num_rows($res)>0)
    {
       $row=mysqli_fetch_assoc($res);
       echo '<img src="'.$row['picture'].'">';
                ?>
                <h3><?php echo $row['username']; ?></h3>
                <h3><?php echo $row['email']; ?></h3>

<?php
}
?><form action="" method="post" enctype="multipart/form-data">
    <div class="photo">
    <input type="file" accept="images/*" id="chose_file" name="profilephoto" required/>
    <input type="submit" name="changephoto" value="Update photo"></div></form><br><br>
    <form action="" method="POST">
   <label for="oldpass">Old Password&emsp;&ensp;</label>
   <input type="password" name="oldpass" required><br><br>
   <label for="newpass">New Password&emsp;&nbsp;</label>
   <input type="password" name="newpass" required><br><br>
   <label for="confirmpass">Confirm Password</label>
   <input type="password" name="confirmpass" required>
    <input type="submit" name="update" value="Update">
</form>
 </div>
 </div>
 <?php
 if(isset($_POST['update']))
    {
        $passcheckqry="SELECT `password` from `registered_user` where `id`='$_SESSION[user_id]'";
        $result=mysqli_query($conn,$passcheckqry);
        if(mysqli_num_rows($res)==1)
        {
            while($row=mysqli_fetch_assoc($result))
                {
                    if(password_verify($_POST['oldpass'],$row['password']))
                        {
                            if($_POST['oldpass']!=$_POST['newpass'])
                            {
                            if($_POST['newpass']==$_POST['confirmpass'])
                                {
                                    $hash=password_hash($_POST['newpass'],PASSWORD_DEFAULT);                        
                                    $updateqry="UPDATE `registered_user` set `password`='$hash' where `id`='$_SESSION[user_id]'";
                                    if(mysqli_query($conn,$updateqry))
                                        {
                                            $_SESSION['status']="Updated successfully";
                                            $_SESSION['status_code']="success";
                                            echo "<script>
                                                        window.location.href='profile.php';
                                                </script>
                                                ";
                                        }
                                    else
                                        {
                                            echo "<script>
                            alert('Error while fetching the data');
                            window.location.href='profile.php';
                            </script>
                            ";
                                        }
                                }
                            else
                                {
                                    $_SESSION['status']="Password and confirm passwords not matching";
                                    $_SESSION['status_code']="error";
                                    echo "<script>
                            window.location.href='profile.php';
                            </script>
                            ";
                                }
                            }
                            else
                            {
                                $_SESSION['status']="New password cannot be your old password";
                                $_SESSION['status_code']="error";
                                echo "<script>
                            window.location.href='profile.php';
                            </script>
                            ";
                            }
                        }
                    else
                        {
                            $_SESSION['status']="Incorrect Password";
                            $_SESSION['status_code']="error";
                            echo "<script>
                            window.location.href='profile.php';
                            </script>
                            ";
                        }
                }
        }

    }
if(isset($_POST['changephoto']))
    {
        $filename=$_FILES['profilephoto']['name'];
        $temp_name=$_FILES['profilephoto']['tmp_name'];
        $folder='profile/'.$filename;
        move_uploaded_file($temp_name,$folder);
        if($filename!="")
            {
                $photoupdateqry="UPDATE `registered_user` SET `picture`='$folder' WHERE `id`='$_SESSION[user_id]'";
                if(mysqli_query($conn,$photoupdateqry))
                    {
                        $_SESSION['status']="Successfully Updated";
                        $_SESSION['status_code']="success";
                        echo "<script>
                        window.location.href='profile.php';
                        </script>
                        ";
                    }
                else
                    {
                        echo "<script>
                alert('Cannot upload');
                window.location.href='profile.php';
                </script>
                ";
                    }
            }
        else
            {
               echo "<script>
                alert('Please select file');
                window.location.href='profile.php';
                </script>
                ";
            }
    }
 ?>
 <style>
    #chose_file{
        background: white;
        border:none;
        outline:none;
        box-shadow:2px 5px 2px black;
        border-radius:50px;
    }
    ::-webkit-file-upload-button{
        border:none;
        background: #02744efa;
        border-radius:50px;
        height:30px;
        color:white;
        width:90px;
        box-shadow:3px 1px 1px gray;
        cursor:pointer;
    }
    .photo input[type=submit]{
        width: 35%;
        margin-left: 13px;
        background-color: red;
        box-shadow:2px 3px 5px gray;
        border-radius:50px;
    }
    .photo input[type=submit]:hover{
        background-color: green;
    }

    h3{
        color:#000;
        line-height: 1.2em;
        font-weight: 500;
        font-size:20px;
    }
    body{
        background-color: #eee;
    }
    .back{
        margin-top: 1%;
    }
    a{
        text-decoration: none;
    margin-left: 90%;
    font-size: 20px;
    border:1px solid black;
    background-color: green;
    padding:4px;
    border-radius:15px; 
    padding-left: 12px;
    padding-right: 12px;
    color:white;
    }
    a:hover{
        background-color: red;
    color:white;
    }
   .container{
    min-height:50vh;
    display:flex;
    align-items: center;
    justify-content: center;
    padding:30px;
   }
   .container .profile{
    border:1px solid black;
    padding:20px;
    background-color:lightgray;
    box-shadow:3px 2px 10px #000;
    text-align: center;
    width:415px;
    border-radius:5px;
   }
   .container .profile img{
    height:150px;
    width:150px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom: 5px;
   }
   input[type=submit]{
    cursor:pointer;
    margin-top: 20px;
    margin-left: 22px;
    width:180px;
    height:35px;
    font-size:17px;
    color:white;
    border:none;
    background-color:red;
    box-shadow:2px 3px 5px gray;
    border-radius:50px;
   }
   input[type=submit]:hover{
    background-color: green;
   }
   button{
    height:35px;
    margin-top: 20px;
    width:150px;
    color:white;
    border:none;
    font-size:17px;
   }
   label{
    font-size:19px; 
   }
   input[type=password]{
    height:20px;
    width:40%;
   }
</style>
</body>
</html>