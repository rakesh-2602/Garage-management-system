<?php
require('../accessories/aconnection.php');
session_start();
if(!isset($_SESSION['admin_name']))
{
    header('Location:adminlogin.php');
}
$conn=mysqli_connect("localhost","root","","invoicedb");
if(!$conn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
} 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($pdf,$email)
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
        
            //Attachments
            $mail->addStringAttachment($pdf,"Invoice.pdf");

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your Invoice';
            $mail->Body    = "invoice";
        
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
if(isset($_POST['submit']))
    {
        $order_detais_query="SELECT * from `ordered_details` where `user_id`='$_GET[id]' and `invoice_status`='pending'";
        $res=mysqli_query($accconn,$order_detais_query);
        if($res)
            {
                while($row=mysqli_fetch_assoc($res))
                    {
                        $name=$row['name'];
                        $email=$row['email'];
                        $address=$row['address'];
                    }
            }
        else
            {
                echo "<script>alert('Cannot run order details query');window.location.href='invoice.php';</script>";
            }
        $date=date('Y-m-d');
        $query1="INSERT INTO `customer_details`( `invoice_date`, `name`, `email`, `address`,`grand_total`) VALUES ('$date','$name','$email','$address','$_POST[grand_total]')";
        $res=mysqli_query($conn,$query1);
        if($res)
            {
                $invoice_id=mysqli_insert_id($conn);
                $user_order_query="SELECT * from `user_orders` where `user_id`='$_GET[id]' and `invoice_status`='pending'";
                $res1=mysqli_query($accconn,$user_order_query);
                if($res1)
                    {
                        $grand_total=0;
                        while($row=mysqli_fetch_assoc($res1))
                            {
                                $total=$row['price']*$row['quantity'];
                                $query2="INSERT INTO `product_details`(`invoice_id`, `p_name`, `p_price`, `quantity`, `total`) VALUES ('$invoice_id','$row[item_name]','$row[price]','$row[quantity]','$total')";
                                mysqli_query($conn,$query2);
                            }
                            $query3="UPDATE `ordered_details` set `invoice_status`='sent' where `user_id`='$_GET[id]'";
                            mysqli_query($accconn,$query3);
                            $query4="UPDATE `user_orders` set `invoice_status`='sent' where `user_id`='$_GET[id]'";
                            if(mysqli_query($accconn,$query4))
                            {
                            echo "<script>alert('Successfull');window.location.href='invoice.php';</script>";
                            }
                    }
                else
                    {
                        echo "<script>alert('Cannot run user orders query');window.location.href='invoice.php';</script>";
                    }
                        //generating pdf
            require('../vendor/autoload.php');
            $res1=mysqli_query($conn,"SELECT * from `customer_details` where `invoice_id`='$invoice_id'");
            if(mysqli_num_rows($res1)>0)
                {
                    $html='<div style="border-top:1px solid black;border-bottom:1px solid black;"><center><h2 style="margin-left:35%;">Vinayaka Auto Works</h2></center><h5 style="margin-left:36%;">One stop for all your vehicle needs!</h5></div><br>';
                        while($row=mysqli_fetch_assoc($res1))
                            {
                                $grand_total=$row['grand_total'];
                                $email=$row['email'];
                                $html.='<div style="margin-left:80%;">Date : '.$row['invoice_date'].'<br>Id : '.$row['invoice_id'].'</div>';
                                $html.='<div>To,<br>&emsp;Name : &ensp;'.$row['name'].'<br>&emsp;Email : &ensp;'.$row['email'].'<br>&emsp;Address : '.$row['address'].'</div>';
                            }   
                            $res2=mysqli_query($conn,"SELECT * from `product_details` where `invoice_id`='$invoice_id'");
                            if(mysqli_num_rows($res1)>0)
                                {
                                    $html.='<style>table th{background-color:#eee;text-align:left;}table th,td{border:1px solid #ddd;padding:8px;}</style><table style="margin-top:10%;width:100%;border-collapse:collapse;">';
                                    $html.='<thead><tr><th>Product_Name</th><th>Price</th><th>Quantity</th><th>Total</th></tr></thead>';
                                    while($row=mysqli_fetch_assoc($res2))
                                        {
                                            $html.='<tbody><tr> <td>'.$row['p_name'].'</td><td>'.$row['p_price'].'</td><td>'.$row['quantity'].'</td><td>'.$row['total'].'</td> </tr></tbody>';
                                        }   
                                }
                    $html.='</table>';
                    $html.='<br><h4 style="margin-top:2%;margin-left:70%;">Grand Total : '.$grand_total.' Rs</h4>';
                }
            else
                {
                    $html="Data not found";
                }
                $mpdf=new \Mpdf\Mpdf();
                $mpdf->WriteHTML($html);
                $name=time().'.pdf';
                $mpdf->output($name,'D');
                $pdf=$mpdf->output($name,'S');
                sendMail($pdf,$email);  
            }
        else
            {
                echo "<script>alert('Cannot run query 1');window.location.href='invoice.php';</script>";
            }

    
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
<a href="invoice.php">Back</a>
    <form action="" method="post">
    <?php
    $query="SELECT * from `user_orders` where `user_id`='$_GET[id]' and `invoice_status`='pending'";
    $res=mysqli_query($accconn,$query);
    if($res)
        {
            ?>
            <table>
                <thead>
                    <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    </tr>
                </thead>
            <?php
            if(mysqli_num_rows($res)>0)
                {
                    $grand_total=0;
                    while($row=mysqli_fetch_assoc($res))
                        {
                        $total=$row['price']*$row['quantity'];
                        $grand_total=$grand_total+$total;
                    ?>
                    <tbody>
                        <tr>
                        <td><?php echo $row['item_name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $total; ?></td>
                        </tr>
                    </tbody>
                    <?php
                        }
                        ?>
                        <td colspan=4 class="btn">
                        <center><input type="submit" name="submit" value="Generate Invoice"></center>
                        </td>
                        <input type="hidden" name="total" value="<?php echo $total;?>">
                        <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">
               <?php }
            else
                {?>
                    <td colspan=4>No records found</td>
               <?php
                }
               ?>
              
        <?php
        }
    else
        {
            echo "<script>alert('Cannot run query');window.location.href='invoice.php';</script>";
        }
    ?>
      </table>
      </form>
</body>
<style>
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
      table {
        margin-left: 4%;
        margin-top: 2%;
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
    background-color: gray;
}
.btn{
    border:none;
    background: none;
}
input[type=submit]{
    background-color: limegreen;
    height:30px;
    border-radius:15px;
    cursor:pointer;
}
body{
    background:linear-gradient(#191654,#43C6AC);
}
html,body
{
height:100%
}
</style>
</html>