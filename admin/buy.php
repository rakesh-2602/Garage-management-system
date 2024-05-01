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
    <title>Buy</title>
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
        <a href="#" class="active"><i class="fa fa-th-large"><span>Buy</span></i></a>
        <a href="sell.php"><i class="fa fa-th-large"><span>Sell</span></i></a>
        <a href="feedback.php"><i class="fa fa-th-large"><span>Feedbacks</span></i></a>
        <a href="invoice.php"><i class="fa fa-th-large"><span>Invoice</span></i></a>
        <a href="adminlogout.php">Logout</a>
    </div>
    <section class="home-section">
<h2>Buy</h2>

<table>
  <tr>
    <th>Sl. No.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile No.</th>
    <th>Brand</th>
    <th>Model</th>
    <th>Year</th>
    <th>Km Driven</th>
    <th>Ownership</th>
    <th>Estimated Price</th>
    <th>Delete</th>
  </tr>
  <?php
          $qry="SELECT * from `selltable`";
          $res=mysqli_query($sellconn,$qry);
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
                            <td><?= $row['email']?></td>
                            <td><?= $row['mobile_number']?></td>
                            <td><?= $row['brand']?></td>
                            <td><?= $row['model']?></td>
                            <td><?= $row['year']?></td>
                            <td><?= $row['km']?></td>
                            <td><?= $row['ownership']?></td>
                            <td><?= $row['value']?></td>
                            <td>
                            <form action="admindb.php" method="POST">    
                            <button type="submit" name="delete_vehicle" value="<?= $row['id']?>" class="btn">Delete</td>
                            </form>
                            </td>
                        </tr>
                        <?php
                    }
            }
        else
            {
                ?>
            <tr>
                <td colspan="11">No records found</td>
            </tr>
            <?php
            }
            ?>
</table>
      </section>
      
</body>
<style>
    .side-nav .logo img{
        width: 100px;
        height: 60px;
        border-radius: 100px;
        margin-bottom: 10px;
    }
    .btn{
        color:white;
        background:green;
        border:2px solid green;
        cursor:pointer;
        border-radius:50px;
    }
    .btn:hover{
        color:white;
        background:red;
        border:2px solid red;
        border-radius:50px;
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
  position: fixed;
  background:linear-gradient(#5CE0D8,#01345B,#FFCF43);
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
}
</style>
</html>