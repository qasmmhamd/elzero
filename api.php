<?php
// إعداد الاتصال
$host = "localhost";
$dbname = "testdb";
$username = "root"; // غيّره حسب إعداداتك
$password = "";     // غيّره حسب إعداداتك

// الاتصال
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// جلب البيانات
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$users = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// إرسال كـ JSON
header('Content-Type: application/json');
echo json_encode($users);

$conn->close();

?>