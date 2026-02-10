<?php
$conn = new mysqli("localhost", "root", "", "hotel_db ", 3306);

if($conn->connect_error){
    die("Database connection failed");
}
?>
