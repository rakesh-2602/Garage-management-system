<?php
$bookconn=mysqli_connect("localhost","root","","bookservicedb");
if(!$bookconn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>