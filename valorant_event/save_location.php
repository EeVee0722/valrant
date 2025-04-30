<?php
$lat = $_POST['lat'] ?? '';
$lng = $_POST['lng'] ?? '';
$time = date('Y-m-d H:i:s');

$entry = "時間: $time | 緯度: $lat | 經度: $lng\n";
file_put_contents("location_log.txt", $entry, FILE_APPEND);

echo "OK";
?>
