<html>
    <head>
    <script src="../sweetalert.min.js"></script>
    </head>
</html>
<?php
require('aconnection.php');
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$order_id,$total)
    {
        require('../phpmailer/PHPMailer.php');
        require('../phpmailer/SMTP.php');
        require('../phpmailer/Exception.php');
        $mail = new PHPMailer(true);
        try {
            //Server settings                  //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'vinayakaautoworks00@gmail.com';                     //SMTP username
            $mail->Password   = 'tlbblrtlfeydpkla';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('vinayakaautoworks00@gmail.com', 'Vinayaka Auto Works');
            $mail->addAddress($email);     //Add a recipient
        
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Successfully booked';
            $mail->Body    = "<h3>Your order has been placed successfully</h3><br><h3>Order Id : $order_id</h3><br><h3>Total Price :$total</h3>";
        
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    if(isset($_POST['purchase']))
        {
            if($_POST['pmode']=='COD')
                {
                    $insertqry="INSERT INTO `ordered_details`(`user_id`,`name`, `mobile_no`, `email`, `address`, `payment_mode`) VALUES ('$_SESSION[user_id]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_POST[address]','$_POST[pmode]')";
                    if(mysqli_query($accconn,$insertqry))
                        {
                            $order_id=mysqli_insert_id($accconn);
                            $qry="SELECT * from `items` where `user_id`='$_SESSION[user_id]'";
                            $res=mysqli_query($accconn,$qry);
                            if(mysqli_num_rows($res)>0)
                                {
                                    while($row=mysqli_fetch_assoc($res))
                                        {
                                            $qry2="INSERT INTO `user_orders`(`order_id`,`user_id`,`item_name`, `price`, `quantity`) VALUES ('$order_id','$_SESSION[user_id]','$row[name]','$row[price]','$row[quantity]')";
                                            mysqli_query($accconn,$qry2);
                                        }
                                    if($res)
                                        {
                                            $total=$_POST['total'];
                                            $qry="DELETE FROM `items` WHERE `user_id`='$_SESSION[user_id]'";
                                            if(mysqli_query($accconn,$qry) and sendMail($_POST['email'],$order_id,$total))
                                                {
                                                  $_SESSION['status2']="Successfully Booked";
                                                  $_SESSION['status_code2']="success";
                                                    echo "<script>
                                                    window.location.href='cart.php';
                                                    </script>";
                                                }
                                        }
                                }
                            else
                                {
                                    echo "<script>
                                    alert('null');
                                    window.location.href='cart.php';
                                    </script>";
                                }
                }  
            else
                {
                    echo "<script>
                    alert('cannot run orderd_details query');
                    window.location.href='cart.php';
                    </script>";
                }
            }
            else
            {
                ?>
                <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <div class="col-25">
    <div class="container2">
        <?php
            $cart_qry="SELECT * from `items` where `user_id`='$_SESSION[user_id]'";
            $cart_res=mysqli_query($accconn,$cart_qry);
            $rows=mysqli_num_rows($cart_res);
            {
            ?>
      <table>
        <tr>
            <th>item</th>
            <th>quantity</th>
            <th>price</th>
        </tr>
      <?php
      while($row=mysqli_fetch_assoc($cart_res))
      {
        echo "
        <tr>
            <td>$row[name]</td>
            <td>$row[quantity]</td>
            <td>$row[price] Rs</td>
        ";
      }  } ?>
<tr>
  <td colspan=4><center>Grand Total : <?php echo $_POST['total']; ?> Rs.</center></td>
</tr>
    </table>
    </div>
  </div>


<form action="" method="post">
<div class="contact"><br><br>
  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-body">
          <div class="screen-body-item left">
            <img  src="../images/logo.jpg" alt="">
            <div class="app-title">
              <span>Vinayaka Auto Works</span>
            </div><br>
            <div style="color:white;">vinayakaautoworks00@gmail.com</div>
          </div>
          <div class="screen-body-item">
          <h2>Scan and Pay</h2>
            <div class="app-form">
              <div class="app-form-group message">
                  <img src="../images/scanner.png">    
            <br>
            <br>
                  <span style="color:white;">UPI ID : vinayakaautoworks@okaxis</span>   
            </div>
              <div class="app-form-group buttons">
                <input type="hidden" name="fullname" value="<?php echo $_POST['fullname']; ?>">
                <input type="hidden" name="phonenumber" value="<?php echo $_POST['phonenumber']; ?>">
                <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                <input type="hidden" name="address" value="<?php echo $_POST['address'];?>">
                <input type="hidden" name="total" value="<?php echo $_POST['total'];?>">
                <input type="submit" name="pay" value="PAY">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
h2{
  color:white;
}

* {
  box-sizing: border-box;
}

img{
  height:300px;
}


.col-25 {
    margin-left: 19%;
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
margin-left: 10%;
  padding: 0 16px;
}


.container2
 {
    margin-bottom: 5%;
    margin-top: 5%;
  width:80%;
  background-color: lightgray;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}



/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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



.background {
  display: flex;
  min-height: 70vh;
}

.container {
  flex: 0 1 700px;
  margin-left: 16%;
  padding: 10px;
}

.screen {
  position: relative;
  background: #0d45bf;
  border-radius: 15px;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: #fff;
  font-size: 26px;
}
.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #fff;
}

.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 20px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}
.app-form-group.buttons input[type=submit]{
  border:none;
  background-color: #fff;
  height:28px;
  width:35%;
  margin-top: 10px;
  border-radius:15px;
  cursor: pointer;
}

.app-form-group.buttons input[type=submit]:hover{
  background-color: #000;
  color:#fff;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: lightgray;
}

.app-form-control:focus {
  border-bottom-color: #000;
}

  .contact{
    font-size: large;
    text-align:center;
  }


    .container {
      padding: 0 16px;
    }
    

</style>
</body>
</html>
 
                <?php
            } 
        }
        if(isset($_POST['pay']))
            {
                $insertqry="INSERT INTO `ordered_details`(`user_id`,`name`, `mobile_no`, `email`, `address`, `payment_mode`) VALUES ('$_SESSION[user_id]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_POST[address]','Online')";
                    if(mysqli_query($accconn,$insertqry))
                        {
                            $order_id=mysqli_insert_id($accconn);
                            $qry="SELECT * from `items` where `user_id`='$_SESSION[user_id]'";
                            $res=mysqli_query($accconn,$qry);
                            if(mysqli_num_rows($res)>0)
                                {
                                    while($row=mysqli_fetch_assoc($res))
                                        {
                                            $qry2="INSERT INTO `user_orders`(`order_id`,`user_id`,`item_name`, `price`, `quantity`) VALUES ('$order_id','$_SESSION[user_id]','$row[name]','$row[price]','$row[quantity]')";
                                            mysqli_query($accconn,$qry2);
                                        }
                                    if($res)
                                        {
                                            $total=$_POST['total'];
                                            $qry="DELETE FROM `items` WHERE `user_id`='$_SESSION[user_id]'";
                                            if(mysqli_query($accconn,$qry) and sendMail($_POST['email'],$order_id,$total))
                                                {
                                                  ?>
                                                  <script>
                                    swal({
                                            title: "<?php echo 'Successfully booked' ?>",
                                            icon: "<?php echo 'success' ?>",
                                            }).then(function(){
                                                window.location="cart.php";
                                            });
                                </script>
                                  <?php
                                                }
                                        }
                                }
                            else
                                {
                                    echo "<script>
                                    alert('null');
                                    window.location.href='cart.php';
                                    </script>";
                                }
                }  
            else
                {
                    echo "<script>
                    alert('cannot run orderd_details query');
                    window.location.href='cart.php';
                    </script>";
                }
            }
    ?>