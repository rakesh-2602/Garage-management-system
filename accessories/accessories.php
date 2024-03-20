<?php 
require('accessoriesdb.php'); 
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
    <title>Accessories</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="../images/logo.jpg" type="image">
    <script src="../sweetalert.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
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
    <div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="../images/logo.jpg" width="150px">
        </div>
        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
        <div class="home">
        <a href="../index.php"><i class="fas fa-home"></i></a>
    </div>
    </div>
    <div class="row">
        <div class="col2">
            <h1>Give your vehicle <br>A New style!</h1>
            <p>Buy latest accessories for affordable price!</p>
        </div>
        <div class="col2">
            <img src="../images/bike.png" width="120%">
        </div>
    </div>
</div>
</div>
<br><br><br><br><h2 align="center">CATEGORIES</h2>
<div class="categories">
    <div class="smallcontainer">
    <div class="row2">
        <div class="card">
            <h3>Helmets</h3>
        <div class="col3">
            <a href="#helmet"><img src="../images/helmet.jpeg" width="220px" height="220px"></a>
        </div>

    </div>
    <div class="card">
        <h3>Spark Plugs</h3>
        <div class="col3">
            <a href="#sparkplug"><img src="../images/spark plug.jpg" width="220px" height="220px"></a>
        </div>
    </div>
    <div class="card">
        <h3>Vehicle Lubricants</h3>
        <div class="col3">
            <a href="#lubes"><img src="../images/lubess.jpeg" width="220px" height="220px"></a>
        </div>
    </div>
    <div class="card">
        <h3>Engine Oils</h3>
        <div class="col3">
            <a href="#engineoil"><img src="../images/engineoil2.jpg" width="220px" height="220px"></a>
        </div>
    </div>
    </div><br><br><br><br>
    <div class="small-container">
        <h2>HELMETS</h2>
        <a name="helmet"></a>
        <div class="row2">
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                &emsp;&emsp;&emsp;<img name="img" src="../images/helmet1.jpeg">
                <h4>Vega Crux Black Helmet-M</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>                   
                </div>
                <p>₹ 1,156</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Vega Crux Black Helmet-M'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Vega Crux Black Helmet-M">
                <input type="hidden" name="price" value="1156">
                <input type="hidden" name="quantity" value="qty">
                </div>
                </form>
        </div>
          <div class="col4">
              <div class="card1">
              <form action="accessoriesdb.php" method="post">
                &emsp;&emsp;&emsp;<img src="../images/helmet2copy.jpeg">
                <h4>Axor Apex Venomous Dull Black Gray Helmet-M</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>                
                </div>
                <p>₹ 4,844</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Axor Apex Venomous Dull Black Gray Helmet-M'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Axor Apex Venomous Dull Black Gray Helmet-M">
                <input type="hidden" name="price" value="4844">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp; &emsp;&emsp;<img src="../images/helmet3copy.jpeg" height="248px">
                <h4>Vega Off Road Black Silver Helmet</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>₹ 1,825</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Vega Off Road Black Silver Helmet'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Vega Off Road Black Silver Helmet">
                <input type="hidden" name="price" value="1825">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp; &emsp;&emsp;<img src="../images/helmet4.jpeg" height="234px">
                <h4>Royal Enfield ABS Marble Open Face Helmet</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>                
                </div>
                <p>₹ 2,900</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Royal Enfield ABS Marble Open Face Helmet'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Royal Enfield ABS Marble Open Face Helmet">
                <input type="hidden" name="price" value="2900">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
        </div>
    </div>
    <div class="small-container">
        <h2>SPARK PLUGS</h2>
        <a name="sparkplug"></a>
        <div class="row2">
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/spark1.jpeg" height="240px">
                <h4>NGK Laser Iridium Spark Plug</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>                   
                </div>
                <p>₹ 3,800</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='NGK Laser Iridium Spark Plug'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="NGK Laser Iridium Spark Plug">
                <input type="hidden" name="price" value="3800">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
          <div class="col4">
              <div class="card1">
              <form action="accessoriesdb.php" method="post">
                &emsp;&emsp;&emsp;<img src="../images/spark2.jpeg" height="240px">
                <h4>NGK Standard Spark Plug</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>       
                    <i class="fa fa-star-half"></i>             
                </div>
                <p>₹ 230</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='NGK Standard Spark Plug'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="NGK Standard Spark Plug">
                <input type="hidden" name="price" value="230">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/spark3.jpeg" height="240px">
                <h4>NIKAVI SP01 Spark Plug</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>₹ 120</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='NIKAVI SP01 Spark Plug'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="NIKAVI SP01 Spark Plug">
                <input type="hidden" name="price" value="120">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/spark4.jpeg" height="240px">
                <h4>NGK Iridium Spark Plug</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star-half"></i>            
                </div>
                <p>₹ 805</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='NGK Iridium Spark Plug'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="NGK Iridium Spark Plug">
                <input type="hidden" name="price" value="805">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
        </div>
    </div>
    <div class="small-container">
        <h2>VEHICLE LUBRICANTS</h2>
        <a name="lubes"></a>
        <div class="row2">
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/lubes1.jpeg" height="240px">
                <h4>WD-40 Multipurpose Spray</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star-half"></i>            
                </div>
                <p>₹ 350</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='WD-40 Multipurpose Spray'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="WD-40 Multipurpose Spray">
                <input type="hidden" name="price" value="350">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
          <div class="col4">
              <div class="card1">
              <form action="accessoriesdb.php" method="post">
                &emsp;&emsp;&emsp;<img src="../images/lubes2.jpeg" height="240px">
                <h4>Motul C2 Chain Lube</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>       
                </div>
                <p>₹ 220</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Motul C2 Chain Lube'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Motul C2 Chain Lube">
                <input type="hidden" name="price" value="220">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/lubes3.jpeg" height="220px">
                <h4>Waxpol AP-3 Multipurpose Grease for vehicles</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>₹ 229</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Waxpol AP-3 Multipurpose Grease for vehicles'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Waxpol AP-3 Multipurpose Grease for vehicles">
                <input type="hidden" name="price" value="229">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/lubes4.jpeg" height="220px">
                <h4>Motul Chain Lubes with Chain Cleaning Brush</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>                
                </div>
                <p>₹ 415</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Motul Chain Lubes with Chain Cleaning Brush'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Motul Chain Lubes with Chain Cleaning Brush">
                <input type="hidden" name="price" value="415">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
        </div>
    </div>
    <div class="small-container">
        <h2>ENGINE OILS</h2>
        <a name="engineoil"></a>
        <div class="row2">
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/eo1.jpeg" height="240px">
                <h4>Castrol Power1 Ultimate 10W40 4T Synthetic Engine Oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>                   
                </div>
                <p>₹ 570</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Castrol Power1 Ultimate 10W40 4T Synthetic Engine Oil'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Castrol Power1 Ultimate 10W40 4T Synthetic Engine Oil">
                <input type="hidden" name="price" value="570">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
          <div class="col4">
              <div class="card1">
              <form action="accessoriesdb.php" method="post">
                &emsp;&emsp;&emsp;<img src="../images/eo2.jpeg" height="240px">
                <h4>Castrol Power1 Ultimate 20W50 4T Synthetic Engine Oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>  
                    <i class="fa fa-star-half"></i>                
                </div>
                <p>₹ 645</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Castrol Power1 Ultimate 20W50 4T Synthetic Engine Oil'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Castrol Power1 Ultimate 20W50 4T Synthetic Engine Oil">
                <input type="hidden" name="price" value="645">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/eo3.jpeg" height="240px">
                <h4>Castrol Power1 10W40 4T Semi Synthetic Engine Oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>₹ 439</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Castrol Power1 10W40 4T Semi Synthetic Engine Oil'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Castrol Power1 10W40 4T Semi Synthetic Engine Oil">
                <input type="hidden" name="price" value="439">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="accessoriesdb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/eo4.jpeg" height="240px">
                <h4>Castrol Power1 Cruise 20W50 4T Semi Synthetic Engine Oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>  
                    <i class="fa fa-star-half"></i>              
                </div>
                <p>₹ 545</p>
                <input type="submit" name="book" value="Add to cart">
                &emsp;&emsp;&emsp;<b>QTY</b>&ensp;<select name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br><br>
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Castrol Power1 Cruise 20W50 4T Semi Synthetic Engine Oil'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
        {
        echo "Available stocks -   ".$row[0];
        }
        else
        {
            echo "Out of stock";
        }
    ?>
                <input type="hidden" name="item_name" value="Castrol Power1 Cruise 20W50 4T Semi Synthetic Engine Oil">
                <input type="hidden" name="price" value="545">
                <input type="hidden" name="quantity" value="qty">
            </div>
</form>
        </div>
        </div>
    </div>
</div>
</div>
</body>
<style>
    h3{
        color: white;
    }
    input[type=number]{
        width: 60px;
        height: 30PX;
    }
    input[type=submit]{
        cursor: pointer;
        font-weight:bold;
        box-shadow:2px 2px 3px gray;
    }
    .rating i{
        color: goldenrod;
    }
    .card1{
        background-color: #fff;
        border: 2px solid black;
    }
    .card1:hover{
        transform: translateY(-8px);
    }
    .card{
        background-color: black;
        align-items: center;
        justify-content: center;
        border: 2px solid black;
    }
    .cart{
        position: relative;
        right: 80%;
    }
    .navbar a{
        margin-top: 10px;
        font-size: 40px;
        margin-left: 80%;
        color: black;
    }
    .navbar a i:hover{
        color: green;
    }
    .navbar .home a i{
        margin-top: 10px;
        font-size: 38px;
        margin-left: 5%;
        color: black;
    }
    .navbar .home a i:hover{
        color: green;
    }
    .navbar{
        display: flex;
    }
    h2{
        text-decoration: underline;
        font-size:xx-large;
        font-family:Georgia, 'Times New Roman', Times, serif;
        font-weight:bolder;
    }
    *{
    margin: 0;
    padding: 5px;
    box-sizing: border-box;
}
body{
    background:white;
    /* background: radial-gradient(#fff,#ffd6d6); */
    font-family: 'Poppins', sans-serif;
}
.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content:space-around;
}
.row2{
    padding-right: 20px;
    padding-left: 20px;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content:space-around;
}
.col2{
    flex-basis: 50%;
    min-width: 100px;
}
.col2 img{
    /* min-width: 50%; */
    padding: 50px 100px;
}
.col2 h1{
    font-size: 45px;
    line-height: 60px;
    margin: 25px 0;
}
.categories{
    margin: 70px 0;
}
.col3{
    flex-basis: 25%;
    min-width: 250px;
    margin-bottom: 30px;
}

.smallcontainer{
    min-width: 1080px;
    margin: auto;
    padding-left: 45px;
    padding-right: 45px;
}
.col4{
    flex-basis: 25%;
    padding: 20px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}
.col4 img{
    width: 60%;
}
</style>
</html>