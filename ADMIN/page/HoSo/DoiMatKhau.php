<?php
if (session_id() === '') {
    session_start();
}
$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
$username = $_GET['TK'];
$TaiKhoan = $username;
$sql = "SELECT * FROM `admin` WHERE `TaiKhoan` = '$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $HoTen = $row['HoTen'];
        $MatKhau = $row['MatKhau'];
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

        #ho-so .btn {
            font-size: 16px;
            color: #fff;
            padding: 16px;
            background: #dc3545;
            border-radius: 8px;
            border: none;
        }

        #ho-so .btn:hover {
            cursor: pointer;
            background: #ef2235;
        }
        .none {
            display: none;
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
                <h1 class="txt-center" style="font-size: 40px; color: #000;">Đổi mật khẩu</h1>
                <div class="item-center txt-box">
                    <form action="xuLyDoiMK.php" method="post">
                        <input class="none" type="text" name="txtTK" id="" value="<?php echo $TaiKhoan ?>">
                        <table>
                            <tr>
                                <th class="txt-left">Nhập mật khẩu cũ: </th>
                                <td><input type="password" name="txtOld" id=""></td>
                            </tr>
    
                            <tr>
                                <th class="txt-left">Nhập mật khẩu mới: </th>
                                <td><input type="password" name="txtNew" id=""></td>
                            </tr>
    
                            <tr>
                                <th class="txt-left">Nhập lại mật khẩu mới: </th>
                                <td><input type="password" name="txtReNew" id=""></td>
                            </tr>
    
                            <tr>
                                <td colspan="2" class="txt-center">
                                    <a href="./HoSo.php">Trở về</a>
                                    <button class="btn" type="submit" name="updateMK">Đổi mật khẩu</button>
                                </td>
                            </tr>       
                        </table>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>