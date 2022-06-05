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
            <?php include '../../component/Home/menuLeft/ML_KhoThuoc.php' ?>
        </div>

        <div style="min-height: 100vh; margin-left: 300px;">
            <div>
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div style="margin-top: 20px;">
                <?php
                $Ma_SP = $_GET['Ma_SP'];

                $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
                $sql = "SELECT * FROM `san_pham` INNER JOIN loai_mat_hang on san_pham.Loai_Mat_Hang = loai_mat_hang.Ma_Loai_MH WHERE Ma_SP='$Ma_SP'";
                $result = $conn->query($sql);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo
                        '
                        <div>
                            <h1 class="txt-center">Chi tiết về ' . $row['Ten_SP'] . '</h1>
                            <div class="row">
                                <div>
                                    <img class="img" src="data:image/jpeg;base64,' . base64_encode($row['Hinh_Anh_SP']) . '">
                                </div>
                                <div class="detail">
                                    <span class="item">Giá: </span><span>' . $row['Gia'] . ' VNĐ</span><br />
                                    <span class="item">Số lượng: </span><span>' . $row['So_Luong'] . '</span><br />
                                    <span class="item">Loại mặt hàng: </span><span>' . $row['Ten_Loai_MH'] . '</span><br />
                                    <span class="item">Tính năng: </span><span>' . $row['Tinh_Nang'] . '</span><br />
                                </div>
                            </div>
                            
                            <div class="click-group rowItem">
                                <button class="btn btn-return"> <a href="http://localhost:81/PharmacyManager/ADMIN/page/Home/Khothuoc.php">Trở về </a></button>
                                <button class="btn btn-return"> <a href="http://localhost:81/PharmacyManager/ADMIN/page/Home/suaSanPham.php?Ma_SP='.$Ma_SP.'">Sửa thông tin</a></button>
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