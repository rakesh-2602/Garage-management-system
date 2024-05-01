<?php require('admindb.php'); 
if(!isset($_SESSION['admin_name']))
{
    header('Location:adminlogin.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.jpg" type="image">
    <title>Sell</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
});</script>
                <?php
                unset ($_SESSION['status']);
            }
        ?>
    <header>
        <div class="left-side">
            <h3>Admin</h3>
        </div>
    </header>
    <div class="side-nav">
        <div class="logo">
            <img src="../images/logo.jpg" alt="not supported">
        </div>
        <a href="registered_users.php"><i class="fa fa-user-circle-o"><span>Registered Users</span></i></a>
        <a href="booked_services.php"><i class="fa fa-vcard-o"><span>Booked Services</span></i></a>
        <a href="accessories.php"><i class="fa fa-archive"><span>Accessories</span></i></a>
        <a href="buy.php"><i class="fa fa-th-large"><span>Buy</span></i></a>
        <a href="sell.php" class="active"><i class="fa fa-th-large"><span>Sell</span></i></a>
        <a href="feedback.php"><i class="fa fa-th-large"><span>Feedbacks</span></i></a>
        <a href="invoice.php"><i class="fa fa-th-large"><span>Invoice</span></i></a>
        <a href="adminlogout.php">Logout</a>
    </div>
    <section class="home-section">
        <form action="booked_users.php" method="POST"><br>
        <input type="submit" class="btn" name="booked_users" value="Booked Users">
        </form>
        <form action="admindb.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                    <h1>Enter product details</h1><br>
                        <input type="text" id='enter' name="brand" placeholder="Enter brand" required /><br>
                        <input type="text" id='enter'  name="model" placeholder="Enter model" required /><br>
                        <input type="number" id='enter' min="2000" name="year" placeholder="Enter year" required /><br>
                        <input type="number" id='enter' min="1" name="ownership" placeholder="Enter Ownership" required /><br>
                        <input type="number" id='enter' name="price" min="1" placeholder="Enter price" required /><br>                       
                        <p>Upload Photo</p> 
                        <input type="file" name="photo" id="choose_file"><br>
                        <input type="submit" name="upload" value="Upload">
                        </form>
            </div>
    </section>
</body>
<style>
* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
 .side-nav .logo img{
        width: 100px;
        height: 60px;
        border-radius: 100px;
        margin-bottom: 10px;
    }
#choose_file{
        background: white;
        border:none;
        outline:none;
        box-shadow:2px 2px 2px black;
        border-radius:50px;
        height:34px;
    }
    ::-webkit-file-upload-button{
        border:none;
        background: green;
        border-radius:50px;
        height:34px;
        color:white;
        width:90px;
        box-shadow:3px 1px 1px gray;
        cursor:pointer;
    }
#enter{
    padding-left: 10px;
}
input{
    width: 100%;
    height: 40px;
    border-radius: 50px;
}
input[type=submit].btn{
    margin-top: 15px;;
    margin-left: 80%;
    width:120px;
    border-radius: 50px;
    background-color: red;
    cursor:pointer;
} 
input[type=submit]{
    color:white;
    cursor:pointer;
    border-radius: 50px;
    background-color: red;
    width: 50%;
    align-self: center;
    font-weight: bold;
}
input[type=submit]:hover{
    background-color: green;
} 
.container {
    margin-left: 30%;
    margin-top: 5%;
    margin-bottom: 120px;
	width: 400px;
	height: 480px;
	background: rgb(160, 159, 159);
    border-radius: 10px;
	display: flex;
	flex-direction: column;
	padding: 1rem;
}
    body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    header{
        position: fixed;
        background: #22242a;
        padding: 20px;
        width: 100%;
        height: 70px;
    }
    .left-side h3{
        color: white;
        margin: 0;
        text-transform: uppercase;
        font-size: 22px;
        font-weight: 900;
    }
    .side-nav{
        background: #2f323a;
        padding-top: 30px;
        margin-top:70px;
        position: fixed;
        left: 0;
        width: 250px;
        height: 100%;
        transition: 0.5s;
        transition-property: left;
    }
    .logo{
        text-align: center;
    }
    .side-nav img{
        width: 120px;
        height: 100px;
        border-radius: 100px;
        margin-bottom: 10px;
    }
    .side-nav a{
        color: white;
        display: block;
        width: 100%;
        line-height: 60px;
        text-decoration: none;
        padding-left: 40px;
        box-sizing: border-box;
        transition: 0.4s;
    }
    .side-nav a.active{
        background:  #0a7e96;
    }
    .side-nav a:hover{
        background: #0a7e96;
    }
    .side-nav i{
        padding-right: 10px;
    }
    .side-nav span{
        margin-left: 15px;
        font-size: large;
    }
    .home-section{
  position: fixed;
  background:linear-gradient(#5CE0D8,#01345B,#FFCF43);
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
}

</style>
</html>