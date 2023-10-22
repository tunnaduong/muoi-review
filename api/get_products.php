<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';

$sql = "SELECT * FROM products ORDER BY id DESC";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$json_data = array();
while ($rec = mysqli_fetch_assoc($result)) {
    $Subjson = array();
    $Subjson['name'] = $rec['name'];
    $Subjson['link'] = $rec['link'];
    $Subjson['image'] = $rec['image'];
    array_push($json_data, $Subjson);
}
echo json_encode($json_data);
