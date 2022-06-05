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
            <?php include '../../component/Home/menuLeft.php' ?>
        </div>

        <div style="min-height: 100vh;">
            <div>
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div style="margin-top: 20px;">
                <?php
                if (session_id() === '') {
                    session_start();
                }
                $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
                $username = $_SESSION['username'];
                $password = $_SESSION['password'];

                $sql = $sql = "SELECT * FROM `nhan_vien` WHERE Ten_Dang_Nhap = '$username' && Mat_Khau = '$password'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo
                        '
                        <div>
                            <h1 class="txt-center">Hồ Sơ Cá Nhân </h1>
                            <div class="row">
                                <div class="detail">
                                    <span class="item"> mã nhân viên :</span><span>' . $row['Ma_NV'] . '</span><br />
                                    <span class="item"> tên nhân viên :</span><span>' . $row['Ten_NV'] . '</span><br />
                                    <span class="item"> ngày sinh : </span><span>' . $row['Ngay_Sinh'] . '</span><br />
                                    <span class="item"> giới tính : </span><span>' . $row['Gioi_Tinh'] . '</span><br />
                                    <span class="item"> địa chỉ: </span><span>' . $row['Dia_Chi'] . '</span><br />
                                    <span class="item"> chức danh: </span><span>' . $row['Ma_Chuc'] . '</span><br />
                                    <span class="item"> ngày vào làm : </span><span>' . $row['Ngay_vao_Lam'] . '</span><br />
                                    <span class="item"> tên đăng nhập : </span><span>' . $row['Ten_Dang_Nhap'] . '</span><br />
                                    <span class="item"> mật khẩu: </span><span>' . $row['Mat_Khau'] . '</span><br />
                                </div>
                            </div>
                            
                            <div class="click-group rowItem">
                                <button class="btn btn-return"> <a href="../Home/Khothuoc.php">Trở về </a></button>
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