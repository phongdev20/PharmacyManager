<?php
$conn = new mysqli('', 'root', '', 'quanlykhothuoc');
if ($conn->connect_error) {
die('ket noi that bai: ' . $conn->connect_error);
}
?>