<?php 
require('aconnection.php'); 
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
if(isset($_POST['book']))
    {
        $qry="SELECT `stocks` from `itemstocks` where `item_name`='$_POST[item_name]'";
        $res=mysqli_query($accconn,$qry);
        $row=mysqli_fetch_array($res);
        if($row[0]>0)
            {
                if($row[0]-$_POST['qty']>=0)
                    {
                        $user_id=$_SESSION['user_id'];
                        $select_cart="SELECT * from `items` where `name`='$_POST[item_name]' and `user_id`='$user_id'";
                        $select_cart_res=mysqli_query($accconn,$select_cart);
                        if(mysqli_num_rows($select_cart_res)>0)
                            {
                                $_SESSION['status']="Product already added";
                                $_SESSION['status_code']="warning";
                                echo "<script>
                                window.location.href='accessories.php';
                                </script>";
                            }
                        else
                            {
                        $qry="INSERT INTO `items`(`user_id`,`user_name`,`email`, `name`, `price`, `quantity`) VALUES ('$user_id','$_SESSION[user_name]','$_SESSION[email]','$_POST[item_name]','$_POST[price]','$_POST[qty]')";
                        $result=mysqli_query($accconn,$qry);
                        if($result) 
                            {
                                $qry="SELECT `stocks` from `itemstocks` where `item_name`='$_POST[item_name]'";
                                $res=mysqli_query($accconn,$qry);
                                $row=mysqli_fetch_array($res);
                                $st=$row[0]-$_POST['qty'];
                                $qry="UPDATE `itemstocks` set `stocks`='$st' where `item_name`='$_POST[item_name]'";
                                mysqli_query($accconn,$qry);
                                $_SESSION['status']="Added to cart";
                                $_SESSION['status_code']="success";
                                echo "<script>
                                window.location.href='accessories.php';
                                </script>";
                            }   
                        else
                            {
                                echo "<script>
                                alert('Error while fetching the data');
                                window.location.href='accessories.php';
                                </script>";
                            }   
                    }
                }
                else
                    { 
                        $qty=$row[0];
                        if($qty>1)
                            {
                                $_SESSION['status']="Only $qty stocks are available";
                                $_SESSION['status_code']="warning";
                                echo "<script>
                                window.location.href='accessories.php';
                                </script>";
                            }
                        else
                            {
                                $_SESSION['status']="Only $qty stock is available";
                                $_SESSION['status_code']="warning";
                                echo "<script>
                                window.location.href='accessories.php';
                                </script>";
                            }
                    }
            }
        else
            {
                $_SESSION['status']="Out of stock";
                $_SESSION['status_code']="warning";
                echo "<script>
                window.location.href='accessories.php';
                </script>";
            }        
                
    }
    if(isset($_POST['remove']))
    {
                        $id=$_POST['cart_id'];                     
                        $qry="DELETE FROM `items` WHERE `id`='$id'";
                        $result=mysqli_query($accconn,$qry);
                        $qry1="SELECT `stocks` from `itemstocks` where `item_name`='$_POST[name]'";
                        $res=mysqli_query($accconn,$qry1);
                        $row=mysqli_fetch_array($res);
                        $st=$row[0]+$_POST['qty'];
                        $qry2="UPDATE `itemstocks` set `stocks`=$st where `item_name`='$_POST[name]'";
                        mysqli_query($accconn,$qry2);
                        $_SESSION['status1']="item removed";
                        $_SESSION['status_code1']="success";
                        echo "<script>
                        window.location.href='cart.php';
                        </script>";
                    }
                }
?>