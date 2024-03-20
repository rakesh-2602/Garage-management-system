<?php
session_start();
require('LoginRegister/connection.php');
if(isset($_POST['send']))
    {
        $qry="INSERT INTO `feedbacktable`(`name`, `email`, `contact_no`, `message`) VALUES ('$_POST[name]','$_POST[email]','$_POST[contact_no]','$_POST[message]')";
        if(mysqli_query($conn,$qry))
            {
                $_SESSION['status']="Message Sent";
                $_SESSION['status_code']="success";
                echo "<script>
                window.location.href='about.php';
                    </script>
                     ";
            }
        else
            {
                echo "<script>
                alert('Error while fetching the data');
                window.location.href='about.html';
                    </script>
                     ";
            }
    }
?>