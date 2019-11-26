<?php
// Create connection
$conn = mysqli_connect("localhost:3306","root","","alumni");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
}
?>