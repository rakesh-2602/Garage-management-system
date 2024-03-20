<?php
$accconn=mysqli_connect("localhost","root","","accessoriesdb");
if(!$accconn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>
