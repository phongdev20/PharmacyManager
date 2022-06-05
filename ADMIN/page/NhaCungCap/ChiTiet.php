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

        .sdt {
            color: #dc3545;
        }

        .email {
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <div class="row">
        <div>
            <?php include '../../component/Home/menuLeft/ML_NhaCungCap.php' ?>>
        </div>

        <div style="min-height: 100vh; margin-left: 300px;">
            <div>
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div style="margin-top: 20px;">
                <?php
                $Ma_NCC = $_GET['Ma_NCC'];

                $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
                $sql = "SELECT * FROM `nha_cung_cap` WHERE `Ma_NCC` = '$Ma_NCC'";
                $result = $conn->query($sql);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo
                        '
                        <div>
                            <h1 class="txt-center">Chi tiết về ' . $row['Ten_NCC'] . '</h1>
                            <div>
                                <div class="detail">
                                    <span class="item">Số điện thoại: </span><span class="sdt">' . $row['SDT'] . '</span><br />
                                    <span class="item">Email: </span><span class="email">' . $row['Email'] . '</span><br />
                                    <span class="item">Địa chỉ: </span><span>' . $row['Dia_Chi'] . '</span><br />
                                    <span class="item">Các mặt hàng: </span><span>' . $row['Cac_Mat_Hang'] . '</span><br />
                                </div>
                            </div>
                            
                            <div class="click-group rowItem">
                                <button class="btn btn-return"> <a href="http://localhost:81/PharmacyManager/ADMIN/page/NhaCungCap/NhaCungCap.php">Trở về </a></button>
                                <button class="btn btn-return"> <a href="http://localhost:81/PharmacyManager/ADMIN/page/NhaCungCap/suaNCC.php?Ma_NCC='.$Ma_NCC.'">Sửa thông tin</a></button>
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