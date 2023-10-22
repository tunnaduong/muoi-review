<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';

$name = $_GET['name'];
$link = $_GET['link'];
$image = $_GET['image'];

$sql = "INSERT INTO products (name, link, image)
VALUES ('$name', '$link', '$image')";

if ($conn->query($sql) === TRUE && isset($name) && isset($link) && isset($image)) {
    echo "Thêm sản phẩm thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
