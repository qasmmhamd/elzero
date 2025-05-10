<?php

/*function printt($val){
$dsn='localhost';
$user='root';
$pass='';
$dbname="cars_show";
$conn=mysqli_connect($dsn,$user,$pass,$dbname);
if(!$conn){
    die("فشل الاتصال:".mysqli_connect_error());
}
$sql="SELECT $val from car WHERE 2";
$reault=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($reault);
echo$row[$val];
if(mysqli_num_rows($reault)>0){
    $row=mysqli_fetch_assoc($reault);
    echo$row[$val];
}else{
    echo "لا يوجد السعر";}

mysqli_close($conn);}
printt("price");*/



$host = "localhost";
$dbname = "testdb";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id']) && isset($data['name'])) {
    $id = (int)$data['id'];
    $name = $conn->real_escape_string($data['name']);

    $sql = "UPDATE users SET name='$name' WHERE id=$id";

    if ($conn->query($sql)) {
        echo json_encode(['success' => true, 'message' => 'تم التحديث بنجاح']);
    } else {
        echo json_encode(['success' => false, 'message' => 'فشل التحديث']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'بيانات ناقصة']);
}

$conn->close();
?>
// push to git hub succefuly




