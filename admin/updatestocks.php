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
    <title>Update Stocks</title>
    <script src="../sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <nav>
<a href="accessories.php"><i class="fas fa-home"></i></a></nav>
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
<br><br><br><h2 align="center">CATEGORIES</h2>
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
                <form action="admindb.php" method="post">
                &emsp;&emsp;&emsp;<img name="img" src="../images/helmet1.jpeg" height="200px">
                <h4>Vega Crux Black Helmet-M</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>                   
                </div>
                <p>₹ 1,156</p><br>
                Available stocks -   <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Vega Crux Black Helmet-M'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Vega Crux Black Helmet-M">
                <input type="hidden" name="quantity" value="stock">
                </div>
                </form>
        </div>
          <div class="col4">
              <div class="card1">
              <form action="admindb.php" method="post">
                &emsp;&emsp;&emsp;<img src="../images/helmet2copy.jpeg" height="200px">
                <h4>Axor Apex Venomous Dull Black Gray Helmet-M</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>                
                </div>
                <p>₹ 4,844</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Axor Apex Venomous Dull Black Gray Helmet-M'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Axor Apex Venomous Dull Black Gray Helmet-M">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="admindb.php" method="post">
                    &emsp; &emsp;&emsp;<img src="../images/helmet3copy.jpeg" height="200px">
                <h4>Vega Off Road Black Silver Helmet</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>₹ 1,825</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Vega Off Road Black Silver Helmet'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Vega Off Road Black Silver Helmet">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="admindb.php" method="post">
                    &emsp; &emsp;&emsp;<img src="../images/helmet4.jpeg" height="200px">
                <h4>Royal Enfield ABS Marble Open Face Helmet</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>                
                </div>
                <p>₹ 2,900</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Royal Enfield ABS Marble Open Face Helmet'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Royal Enfield ABS Marble Open Face Helmet">
                <input type="hidden" name="quantity" value="stock">
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
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/spark1.jpeg" height="200px">
                <h4>NGK Laser Iridium Spark Plug</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>                   
                </div>
                <p>₹ 3,800</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='NGK Laser Iridium Spark Plug'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="NGK Laser Iridium Spark Plug">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
          <div class="col4">
              <div class="card1">
              <form action="admindb.php" method="post">
                &emsp;&emsp;&emsp;<img src="../images/spark2.jpeg" height="200px">
                <h4>NGK Standard Spark Plug</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>       
                    <i class="fa fa-star-half"></i>             
                </div>
                <p>₹ 230</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='NGK Standard Spark Plug'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="NGK Standard Spark Plug">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/spark3.jpeg" height="200px">
                <h4>NIKAVI SP01 Spark Plug</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>₹ 120</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='NIKAVI SP01 Spark Plug'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="NIKAVI SP01 Spark Plug">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/spark4.jpeg" height="200px">
                <h4>NGK Iridium Spark Plug</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star-half"></i>            
                </div>
                <p>₹ 805</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='NGK Iridium Spark Plug'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="NGK Iridium Spark Plug">
                <input type="hidden" name="quantity" value="stock">
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
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/lubes1.jpeg" height="200px">
                <h4>WD-40 Multipurpose Spray</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star-half"></i>            
                </div>
                <p>₹ 350</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='WD-40 Multipurpose Spray'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="WD-40 Multipurpose Spray">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
          <div class="col4">
              <div class="card1">
              <form action="admindb.php" method="post">
                &emsp;&emsp;&emsp;<img src="../images/lubes2.jpeg" height="200px">
                <h4>Motul C2 Chain Lube</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>       
                </div>
                <p>₹ 220</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Motul C2 Chain Lube'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Motul C2 Chain Lube">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/lubes3.jpeg" height="200px">
                <h4>Waxpol AP-3 Multipurpose Grease for vehicles</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>₹ 229</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Waxpol AP-3 Multipurpose Grease for vehicles'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Waxpol AP-3 Multipurpose Grease for vehicles">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/lubes4.jpeg" height="200px">
                <h4>Motul Chain Lubes with Chain Cleaning Brush</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>                
                </div>
                <p>₹ 415</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Motul Chain Lubes with Chain Cleaning Brush'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Motul Chain Lubes with Chain Cleaning Brush">
                <input type="hidden" name="quantity" value="stock">
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
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/eo1.jpeg" height="200px">
                <h4>Castrol Power1 Ultimate 10W40 4T Synthetic Engine Oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>                   
                </div>
                <p>₹ 570</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Castrol Power1 Ultimate 10W40 4T Synthetic Engine Oil'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Castrol Power1 Ultimate 10W40 4T Synthetic Engine Oil">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
          <div class="col4">
              <div class="card1">
              <form action="admindb.php" method="post">
                &emsp;&emsp;&emsp;<img src="../images/eo2.jpeg" height="200px">
                <h4>Castrol Power1 Ultimate 20W50 4T Synthetic Engine Oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>  
                    <i class="fa fa-star-half"></i>                
                </div>
                <p>₹ 645</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Castrol Power1 Ultimate 20W50 4T Synthetic Engine Oil'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Castrol Power1 Ultimate 20W50 4T Synthetic Engine Oil">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/eo3.jpeg" height="200px">
                <h4>Castrol Power1 10W40 4T Semi Synthetic Engine Oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>₹ 439</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Castrol Power1 10W40 4T Semi Synthetic Engine Oil'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Castrol Power1 10W40 4T Semi Synthetic Engine Oil">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
            <div class="col4">
                <div class="card1">
                <form action="admindb.php" method="post">
                    &emsp;&emsp;&emsp;<img src="../images/eo4.jpeg" height="200px">
                <h4>Castrol Power1 Cruise 20W50 4T Semi Synthetic Engine Oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>  
                    <i class="fa fa-star-half"></i>              
                </div>
                <p>₹ 545</p><br>
                Available stocks -
                <?php
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='Castrol Power1 Cruise 20W50 4T Semi Synthetic Engine Oil'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        echo $row[0];
    ?><br><br>
                <h8>Enter stocks</h8>&emsp;<input type="number" name="stock" min="1" required>
                <input type="submit" name="book" value="Update">
                <input type="hidden" name="item_name" value="Castrol Power1 Cruise 20W50 4T Semi Synthetic Engine Oil">
                <input type="hidden" name="quantity" value="stock">
            </div>
</form>
        </div>
        </div>
    </div>
</div>
</div>
</body>
<style>
   nav a{
        margin-left: 90%;
        font-size:40px;
        color:black;
    }
    nav a:hover{
        color:red;
    }
    h8{
        margin-left: 15%;
        font-weight: bold;
    }
    h3{
        color: white;
    }
    input[type=number]{
        width: 60px;
        height: 30PX;
    }
    input[type=submit]{
        cursor:pointer;
        font-weight:bold;
        width: 100%;
        height: 32px;
        margin-top: 6%;
        background: red;
        border-radius:50px;
        color:white;
    }
    input[type=submit]:hover{
        background-color:green;
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
    background:lightgray;
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