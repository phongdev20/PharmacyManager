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

        #menu .box-item:hover {
            background: rgb(54, 129, 243);
            border: 1px solid #000;
        }

        #menu .itemmenu {
            font-size: 24px;
            text-align: left;
            padding-left: 20px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        #menu .link {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div id="menu">
        <?php
        if (session_id() === '') {
            session_start();
        }
        $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        $sql = "SELECT * FROM `nhan_vien` WHERE Ten_Dang_Nhap = '$username' && Mat_Khau = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="box-name">
                    <h1 class="name">Xin chào<br>'.$row['Ten_NV'].'</h1>
                </div>';
            }
        }
        $conn->close();
        ?>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="../../page/Home/Khothuoc.php">Kho thuốc</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="../../page/history/history.php">Lịch sử bán</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="../../page/ThongKeNgay.php">lập hóa đơn</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="../../page/information/hosocanhan.php">Hồ sơ cá nhân</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="../../page/HoSoCaNhan.php">Đổi Mật Khẩu</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="../../page/ChamSocHeThong.php">Chăm sóc hệ thống</a></h1>
        </div>
        
    </div>
</body>

</html>