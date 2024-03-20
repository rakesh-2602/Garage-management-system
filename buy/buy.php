<?php
require('buydb.php');
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
    <title>Buy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
<script src="../sweetalert.min.js"></script>
</head>
<body>
  <div class="main">
<a href="buycart.php"><br><i class="fas fa-shopping-cart"></i></a>
<a href="../index.php"><br><i class="fas fa-home a"></i></a>
</div>
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
    <?php
    $qry="SELECT * from `buytable` where `status`='available'";
    $res=mysqli_query($buyconn,$qry);
    while($row=mysqli_fetch_array($res))
        {
            $brand=$row['brand'];
            $model=$row['model'];
            $year=$row['year'];
            $ownership=$row['ownership'];
            $price=$row['price'];
            $photo=$row['photo'];
?>
<div class="card-container">
  <div class="float-layout">
    <div class="card-image">
        <form action="buydb.php" method="POST">
      <img src="../admin/<?php echo $photo ?>">
      <div class="card">
        <div class="card-desc">
        <h1>Brand : <?php echo $brand; ?></h1>
        <h1>Model : <?php echo $model; ?></h1>
        <h1>Year : <?php echo $year; ?></h1>
        <h1>Ownership : <?php echo $ownership; ?></h1>
        <h1>Price : <?php echo $price; ?></h1>
        </div>
        <input type="submit" name="book" value="Book Now">
        <input type="hidden" name="bike_brand" value="<?php echo $brand; ?>">
        <input type="hidden" name="bike_model" value="<?php echo $model; ?>">
        <input type="hidden" name="bike_year" value="<?php echo $year; ?>">
        <input type="hidden" name="bike_ownership" value="<?php echo $ownership; ?>">
        <input type="hidden" name="bike_price" value="<?php echo $price; ?>">
        <input type="hidden" name="bike_photo" value="<?php echo $photo; ?>">
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
  .main{
    display:flex;
    margin-left: 84%;
  }
  a{
    font-size:34px;
    color:black;
  }
  .a{
      margin-left: 40px;
  }
  a:hover{
    color:green;
  }
    body{
      background:white;
        /* background:linear-gradient(to right,#799F0C,#FFE000); */
    }
     input[type=submit]{
        cursor: pointer;
        margin-left: 52px;
        width:30%;
        height:35px;
        background-color:lightgreen;
        font-weight:bold;
    }
    h1{
        font-size:27px;
    }
.float-layout {
  padding: 100px 280px;
  float: left;
  width: 100%;
  height: auto;
  box-sizing: border-box;
  margin: 0;
}

.card-container {
  overflow: hidden;
}

.card {
  color: black;
  height: 400px;
  width: 50%;
  float: right;
}
.card-desc {
  padding: 50px;
  text-align: left;
  font-size: 23px;
}
div.card-image{
    padding:15px;
    background-color: lightgray;
    border:2px solid black;
}

div.card-image img {
  width: 40%;
  height: 400px;
}
</style>
</html>