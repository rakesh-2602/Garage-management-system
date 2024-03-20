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
    <title>Document</title>
</head>
<body>
<a href="accessories.php">Back</a>
<table>
          <tr>
            <th>Sl. No.</th>
            <th>Item_Name</th>
            <th>Price</th>
            <th>Quantity</th>
          </tr>
<?php
    $query="SELECT * from `user_orders` where `order_id`='$_GET[orderid]'";
    $res=mysqli_query($accconn,$query);
    if($res)
        {
            if(mysqli_num_rows($res)>0)
                {   
                    $n=0;
                    while($row=mysqli_fetch_assoc($res))
                        {
                            $n=$n+1;
                            ?>
                            <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $row['item_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                        </tr>
                       <?php }
                }
            else
                {
                    ?>
            <tr>
                <td colspan="4">No records found</td>
            </tr>
                <?php
                }
        }
    else
        {
            echo "<script>alert('Cannot run query');window.location.href='accessories.php';</script>";
                            
        }
?>
</table>
</body>
<style>
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
      a{
        text-decoration: none;
    margin-left: 90%;
    font-size: 20px;
    border:1px solid black;
    background-color: #000;
    padding:4px;
    border-radius:15px; 
    padding-left: 12px;
    padding-right: 12px;
    color:#fff;
    }
    a:hover{
        background-color: #fff;
    color:#000;
    }
    body{
        background:linear-gradient(#191654,#43C6AC);
    }
    html,body{
        height:100%;
    }
</style>
</html>