header("Content-Type: application/json");

// إعداد الاتصال بقاعدة البيانات
$host = "localhost";
$dbname = "mydb";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "فشل الاتصال بقاعدة البيانات"]);
    exit;
}

// التحقق من وجود ID في الرابط
if (!isset($_GET['id'])) {
    http_response_code(400);
    echo json_encode(["error" => "يجب تحديد معرف العنصر"]);
    exit;
}

$id = intval($_GET['id']);
$stmt = $conn->prepare("SELECT id, name, description FROM items WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($item = $result->fetch_assoc()) {
    echo json_encode($item);
} else {
    http_response_code(404);
    echo json_encode(["error" => "العنصر غير موجود"]);
}

$conn->close();
