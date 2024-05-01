<?php
require('aconnection.php');
session_start();
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
    <nav><a href="accessories.php">Back</a></nav>
<?php 
        if(isset($_SESSION['status1']))
            {
                ?>
                <script>
                swal({
  title: "<?php echo $_SESSION['status1']; ?>",
  icon: "<?php echo $_SESSION['status_code1']; ?>",
});
</script>
                <?php
                unset ($_SESSION['status1']);
            }
        ?>
        <?php
        if(isset($_SESSION['status2']))
            {
                ?>
                <script>
                swal({
  title: "<?php echo $_SESSION['status2']; ?>",
  icon: "<?php echo $_SESSION['status_code2']; ?>",
});
</script>
                <?php
                unset ($_SESSION['status2']);
            }
        ?>
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
    <th>Serial No.</th>
    <th>Item Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Remove</th>
  </tr>
  <?php
  $total=0;
  $i=0;
            $cart_qry="SELECT * from `items` where `user_id`='$_SESSION[user_id]'";
            $cart_res=mysqli_query($accconn,$cart_qry);
            if(mysqli_num_rows($cart_res)>0)
                {
                    while($row=mysqli_fetch_assoc($cart_res))
                        {
                            $i=$i+1;
                            $total=$total+$row['price']*$row['quantity'];
            echo "
            <tr>
                <td>$i</td>
                <td>$row[name]</td>
                <td>$row[price]</td>
                <td>$row[quantity]</td>
                <form action='accessoriesdb.php' method='POST'>
                <td><button name='remove' class='btn'>Remove</button></td>
                <input type='hidden' name='cart_id' value='$row[id]'>
                <input type='hidden' name='qty' value='$row[quantity]'>
                <input type='hidden' name='name' value='$row[name]'>
                </form>
            </tr>
            ";
            
        }?>
   
</table>
            </div>
            </div>
        </div>
        <div class="amt">
        <div class="col-lg-4">
                <h2>Total</h2>
                <h4><?php echo $total;?> Rs.</h4>
                <div class="details">
                <form action="bookdb.php" method="POST">
                <input type="text" name="fullname" placeholder="Full name" required><br><br>
                <input type="text" name="phonenumber" placeholder="Mobile number" pattern="[0-9]{10}" required><br><br>
                <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br><br>
                <input type="text" name="address" placeholder="Address" required><br><br>
                <input id="radioonline" type="radio" name="pmode" value="Online">
                <label for="radioonline">Online Payment</label><br><br>
                <input id="radiocod" type="radio" name="pmode" value="COD" checked>
                <label for="radiocod">Cash on delivery</label>
                <input type="hidden" name="total" value="<?php echo $total ?>">
                <br><br><center><input type="submit" name="purchase" value="Book Now"></center>
                </form>
                </div>
            </div>
            </div>
    </div>
    <?php
     }
     ?>
</body>
<style>
    .details{
        padding:20px;
    }
    input[type=text],input[type=email]{
        height:36px;
        width:100%;
    }
    input[type=submit]{
        width:40%;
        height:35px;
        cursor: pointer;
        color: white;
        background-color: red;
        border-radius: 50px;
    }
    input[type=submit]:hover{
        color: white;
        background-color: green;
    }
    label{
        font-size:18px;
    }
    nav a{
    text-decoration: none;
    margin-left: 90%;
    font-size: 20px;
    background-color: green;
    padding:4px;
    border-radius:15px; 
    padding-left: 12px;
    padding-right: 12px;
    color:white;
    }
    nav a:hover{
        background-color: red;
        color:white;
    }
    nav{
        margin-top: 2%;
    }
    body{
        background:white;
        /* background:radial-gradient(#fff,#ffd6d6);    */
     }
    .amt{
    padding-left:35%;
    }
    .col-lg-4{
        padding:8px;
        border-radius: 10px;
        text-align:center;
        width:45%;
        background-color:lightgray;
    }
    .info{
        padding-left:25%;
        display:flex;
    }
    .btn{
        padding:5px;
        color:white;
        background-color:green;
        cursor:pointer;
        border-radius: 50px;
    }
    .btn:hover{
        color:white;
        background-color:red;
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