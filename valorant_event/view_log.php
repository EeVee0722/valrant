<?php
echo "<h2>參加者定位紀錄</h2><pre>";
if (file_exists("location_log.txt")) {
  echo htmlspecialchars(file_get_contents("location_log.txt"));
} else {
  echo "目前尚無紀錄。";
}
echo "</pre>";
?>
