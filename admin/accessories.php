<?php 
require('admindb.php');
if(!isset($_SESSION['admin_name']))
{
    header('Location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.jpg" type="image">
    <title>Accessories</title>
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
        <a href="accessories.php" class="active"><i class="fa fa-archive"><span>Accessories</span></i></a>
        <a href="buy.php"><i class="fa fa-th-large"><span>Buy</span></i></a>
        <a href="sell.php"><i class="fa fa-th-large"><span>Sell</span></i></a>
        <a href="feedback.php"><i class="fa fa-th-large"><span>Feedbacks</span></i></a>
        <a href="invoice.php"><i class="fa fa-th-large"><span>Invoice</span></i></a>
        <a href="adminlogout.php">Logout</a>
    </div>
    <section class="home-section">
        <form action="updatestocks.php" method="POST">
        <input type="submit" value="Update Stocks" name="stocks">
        </form>
        <h2>Accessories Booked Details</h2>
        
        <table>
          <tr>
            <th>Sl. No.</th>
            <th>Name</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Address</th>
            <th>Payment Mode</th>
            <th>Details</th>
          </tr>
          <?php
          $qry="SELECT Distinct * from `ordered_details`";
          $res=mysqli_query($accconn,$qry);
          if(mysqli_num_rows($res)>0)
            {
                $n=0;
                foreach($res as $row)
                    {
                        $n=$n+1;
                        ?>
                         <tr>
                            <td><?php echo $n; ?></td>
                            <td><?= $row['name']?></td>
                            <td><?= $row['mobile_no']?></td>
                            <td><?= $row['email']?></td>
                            <td><?= $row['address']?></td>
                            <td><?= $row['payment_mode']?></td>
                            <td><a href="aceessories_details.php?orderid=<?= $row['order_id'] ?>">View Details</a></td>
                        </tr>
                        <?php
                    }
            }
        else
            {
                ?>
            <tr>
                <td colspan="7">No records found</td>
            </tr>
            <?php
            }
            ?>
            </section>
</body>
<style>
     .side-nav .logo img{
        width: 100px;
        height: 60px;
        border-radius: 100px;
        margin-bottom: 10px;
    }
      /* .btn{
        color:white;
        background:red;
        border:2px solid red;
        cursor:pointer;
    }
    .btn:hover{
        color:red;
        background:white;
        border:2px solid red;
    } */
    input[type=submit]{
        cursor:pointer;
        margin-left:80%;
        width:120px;
        height:40px;
        border-radius:50px;
        background:red;
        font-style:bold;
        color:white;
    }
    input[type=submit]:hover{
    background-color: green;
}
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

td, th {
  border: 2.5px solid black;
  text-align: left;
  padding: 8px;
}
td{
    background-color: #fff;
}
th{
    color:white;
}
h2{
    color:white;
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
        height: 30px;
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
        width: 140px;
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
        /* transition: background; */
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
        padding-left: 40px;
        padding-top: 50px;
        position: relative;
        background:linear-gradient(#191654,#43C6AC);
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
    }
</style>
</html>