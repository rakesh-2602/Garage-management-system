<?php
$buyconn=mysqli_connect("localhost","root","","buydb");
if(!$buyconn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>