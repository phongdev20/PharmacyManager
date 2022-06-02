<?php 
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
mysqli_set_charset($conn, "utf8");
if (isset($_POST['addNCC'])) {
    $ten = trim($_POST['txtTen']);
    $SDT = trim($_POST['txtSDT']);
    $email = trim($_POST['txtEmail']);
    $diaChi = trim($_POST['txtDiaChi']);
    $matHang = trim($_POST['txtMatHang']);

    $max = '';
    $sql1 = "SELECT `Ma_NCC` FROM `nha_cung_cap` WHERE `Ma_NCC` = (SELECT MAX(`Ma_NCC`) FROM `nha_cung_cap`)";
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $max = $row['Ma_NCC']; 
        }
    }
    $numMax = (int)substr($max, 3) + 1;
    $MaNCC = "NCC$numMax";

    $sql2 = "SELECT * FROM `nha_cung_cap` WHERE `Ten_NCC` = '$ten'";
    $result = $conn->query($sql2);
    if ($result->num_rows >0) {
        echo '<script language="javascript">alert("Tên sản phẩm đã tồn tại!"); window.location="ThemNhaCungCap.php";</script>';
        die();
    } else {
        $sql3 = "INSERT INTO `nha_cung_cap`(`Ma_NCC`, `Ten_NCC`, `SDT`, `Email`, `Dia_Chi`, `Cac_Mat_Hang`) VALUES ('$MaNCC','$ten','$SDT','$email','$diaChi','$matHang')";
        $result = $conn->query($sql3);
        echo '<script language="javascript">alert("Thêm thành công"); window.location="NhaCungCap.php";</script>';
    }
}