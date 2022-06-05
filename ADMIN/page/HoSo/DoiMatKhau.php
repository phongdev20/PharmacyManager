<?php
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
$username = $_SESSION['username'];
$sql = "SELECT * FROM `admin` WHERE `TaiKhoan` = '$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <th class="txt-left">Họ và tên: </th>
            <td>' . $row['HoTen'] . '</td>
        </tr>

        <tr>
            <th class="txt-left">Tên đăng nhập: </th>
            <td>' . $row['TaiKhoan'] . '</td>
        </tr>

        <tr>
            <th class="txt-left">Mật khẩu: </th>
            <td>' . $row['MatKhau'] . '</td>
        </tr>

        <tr>
            <td colspan="2" class="txt-center">
                <a href="">Đổi mật khẩu</a>
            </td>
        </tr>       
        ';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Đổi mật khẩu</title>
    <link rel="stylesheet" href="../../../assets/CSS/STYLE_GLOBAL.css">
    <style>
        #ho-so p {
            font-size: 24px;
        }

        #ho-so .txt-box {
            margin-top: 40px;
        }

        #ho-so table,
        #ho-so tr,
        #ho-so th,
        #ho-so td {
            border: 1px solid rgb(92, 152, 245);
            border-collapse: collapse;
        }

        #ho-so th,
        #ho-so td {
            height: 40px;
            padding: 16px;
        }

        #ho-so a {
            text-decoration: none;
            color: #fff;
            padding: 16px;
            background: rgb(92, 152, 245);
            border-radius: 8px;
        }

        #ho-so a:hover {
            cursor: pointer;
            background: rgb(24, 205, 229);
        }
    </style>
</head>

<body>
    <div class="row">
        <div>
            <?php include '../../component/Home/menuLeft/ML_HoSoCaNhan.php' ?>
        </div>

        <div style="min-height: 100vh; margin-left: 300px;">
            <div>
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div id="ho-so">
                <h1 class="txt-center" style="font-size: 40px; color: #000;">Thông tin tài khoản</h1>
                <div class="item-center txt-box">
                    <table>

                    </table>
                </div>

            </div>
        </div>
    </div>
</body>

</html>