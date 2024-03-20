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
    <script src="../sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <title>Booked Users</title>
</head>
<body>
<nav>
<a href="sell.php"><i class="fas fa-home"></i></a></nav>
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
<h1>Booked users details</h1>
<table>
  <tr>
    <th>Sl. No.</th>
    <th>Name</th>
    <th>Brand</th>
    <th>Model</th>
    <th>Year</th>
    <th>Ownership</th>
    <th>Price</th>
    <th>Photo</th>
    <th>Cancel Deal</th>
  </tr>
  <?php
          $qry="SELECT * from `userbought`";
          $res=mysqli_query($buyconn,$qry);
          if(mysqli_num_rows($res)>0)
            {
                $n=0;
                while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['user_id'];
                $query="SELECT * from `registered_user` where `id`='$id'";
                $res1=mysqli_query($conn,$query);
                $row2=mysqli_fetch_assoc($res1);
                $uname=$row2['username'];
                        $n=$n+1;
                        ?>
                         <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $uname; ?></td>
                            <td><?= $row['brand']?></td>
                            <td><?= $row['model']?></td>
                            <td><?= $row['year']?></td>
                            <td><?= $row['ownership']?></td>
                            <td><?= $row['price']?></td>
                            <td><img src="<?=$row['image']?>" alt="" ></td>
                            <td> 
                            <form action="admindb.php" method="POST">    
                            <button type="submit" name="cancel_deal" value="<?= $row['model']?>" class="btn">Cancel</td>
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
                <td colspan="9">No records found</td>
            </tr>
            <?php
            }
            ?>
</table>
</body>
<style>
    img{
        height:40px;
        width:50px;
    }
    body{
        background:linear-gradient(#191654,#43C6AC);
        background-repeat: no-repeat;
        height:696px;    }
     nav a{
        margin-left: 90%;
        font-size:36px;
        color:white;
    }
    nav a:hover{
        color:blue;
    }
    h1{
        margin-left: 40%;
        text-decoration: underline;
        color:white;
    }
        .btn{
            width:80px;
            height:28px;
        color:white;
        background:red;
        border:2px solid red;
        cursor:pointer;
    }
    .btn:hover{
        color:red;
        background:white;
    }
     table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left: 10%;
margin-top: 5%;
}

td, th {
  border: 2.5px solid black;
  text-align: left;
  padding: 8px;
}
th{
    color:white;
}
td{
    background-color: #fff;
}
</style>
</html>