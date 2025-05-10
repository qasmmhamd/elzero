<?php
// إعداد الاتصال بقاعدة البيانات
$host = "localhost";
$dbname = "cars_show";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("<p style='color:red;'>فشل الاتصال بقاعدة البيانات</p>");
}

$sql = "SELECT price,id from `cars` WHERE`id`LIKE'1'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>قائمة العناصر</title>
    <style>
        body { font-family: Arial; direction: rtl; text-align: right; }
        table { border-collapse: collapse; width: 70%; margin: 20px auto; }
        th, td { border: 1px solid #aaa; padding: 8px; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">📋 قائمة العناصر</h2>
    <table>
        <tr>
            <th>المعرف</th>
            <th>الاسم</th>
            <th>الوصف</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['price']) ?></td>
            <td><?= htmlspecialchars($row['id']) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>














