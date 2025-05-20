<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "galery";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение выбранной категории из POST-запроса
$category = $_POST['category'];

// Загрузка фотографий из базы данных по выбранной категории
$sql = "SELECT image_loc FROM images WHERE category = '$category'";
$result = $conn->query($sql);

$images = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = array('image_loc' => $row['image_loc']);
    }
}

// Возвращение списка изображений в формате JSON
echo json_encode($images);

$conn->close();
?>