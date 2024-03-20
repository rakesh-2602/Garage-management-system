<?php 
require('sell.php'); 
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
    <link rel="icon" href="../images/logo.jpg" type="image">
    <script src="../sweetalert.min.js"></script>
    <title>Sell</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
</head>
<body><br>
<a href="../index.php"><i class="fas fa-home"></i></a>
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
            }?>
    <form action="sell.php" method="post">
<style>
      a{
        margin-left: 90%;
        font-size:40px;
        color:white;
    }
    a:hover{
        color: green;
    }
    body{
        background-image: url("../images/sell1.jpeg");
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
 font-size: 25px; 
 font-style: normal;
 font-weight: bold;
}
input[type=submit]{
    border: none;
    background-color:black;
 width: 25%;
 font-weight:bold;
 padding: 8px 15px;
 margin: 5px 0;
 border-radius:15px;
 cursor:pointer;
 color:white;
}
input[type=submit]:hover{
    background-color:green;
}
input[type="text"], input[type="number"],input[type="email"]{
    width:125px;
    height: 26px;
}
td{
    color: white;
}
select{
    width: 132px;
    height: 30px;
}
</style>
</head>
<body>
<h2>SELL</h3>
<table align="center" cellpadding = "20">
    <tr>
    <td>Name </td>
    <td><input type="text" name="name" required></td>
    <td>Year</td>
    <td><input type="number" name="year1" required></td>
    </tr>
<tr>
<tr>
    <td>Email ID </td>
    <td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></td>
    <td>KM's Driven</td>
    <td><input type="number" name="km" min="1" required></td>
</tr>
<tr>
<tr>
    <td>Mobile Number </td>
    <td><input type="number" name="number"  pattern="[0-9]{10}" required></td>
    <td>Ownership</td>
    <td><input type="number" name="ownership1" required></td>
    </tr>
<tr>
<td>Brand</td>
<td><select name="brand" >
    <option value="Honda">Honda</option>
    <option value="TVS">TVS</option>
    <option value="Hero">Hero</option>
    <option value="Hero Honda">Hero Honda</option>
    <option value="Suzuki">Suzuki</option>
    <option value="Bajaj">Bajaj</option>
    <option value="Yamaha">Yamaha</option>
    <option value="KTM">KTM</option>
    <option value="Royal Enfield">Royal Enfield</option>
    
</select></td>
<td>Estimate Value</td>
<td><input type="number" name="price" min="1" required></td>
</tr>
<tr>
<td>Model Name</td>
<td><input type="text" name="modal" required></td>
</tr>
<tr>
<td colspan="8" align="center"><input type="submit" value="Submit" name="sub"></td>
</tr>
</table>
</form>
</form>    
</body>
</html>