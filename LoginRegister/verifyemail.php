<?php
require('connection.php');
if(isset($_GET['email']) && isset($_GET['verify_code']))
    {
        $query="SELECT * from `registered_user` where `email`='$_GET[email]' and `verification_code`='$_GET[verify_code]'";
        $result=mysqli_query($conn,$query);
        if($result)
            {
                if(mysqli_num_rows($result)==1)
                    {
                        $result_fetch=mysqli_fetch_assoc($result);
                        if($result_fetch['is_verified']==0)
                            {
                                $update="UPDATE `registered_user` set `is_verified`='1' where `email`='$result_fetch[email]'";
                                if(mysqli_query($conn,$update))
                                    {                                                                  
                                        echo "<script>
                                        alert('Email verification successfull. Please login to enjoy our services');
                                        window.location.href='login.php';
                                        </script>
                                        ";
                                    }   
                                else
                                    {                         
                                        echo "<script>
                                        alert('cannot run query');
                                        </script>
                                        ";
                                    }
                            }
                        else
                            {                                
                                    echo "<script>
                                    alert('Email already verified');
                                    window.location.href='login.php';
                                    </script>
                                    ";
                            }
                    }
            }
        else
            {
                
                echo "<script>
                            alert('Error while fetching the data');
                      </script>
                      ";
            }
    }
?>