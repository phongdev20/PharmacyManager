<?php
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
mysqli_set_charset($conn, "utf8");
if (isset($_POST['updateMK'])) {
    $TK = trim($_POST['txtTK']);
    $MK_Old = trim($_POST['txtOld']);
    $MK_New = trim($_POST['txtNew']);
    $MK_ReNew = trim($_POST['txtReNew']);

    $sql1 = "SELECT * FROM `admin` WHERE `TaiKhoan` = '$TK' AND `MatKhau` = '$MK_Old'";
    $result = $conn->query($sql1);
    if ($result->num_rows <= 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<script language="javascript">alert("Mật khẩu cũ không chính xác");</script>';
        }
    }
    
    $sql = "UPDATE `admin` SET`MatKhau`='$MK_New' WHERE `TaiKhoan` = '$TK'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">alert("Sửa thành công"); window.location="http://localhost/PharmacyManager/ADMIN/page/Login/xuLyDangXuat.php";</script>';
    }
}
?>