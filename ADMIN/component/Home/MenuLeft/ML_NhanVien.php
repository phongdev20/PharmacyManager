<?php 
if (session_id() === '') {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/CSS/STYLE_GLOBAL.css">
    <style>
        #menu {
            min-height: 100vh;
            width: 300px;
            background-color: rgb(251, 250, 246);
            border-right: 3px solid rgb(54, 129, 243);
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            min-height: 100vh;
        }

        #menu .box-name {
            background: rgb(54, 129, 243);
        }

        #menu .name {
            color: #fff;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            font-size: 25px;
        }

        #menu .box-item {
            padding-top: 12px;
            padding-bottom: 12px;
            width: 276px;
        }
        #menu .box-item:hover {
            background: rgb(54, 129, 243);
            border: 1px solid #fff;
        }
        .selected {
            background: rgb(54, 129, 243);
            border: 1px solid #fff;
        }

        #menu .link {
            text-decoration: none;
            color: black;
            font-size: 24px;
            text-align: left;
            padding-left: 20px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        #menu .link:hover{
            color: #fff;
        }
        #menu .item1:active{
            color: red;
        }
    </style>
</head>

<body>
    <script language="javascript">
            function change_background()
            {
               document.getElementById("B1").style.visibility = 'visible';
            }
    </script>
    <div id="menu">
        <?php
        $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        $sql = "SELECT * FROM `admin` WHERE TaiKhoan = '$username' && MatKhau = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="box-name">
                    <h1 class="name">Xin chào<br>'.$row['HoTen'].'</h1>
                </div>';
            }
        }
        $conn->close();
        ?>
        <div style="position: absolute;">
            <div class="box-item" class="item1">
                <a class="link" href="http://localhost/PharmacyManager/ADMIN/page/Home/Khothuoc.php" onclick="change_background()">Kho thuốc</a>
            </div>
            <div class="box-item">
                <a class="link" href="http://localhost/PharmacyManager/ADMIN/page/NhaCungCap/NhaCungCap.php">Nhà cung cấp</a>
            </div>
            <div class="box-item">
                <a class="link" href="http://localhost/PharmacyManager/ADMIN/page/NhanVien/NhanVien.php">Nhân viên</a>
            </div>
            <div class="box-item">
                <a class="link" href="ThongKeThang.php">Thống kê</a>
            </div>
            <div class="box-item">
                <a class="link" href="LichSuNhapKho.php">Hóa đơn nhập</a>
            </div>
            <div class="box-item">
                <a class="link" href="http://localhost/PharmacyManager/ADMIN/page/HoaDonBan/HoaDonBan.php" >Hóa đơn bán</a>
            </div>
            <div class="box-item">
                <a class="link" href="http://localhost/PharmacyManager/ADMIN/page/HoSo/HoSo.php">Hồ sơ cá nhân</a>
            </div>
            <div class="box-item">
                <a class="link" href="http://localhost/PharmacyManager/ADMIN/page/ChamSocHeThong/ChamSocHeThong.php">Chăm sóc hệ thống</a>
            </div>
        </div>
        <div>
            <div style="width: 20px; height: 60vh; background: rgb(251, 250, 246); margin-left: 277px; margin-top: 1px;">
                <div id="B1" style="width: 20px; height: 53px; background: rgb(54, 129, 243); visibility: hidden;"></div>
                <div id="B1" style="width: 20px; height: 55px; background: rgb(54, 129, 243); visibility: hidden;"></div>
                <div id="B1" style="width: 20px; height: 53px; background: rgb(54, 129, 243); visibility: visible;"></div>
                <div id="B1" style="width: 20px; height: 55px; background: rgb(54, 129, 243); visibility: hidden;"></div>
                <div id="B1" style="width: 20px; height: 53px; background: rgb(54, 129, 243); visibility: hidden;"></div>
                <div id="B1" style="width: 20px; height: 55px; background: rgb(54, 129, 243); visibility: hidden;"></div>
                <div id="B1" style="width: 20px; height: 53px; background: rgb(54, 129, 243); visibility: hidden;"></div>
                <div id="B1" style="width: 20px; height: 55px; background: rgb(54, 129, 243); visibility: hidden;"></div>
            </div>
        </div>
    </div>
    
    
</div>
</body>

</html>