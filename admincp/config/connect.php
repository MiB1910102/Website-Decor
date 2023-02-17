<?php
$mysqli = new mysqli("localhost","root","","mecuti");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Lỗi kết nối với MYSQL: " . $mysqli -> connect_error;
  exit();
}
?> 