<?php
$sellconn=mysqli_connect("localhost","root","","selldb");
if(!$sellconn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>
