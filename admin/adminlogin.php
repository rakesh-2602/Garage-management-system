<?php 
require('admindb.php');
if(isset($_SESSION['admin_name']))
{
    header('Location:registered_users.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="icon" href="images/logo.jpg" type="image">
	<script src="../sweetalert.min.js"></script>
</head>
<body>
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
    <form method="POST">
 <div class="container">
 	<div class="header">
 		<h1>Admin Login</h1>
 	</div>
 	<div class="main">
 				<input type="email" placeholder="email" name="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
 			<br>
 				<input type="password" placeholder="password" name="password" required>
 			<br><br>
 				<input type="submit" name="submit" value="Submit">
 		</form>
		<p>
			<span>Back to user login </span><a href="../LoginRegister/login.php" class="link">User</a>
		</p>
 	</div>
 </div>
</body>
<style>
    body {
	font-family: sans-serif;	
	background-image: url(../images/logo2.jpg);
	background-repeat: no-repeat;
	overflow: hidden;
	background-size: cover;
}

.container {
	padding: 1%;
    height: 300px;
    width: 380px;
    background-color: white;
	margin:7% auto;
	border-radius: 25px;
	background-color: white;
	box-shadow: 0 0 17px #333; 
	margin-top:180px;
}

input[type="password"],input[type="email"]{
    width: 80%;
    padding: 10px;
    margin: 10px 0px;
    border: 1px solid black;
	border-radius:50px;
	margin-top:5px;
}

.header {
	text-align: center;
	padding-top: 20px;
}

.header h1 {
	color: black;
	font-size: 45px;
	margin-top: -15px;
}

.main {
	text-align: center;
}

.main input[type=submit] {
	width: 300px;
	height: 40px;
	border:none;
	outline: none;
	padding-left: 40px;
	box-sizing: border-box;
	font-size: 15px;
	color: white;
	margin-bottom: 40px;
	border-radius:50px;
}

.main input[type=submit] {
	padding-left: 0;
	background-color: red;
	letter-spacing: 1px;
	font-weight:bold;
	margin-bottom: 70px;
	cursor:pointer;
	width:40%;
}

.main input[type=submit]:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: green;
}
/* .main input:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #ddd;
} */

span{
	color:black;
}

link{
	color:blue;
}

p{
	margin-top:-50px;
}
</style>
</html>
<?php
if(isset($_POST['submit']))
    {
        $name="vinayakaautoworks00@gmail.com";
        $pass="vinayakaautoworks";
        if($_POST['name']==$name)
            {
				if($_POST['password']==$pass)
					{
						$_SESSION['admin_name']=$name;
                		header("Location:registered_users.php");
					}
				else
					{
						$_SESSION['status']="Incorrect password";
                        $_SESSION['status_code']="error";
						echo "<script>
                			window.location.href='adminlogin.php';
                			</script>
                			";
					}
            }
        else
            {
				$_SESSION['status']="Invalid email";
            	$_SESSION['status_code']="error";
                echo "<script>
                window.location.href='adminlogin.php';
                </script>
                ";
            }
		}
?>