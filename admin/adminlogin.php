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
        <div class="login-box">
 		<h2>Admin Login</h2>
		 		<div class="input-box">
 				<input type="email" name="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <label>Email</label>
                </div>
				<div class="input-box">
					<input type="password" name="password" required>
                    <label>Password</label>
                </div>
				<button type="submit" class="btn" name="submit" value="Submit">Submit</button>
				<div class="signup-link">
					<a href="../LoginRegister/login.php" class="link">Back to User login </a>
                </div>

 	<!-- <div class="main">
 				<input type="email" placeholder="email" name="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
 			<br>
 				<input type="password" placeholder="password" name="password" required>
 			<br><br>
 				<input type="submit" name="submit" value="Submit"> -->
 		</form>
		<!-- <p>
			<span>Back to user login </span><a href="../LoginRegister/login.php" class="link">User</a>
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
    color: white;
    text-decoration: none;
    font-weight: 600;
}
.signup-link a:hover {
    text-decoration: underline;
}

/* body {
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

/*span{
	color:black;
}

link{
	color:blue;
}

p{
	margin-top:-50px;
} */
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
						echo "<script>
                			window.location.href='registered_users.php';
                			</script>";
                		//header("Location:registered_users.php");
					}
				else
					{
						$_SESSION['status']="Incorrect password";
                        $_SESSION['status_code']="error";
						echo "<script>
                			window.location.href='adminlogin.php';
                			</script>";
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