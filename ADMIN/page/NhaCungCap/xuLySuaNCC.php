<?php
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
mysqli_set_charset($conn, "utf8");
if (isset($_POST['updateNCC'])) {
    $Ma_NCC = trim($_POST['txtMaNCC']);
    $tenNCC = trim($_POST['txtTen']);
    $SDT = trim($_POST['txtSDT']);
    $email = trim($_POST['txtEmail']);
    $diaChi = trim($_POST['txtDiaChi']);
    $matHang = trim($_POST['txtMatHang']);


    $sql = "UPDATE `nha_cung_cap` SET `Ten_NCC`='$tenNCC',`SDT`='$SDT',`Email`='$email',`Dia_Chi`='$diaChi',`Cac_Mat_Hang`='$matHang' WHERE `Ma_NCC`='$Ma_NCC'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">alert("Sửa thành công"); window.location="ChiTiet.php/?Ma_NCC=' . $Ma_NCC . '";</script>';
    }
}
?>