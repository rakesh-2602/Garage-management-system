<?php
require('bookservice/bookconnection.php');
require('accessories/aconnection.php');
require('buy/buyconnection.php');
require('sell/sellconnection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="back"><a href="index.php">Back</a></div>
<?php 
$bookqry="SELECT * FROM `service` WHERE `user_id`='$_SESSION[user_id]'";
$bookres=mysqli_query($bookconn,$bookqry);
if($bookres)
    {   
        if(mysqli_num_rows($bookres)>0)
            {?>
                <table>
                <center><h1>Services Booked</h1></center>
                <tr>
                    <th>Name</th>
                    <th>Reg. No.</th>
                    <th>Address</th>
                    <th>Mobile No.</th>
                    <th>Email</th>
                    <th>Vehicle</th>
                    <th>Fuel</th>
                    <th>Booked Date</th>
                    <th>Service Date</th>
                    <th>Time</th>
                    <th>Complaint</th>
                    <th>Token</th>
                </tr>
                <tr>
                    <?php 
                        while($row=mysqli_fetch_assoc($bookres))
                            {
                                echo "
                                <tr>
                                    <td>$row[name]</td>
                                    <td>$row[reg_no]</td>
                                    <td>$row[address]</td>
                                    <td>$row[mobile_no]</td>
                                    <td>$row[email]</td>
                                    <td>$row[v_name]</td>
                                    <td>$row[fuel_level]</td>
                                    <td>$row[booked_date]</td>
                                    <td>$row[service_date]</td>
                                    <td>$row[time_slot]</td>
                                    <td>$row[complaint]</td>
                                    <td>$row[token]</td>
                                </tr>
                                    ";
                            }
                    ?>
            </table>
            <?php
            }
    }
$total=0;
$i=0;
$cart_qry="SELECT * from `user_orders` where `user_id`='$_SESSION[user_id]'";
$cart_res=mysqli_query($accconn,$cart_qry);
if(mysqli_num_rows($cart_res)>0)
    {?>
        <table>
            <center><h1>Accessories Booked</h1></center>
            <tr>
                <th>Serial No.</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
  <?php
                    while($row=mysqli_fetch_assoc($cart_res))
                        {
                            $i=$i+1;
                            $total=$total+$row['price']*$row['quantity'];
            echo "
            <tr>
                <td>$i</td>
                <td>$row[item_name]</td>
                <td>$row[price]</td>
                <td>$row[quantity]</td>
            </tr>
            ";
                    }
                    ?>
                    </table>
                    <?php
    }
  $total=0;
            $qry="SELECT * FROM `userbought` where `user_id`='$_SESSION[user_id]'";
            $res=mysqli_query($buyconn,$qry);
            if(mysqli_num_rows($res)>0)
                {?>
                <table>
                <center><h1>Vehicle Booked</h1></center>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Year</th>
                <th>Ownership</th>
                <th>Price</th>
            </tr>
                <?php
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
                ?>
                    <tr>
                        <td colspan=6><center><h4>Total - <?php echo $total; ?> Rs.</h4></center></td>
                    </tr>
                    </table>
                    <?php
            }
$sell_qry="SELECT * from `selltable` where `user_id`='$_SESSION[user_id]'";
$qryres=mysqli_query($sellconn,$sell_qry);
if($qryres)
        {
            if(mysqli_num_rows($qryres)>0)
                {?>
                <table>
                    <center><h1>Sell History</h1></center>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Brand</th> 
                        <th>Model</th>
                        <th>Year</th>
                        <th>KM</th>
                        <th>Ownership</th>
                        <th>Value</th>
                    </tr>
                    <?php
                    foreach($qryres as $row)
                        {
                            echo "
                                <tr>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[mobile_number]</td>
                                    <td>$row[brand]</td>
                                    <td>$row[model]</td>
                                    <td>$row[year]</td>
                                    <td>$row[km]</td>
                                    <td>$row[ownership]</td>
                                    <td>$row[value]</td>
                                </tr>
                                 ";
                        }
                    ?>
                </table>
                <?php                   
                }
        }
  ?>
  <footer>
        <div class="footer">
            
        </div>
  </footer>
<style>
    .back{
        margin-top: 2%;
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
    .footer{
        height:40px;
    }
    h4{
        font-weight: normal;
    }
       .btn{
        border:1px solid red;
        padding:5px;
        color:white;
        background-color:red;
    }
    .btn:hover{
        color:red;
        background-color:white;
    }
    html{
        height:auto;
    }
      body{
        background:white;
        /* background:radial-gradient(#fff,#ffd6d6);  */
     }
     h1{
        font-size:30px;
        margin-top:2%;
        text-decoration: underline;
     }
        table {
            border:1px solid black;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-left: 5%;
}
th {
    border-top: 1px solid black;
    border-bottom: 1px solid black; 
    background: lightgray;
}
td, th {
  text-align: left;
  padding: 8px;
}
td{
    background-color: #eee;
}
</style>
</body>
</html>