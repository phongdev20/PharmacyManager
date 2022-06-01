<?php 
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
mysqli_set_charset($conn, "utf8");
if (isset($_POST['addSP'])) {
    $tenSP = trim($_POST['txtTenSP']);
    $imgSP = trim($_POST['imgSP']);
    $giaSP = trim($_POST['txtGia']);
    $soLuongSP = trim($_POST['txtSoLuong']);
    $tinhNangSP = trim($_POST['txtTinhNang']);
    $MaLoaiSP = trim($_POST['txtLoaiSP']);

    $max = '';
    $sql1 = "SELECT Ma_SP FROM `san_pham` WHERE Ma_SP = (SELECT MAX(Ma_SP) FROM `san_pham`)";
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $max = $row['Ma_SP']; 
        }
    }
    $numMax = (int)substr($max, 2) + 1;
    $MaSP = "SP$numMax";

    $sql2 = "SELECT * FROM `san_pham` WHERE `Ten_SP` = '$tenSP'";
    $result = $conn->query($sql2);
    if ($result->num_rows >0) {
        echo '<script language="javascript">alert("Tên sản phẩm đã tồn tại!"); window.location="ThemThuoc.php";</script>';
        die();
    } else {
        $sql3 = "INSERT INTO `san_pham`(`Ma_SP`, `Ten_SP`, `Hinh_Anh_SP`, `Gia`, `So_Luong`, `Tinh_Nang`, `Loai_Mat_Hang`) VALUES ('$MaSP','$tenSP','$imgSP','$giaSP','$soLuongSP','$tinhNangSP','$MaLoaiSP')";
        $result = $conn->query($sql3);
        echo '<script language="javascript">alert("Thêm thành công"); window.location="Khothuoc.php";</script>';
    }
}
