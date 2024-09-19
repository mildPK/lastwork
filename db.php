<?php
$servername = "localhost";  // ชื่อเซิร์ฟเวอร์
$username = "username";     // ชื่อผู้ใช้
$password = "password";     // รหัสผ่าน
$dbname = "database_name";  // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

echo "เชื่อมต่อสำเร็จ";
?>
