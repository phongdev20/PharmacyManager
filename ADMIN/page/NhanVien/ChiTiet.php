<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
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

        .txt-center {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .detail {
            margin-left: 40px;
            margin-top: 40px;
            margin-right: 20px;
        }

        .item {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .return {
            display: inline-block;
            margin-top: 40px;
            text-decoration: none;
            padding: 16px;
            background: rgb(85, 149, 205);
            margin-left: 40px;
            border-radius: 8px;

        }

        .select:hover {
            background: rgb(24, 205, 229);
            cursor: pointer;
        }

        .img {
            margin-left: 20px;
            width: 300px;
        }

        .click-group {
            margin-top: 40px;
            margin-left: 40px;
            margin-right: 40px;
        }

        .btn {
            display: inline-block;
            padding: 16px;

            border-radius: 8px;
            border: none;
            color: #fff;
            font-weight: 700;
            font-size: 20px;
        }

        .btn a {
            text-decoration: none;
            color: #fff;
            font-weight: 700;
        }

        .btn-return {
            background: rgb(85, 149, 205);
        }

        .btn-submit {
            background: #dc3545;
        }

        .btn-return:hover {
            background: rgb(24, 205, 229);
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #ef2235;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="row">
        <div>
            <?php include '../../component/Home/menuLeft/ML_NhanVien.php' ?>>
        </div>

        <div style="min-height: 100vh; margin-left: 300px;">
            <div>
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div style="margin-top: 20px;">
                <?php
                $Ma_NV = $_GET['Ma_NV'];

                $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
                $sql = "SELECT * FROM `nhan_vien` JOIN chuc_vu ON nhan_vien.Ma_Chuc = chuc_vu.Ma_Chuc WHERE `Ma_NV` = '$Ma_NV'";
                $result = $conn->query($sql);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo
                        '
                        <div>
                            <h1 class="txt-center">Chi tiết về ' . $row['Ten_NV'] . '</h1>
                            <div>
                                <div class="detail">
                                    <span class="item">Ngày sinh: </span><span>' . $row['Ngay_Sinh'] . '</span><br />
                                    <span class="item">Giới tính: </span><span>' . $row['Gioi_Tinh'] . '</span><br />
                                    <span class="item">Địa chỉ: </span><span>' . $row['Dia_Chi'] . '</span><br />
                                    <span class="item">Ngày bắt đầu làm: </span><span>' . $row['Ngay_vao_Lam'] . '</span><br />
                                    <span class="item">Tên đăng nhập: </span><span>' . $row['Ten_Dang_Nhap'] . '</span><br />
                                    <span class="item">Mật khẩu: </span><span>' . $row['Mat_Khau'] . '</span><br />
                                    <span class="item">Chức vụ: </span><span>' . $row['Ten_Chuc'] . '</span><br />
                                    <span class="item">Công việc: </span><span>' . $row['Cong_Viec'] . '</span><br />
                                    <span class="item">Lương cứng: </span><span>' . $row['Luong'] . ' VNĐ</span><br />
                                </div>
                            </div>
                            
                            <div class="click-group rowItem">
                                <button class="btn btn-return"> <a href="http://localhost/PharmacyManager/ADMIN/page/NhanVien/NhanVien.php">Trở về </a></button>
                                <button class="btn btn-return"> <a href="http://localhost/PharmacyManager/ADMIN/page/NhanVien/suaNV.php?Ma_NV=' . $Ma_NV . '">Sửa thông tin</a></button>
                            </div>
                        </div>
                                    ';
                    }
                }
                $conn->close();
                ?>

            </div>
        </div>
    </div>
</body>

</html>