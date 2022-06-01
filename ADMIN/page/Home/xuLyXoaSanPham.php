<?php
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
mysqli_set_charset($conn, "utf8");
if (isset($_GET['removeSP'])) {
    $Ma_SP = trim($_GET['txtMaSP']);

    $sql = "DELETE FROM `san_pham` WHERE `Ma_SP`='$Ma_SP'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">alert("Xóa thành công"); window.location="Khothuoc.php";</script>';
    }
}
?>