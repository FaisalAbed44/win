<?php
// Database connection parameters

$servername = "localhost";
$username = "root";
$password = "root";
$database = "win";
// $conn = mysqli_connect('localhost','root', '','win');

// // Check the connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());


// }


$conn = new mysqli($servername, $username, $password, $database,3307);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
?>