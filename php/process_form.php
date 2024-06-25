<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // ประมวลผลหรือบันทึกข้อมูลตามที่ต้องการ
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";

    // คุณสามารถบันทึกข้อมูลลงฐานข้อมูลหรือส่งอีเมลที่นี่
}
?>
