<?php 
require('bookdb.php'); 
if(!isset($_SESSION['user_id']))
{
    header('Location:Loginregister/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.jpg" type="image" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <title>Book Service</title>
    <script src="../sweetalert.min.js"></script>
</head>
<body>
<form method="POST" action="bookdb.php">
</head>
<body>
<h2>Job Card</h3><a href="../index.php"><i class="fas fa-home"></i></a>
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
<table align="center" cellpadding = "12">
<tr>
<td>Name </td>
<td><input type="text" name="name" required></td>
<td>&emsp;&emsp;Vehicle Name </td>
<td><input type="text" name="vehicle_name" required></td>
</tr>
<tr>
<td>Registration Number</td>
<td><input type="text" name="regno" required></td>
<td>&emsp;&emsp;Fuel Level</td>
<td><select name="fuel" id="fuel">
    <option value="Full">Full</option>
    <option value="Half">Half</option>
    <option value="Empty">Empty</option>
</select></td>
</tr>
<tr>
<td>Address<br /><br /><br /></td>
<td><textarea name="address" rows="4" cols="33" required></textarea></td>
<td>&emsp;&emsp;Date for service</td>
<td><input type="date" name="service_date" required></td>
</tr>
<tr>
<td>Mobile Number</td>
<td><input type="text" name="mobile_number" pattern="[0-9]{10}" required></td>
<td>&emsp;&emsp;Time Slot</td>
<td><select name="time">
    <option value="9am - 11am">9am - 11am</option>
    <option value="11am - 1pm">11am - 1pm</option>
    <option value="2pm - 4pm">2pm - 4pm</option>
    <option value="4pm - 6pm">4pm - 6pm</option>
</select></td>
</tr>
<tr>
<td>Email ID</td>
<td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></td>
<td>&emsp;&emsp;Service<br /><br /><br /></td>
<td><textarea name="complaint" rows="4" cols="33" required></textarea></td>
</tr>
<tr>
<td colspan="4" align="center"><input type="submit" value="Submit" name="sub"></td>
</tr>
</table>
</form>    
</body>
<style>
    a{
        font-size: 38px;
        margin-left: 90%;
        color: white;
    }
    a i:hover{
        color: green;
    }
        .closebtn{
            margin-left:15px;
            margin-top: 9px;
            color:black;
            font-weight:bold;
            float:right;
            line-height:20px;
            font-size:30px;
            cursor:pointer;
            transition:0.3s;
        }
        #alert{text-align: center;
            height:auto;
            width :60%;
            background : lightgreen;
            padding: 0 10px;
            font-size:20px;
            line-height:40px;
            margin:0px 50px;
            color:black;
            border-radius:4px;
        }
        #alert1{text-align: center;
            height:auto;
            width :50%;
            background : lightcoral;
            padding: 0 10px;
            font-size:20px;
            line-height:40px;
            margin:0px 50px;
            color:black;
            border-radius:4px;
        }
    body{
        background-image: url("../images/logo2.jpg");
        background-size:cover;
        background-repeat: no-repeat;
    }
h2{
 font-family: Sans-serif; 
 font-size: 24px;     
 font-family:Georgia, 'Times New Roman', Times, serif; 
 font-weight: bold; 
 color: white;
 text-align: center; 
 text-decoration: underline
}
table{
 font-family: verdana; 
 color:white; 
 font-size: 20px; 
 font-style: normal;
 font-weight: bold;
}
input[type=text], input[type=email], input[type=number]{
 width: 50%;
 padding: 6px 12px;
 margin: 5px 0;
 box-sizing: border-box;
}
input[type=submit]{
    cursor:pointer;
    border-radius:50px;
    box-shadow:3px 4px 6px black;
    border: none;
    background-color:black;
    width: 20%;
    padding: 8px 15px;
    margin: 5px 0;
    font-weight:bold;
    color:white;
}
input[type=submit]:hover{
    background-color:green;
    /* background-color: rgb(54, 54, 212); */
}
td{
    color: #fff;
}
select{
    width: 132px;
    height: 30px;
}
input[type=date]{
    width: 132px;
    height: 25px;
}
input[type=time]{
    width: 132px;
    height: 25px;
}
#a{
    padding-left:400px;
}
</style>
</html>