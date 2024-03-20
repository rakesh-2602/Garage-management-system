<?php
session_start();
require('../LoginRegister/connection.php');
require('../buy/buyconnection.php');
require('../bookservice/bookconnection.php');
require('../accessories/aconnection.php');
require('../sell/sellconnection.php');
if(isset($_POST['delete']))
    {
        $name=$_POST['delete'];
        $qry="DELETE from `registered_user` where `username`='$name'";
        $res=mysqli_query($conn,$qry);
        if($res)
            {
                $_SESSION['status']="Deleted successfully";
                $_SESSION['status_code']="success";
                echo "<script>
                window.location.href='registered_users.php';
                </script>
                    ";
            }
        else
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='registered_users.php';
          </script>
          ";
            }
    }
    if(isset($_POST['delete_service']))
    {
        $id=$_POST['delete_service'];
        $qry="DELETE from `service` where `id`='$id'";
        $res=mysqli_query($bookconn,$qry);
        if($res)
            {
                $_SESSION['status']="Deleted successfully";
                $_SESSION['status_code']="success";
                echo "<script>
                window.location.href='booked_services.php';
                </script>
                    ";
            }
        else
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='booked_services.php';
          </script>
          ";
            }
    }
if(isset($_POST['book']))
    {
        $qry1="SELECT `stocks` from `itemstocks` where `item_name`='$_POST[item_name]'";
        $res=mysqli_query($accconn,$qry1);
        $row=mysqli_fetch_array($res);
        $st=$row[0]+$_POST['stock'];
        $qry2="UPDATE `itemstocks` set `stocks`=$st where `item_name`='$_POST[item_name]'";
        if(mysqli_query($accconn,$qry2))
            {
                $_SESSION['status']="Updated successfully";
                $_SESSION['status_code']="success";
                echo "<script>
                window.location.href='updatestocks.php';
                </script>
                    ";
            }
        else   
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='updatestocks.php';
          </script>
          ";
            }
    }
    if(isset($_POST['delete_vehicle']))
    {
        $id=$_POST['delete_vehicle'];
        $qry="DELETE from `selltable` where `id`='$id'";
        $res=mysqli_query($sellconn,$qry);
        if($res)
            {
                $_SESSION['status']="Deleted successfully";
                $_SESSION['status_code']="success";
                echo "<script>
                window.location.href='buy.php';
                </script>
                    ";
            }
        else
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='buy.php';
          </script>
          ";
            }
    }
if(isset($_POST['upload']))
    {
        $file=$_FILES['photo'];
        $filename=$file['name'];
        $filepath=$file['tmp_name'];
        $fileerror=$file['error'];
        if($fileerror==0)
            {
                $destfile='upload/'.$filename;
                move_uploaded_file($filepath,$destfile);
                $qry="INSERT into `buytable`(`brand`,`model`,`year`,`ownership`,`price`,`photo`) values('$_POST[brand]','$_POST[model]','$_POST[year]','$_POST[ownership]','$_POST[price]','$destfile')";
                if(mysqli_query($buyconn,$qry))
                    {
                        $_SESSION['status']="Uploaded successfully";
                        $_SESSION['status_code']="success";
                        echo "<script>
                        window.location.href='sell.php';
                  </script>
                  ";
                    }
                else    
                    {
                        echo "<script>
                        alert('Error while fetching the data');
                        window.location.href='sell.php';
                  </script>
                  ";
                    }
            }
        else    
            {
                echo "<script>
                alert('Image error');
                window.location.href='sell.php';
          </script>
          ";
            }   
    }
    if(isset($_POST['cancel_deal']))
    {
        $name=$_POST['cancel_deal'];
        $qry1="UPDATE `buytable` set `status`='available' where `model`='$name'";
        mysqli_query($buyconn,$qry1);
        $qry="DELETE from `userbought` where `model`='$name'";
        $res=mysqli_query($buyconn,$qry);
        if($res)
            {
                $_SESSION['status']="Cancelled successfully";
                $_SESSION['status_code']="success";
                echo "<script>
                window.location.href='booked_users.php';
                </script>
                    ";
            }
        else
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='booked_users.php';
          </script>
          ";
            }
    }
    if(isset($_POST['accessoriesdelete']))
    {
        $name=$_POST['accessoriesdelete'];
        $qry="DELETE from `items` where `name`='$name'";
        $res=mysqli_query($accconn,$qry);
        if($res)
            {
                $_SESSION['status']="Deleted successfully";
                $_SESSION['status_code']="success";
                echo "<script>
                window.location.href='accessories.php';
                </script>
                    ";
            }
        else
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='accessories.php';
          </script>
          ";
            }
    }
?>