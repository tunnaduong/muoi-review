<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM products WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
