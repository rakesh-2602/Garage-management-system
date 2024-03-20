<?php
$conn=mysqli_connect("localhost","root","","logindb");
if(!$conn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>