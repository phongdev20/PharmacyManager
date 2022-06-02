<?php
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
mysqli_set_charset($conn, "utf8");
if (isset($_POST['updateSP'])) {
    $Ma_SP = trim($_POST['txtMaSP']);
    $tenSP = trim($_POST['txtTenSP']);
    $imgSP = trim($_POST['imgSP']);
    $giaSP = trim($_POST['txtGia']);
    $soLuongSP = trim($_POST['txtSoLuong']);
    $tinhNangSP = trim($_POST['txtTinhNang']);
    $MaLoaiSP = trim($_POST['txtLoaiSP']);

    $sql = "UPDATE `san_pham` SET `Ten_SP`='$tenSP',`Hinh_Anh_SP`='$imgSP',`Gia`='$giaSP',`So_Luong`='$soLuongSP',`Tinh_Nang`='$tinhNangSP',`Loai_Mat_Hang`='$MaLoaiSP' WHERE `Ma_SP`='$Ma_SP'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">alert("Sửa thành công"); window.location="ChiTiet.php/?Ma_SP=' . $Ma_SP . '";</script>';
    }
}
?>