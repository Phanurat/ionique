<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_db";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}// ตรวจสอบการเชื่อมต่อ

?>