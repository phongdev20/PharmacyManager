<?php
$Ma_SP = $_GET['Ma_SP'];
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
$sql = "SELECT `Ma_SP`, `Ten_SP`, `Hinh_Anh_SP`, `Gia`, `So_Luong`, `Tinh_Nang`, `Loai_Mat_Hang` FROM `san_pham` WHERE `Ma_SP` = '$Ma_SP'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $TenSP = $row['Ten_SP'];
        $ImgSP = $row['Hinh_Anh_SP'];
        $GiaSP = $row['Gia'];
        $SoLuongSP = $row['So_Luong'];
        $TinhNangSP = $row['Tinh_Nang'];
        $LoaiSP = $row['Loai_Mat_Hang'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa đổi thông tin sản phẩm</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        .row {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .rowItem {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        #box-add {
            margin-top: 20px;
            margin-bottom: 40px;
        }

        #box-add .box-form {
            margin-left: 160px;
        }

        #box-add .txt-header {
            text-align: center;
            margin-bottom: 20px;
        }

        #box-add .click-group {
            margin-top: 40px;
            margin-left: 40px;
            margin-right: 40px;
        }

        #box-add .btn {
            display: inline-block;
            padding: 16px;

            border-radius: 8px;
            border: none;
            color: #fff;
            font-weight: 700;
            font-size: 20px;
        }

        #box-add .btn a {
            text-decoration: none;
            color: #fff;
            font-weight: 700;
        }

        #box-add .btn-return {
            background: rgb(85, 149, 205);
        }

        #box-add .btn-submit {
            background: #dc3545;
        }

        #box-add .btn-return:hover {
            background: rgb(24, 205, 229);
            cursor: pointer;
        }

        #box-add .btn-submit:hover {
            background: #ef2235;
            cursor: pointer;
        }

        #box-add input,
        #box-add select,
        #box-add textarea {
            font-size: 20px;
            padding-left: 20px;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        #box-add .input-box {
            width: 800px;
            border-radius: 8px;
            border: 2px solid rgb(85, 149, 205);
        }

        #box-add .txt-index {
            margin-top: 16px;
            margin-bottom: 8px;
        }

        .none {
            display: none;
        }
    </style>
</head>

<body>
    <div class="row">
        <div>
            <?php include '../../component/Home/menuLeft/ML_KhoThuoc.php' ?>
        </div>

        <div style="min-height: 100vh; margin-left: 300px;">
            <div>
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div id="box-add">
                <h1 class="txt-header">SỬA THÔNG TIN SẢN PHẨM</h1>
                <form action="xuLySuaSanPham.php" method="post">
                    <div class="box-form">
                        <input type="text" name="txtMaSP" id="" class="input-box none" value="<?php echo $Ma_SP ?>">
                        <div>
                            <p class="txt-index">Tên sản phẩm</p>
                            <input type="text" name="txtTenSP" id="" class="input-box" value="<?php echo $TenSP ?>">
                        </div>
                        <div>
                            <p class="txt-index">Hình ảnh</p>
                            <input type="file" name="imgSP" id="">
                        </div>
                        <div>
                            <p class="txt-index">Giá</p>
                            <input type="text" name="txtGia" id="" class="input-box" value="<?php echo $GiaSP ?>">
                        </div>
                        <div>
                            <p class="txt-index">Số lượng</p>
                            <input type="text" name="txtSoLuong" id="" class="input-box" value="<?php echo $SoLuongSP ?>">
                        </div>
                        <div>
                            <p class="txt-index">Tính năng</p>
                            <textarea name="txtTinhNang" cols="400" rows="4" class="input-box"><?php echo $TinhNangSP ?></textarea>
                        </div>
                        <div>
                            <p class="txt-index">Loại sản phẩm</p>
                            <select name="txtLoaiSP" id="" class="input-box">
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
                                $sql = "SELECT * FROM `loai_mat_hang`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '
                                        <option value="' . $row['Ma_Loai_MH'] . '">' . $row['Ten_Loai_MH'] . '</option>
										';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <?php
                    echo '
                    <div class="click-group rowItem">
                        <button class="btn btn-return"> <a href="http://localhost/PharmacyManager/ADMIN/page/Home/ChiTiet.php?Ma_SP='.$Ma_SP.'">Trở về </a></button>
                        <button type="submit" name="updateSP" class="btn btn-submit">Sửa sản phẩm</button>
                    </div>
                    ';
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>