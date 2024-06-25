<?php
include 'conn.php';
// สร้าง SQL query
$sql = "SELECT id, product_name, quantity FROM products";
$result = $conn->query($sql);

// ตรวจสอบผลลัพธ์
if ($result->num_rows > 0) {
    // สร้างตารางเพื่อแสดงผล
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>ID</th><th>Product Name</th><th>Quantity</th></tr></thead><tbody>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["id"] . '</td><td>' . $row["product_name"] . '</td><td>' . $row["quantity"] . '</td></tr>';
    }
    echo '</tbody></table>';
} else {
    echo "0 results";
}

$conn->close();
?>
