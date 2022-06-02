<?php
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
mysqli_set_charset($conn, "utf8");
if (isset($_GET['removeNCC'])) {
    $Ma_NCC = trim($_GET['txtMaNCC']);

    $sql = "DELETE FROM `nha_cung_cap` WHERE `Ma_NCC`='$Ma_NCC'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">alert("Xóa thành công"); window.location="NhaCungCap.php";</script>';
    }
}
?>