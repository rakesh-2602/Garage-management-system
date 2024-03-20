<?php
session_start();
require('buyconnection.php');
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
    <script src="../sweetalert.min.js"></script>
    <link rel="icon" href="../images/logo.jpg" type="image">
    <title>My Cart</title>
</head>
<body>
<?php
         if(isset($_SESSION['status1']))
         {
             ?>
             <script>
             swal({
title: "<?php echo $_SESSION['status1']; ?>",
icon: "<?php echo $_SESSION['status_code1']; ?>",
});</script>
             <?php
             unset ($_SESSION['status1']);
         }
?>
    <nav><a href="buy.php">Back</a></nav>
    <div class="container">
        <div class="row">
            <div class="pad">
            <div class="col-lg-12">
                <h1>My Cart</h1>
            </div>
            </div>
            <div class="info">
            <div class="col-lg-8">
            <!DOCTYPE html>
<table>
  <tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Year</th>
    <th>Ownership</th>
    <th>Price</th>
  </tr>
  <?php
  $total=0;
            $qry="SELECT * FROM `userbought` where `user_id`='$_SESSION[user_id]'";
            $res=mysqli_query($buyconn,$qry);
            if(mysqli_num_rows($res)>0)
                {
                foreach($res as $row)
                        {
            $total=$total+$row['price'];
            echo "
            <tr>
                <td>$row[brand]</td>
                <td>$row[model]</td>
                <td>$row[year]</td>
                <td>$row[ownership]</td>
                <td>$row[price]</td>
            </tr>
            ";
                }
            }
  ?>
</table>
            </div>
            </div>
        </div>
        <div class="amt">
        <div class="col-lg-4">
                <h2>Total</h2>
                <h4><?php echo $total;?> Rs.</h4>
            </div>
            </div>
    </div>
</body>
<style>
    nav a{
        margin-left: 90%;
        text-decoration: none;
        border:2px solid black;
        font-size:20px;
        padding-top: 5px;
        PADDING-bottom: 5px;
        padding-left:16px;
        padding-right:16px;
        border-radius:15px;
        background-color: white;
        color:black;
    }
    nav a:hover{
        background:green;
        color:white;
        /* background-color: rgb(31, 143, 212); */
    }
    nav{
        margin-top: 2%;
    }
    body{
        background:white;
        /* background:radial-gradient(#fff,#ffd6d6); */
     }
    .amt{
    padding-left:45%;
    }
    .col-lg-4{
        padding:8px;
        border-radius: 10px;
        text-align:center;
        width:15%;
        background-color:lightgray;
    }
    .info{
        padding-left:25%;
        display:flex;
    }
    .btn{
        border:1px solid red;
        padding:5px;
        color:white;
        background-color:red;
    }
    .btn:hover{
        color:white;
        background-color:green;
    }
    .col-lg-8{
        padding: 4%;
    }
    .container{
        padding-left:100px;
        padding-right:100px;
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  text-align: left;
  padding: 8px;
}
th {
    border-top: 1px solid black;
    border-bottom: 1px solid black; 
}
tr:nth-child(even) {
  background-color: #dddddd;
}
    .pad{
        padding-left:27%;
    }
    .col-lg-12{
        width:68%;
        text-align:center;
        background:lightgray;
    }  
</style>
</html>