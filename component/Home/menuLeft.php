<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/CSS/STYLE_GLOBAL.css">
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

        #menu .box-item:hover{
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
        <div class="box-name">
            <h1 class="name">Xin chào<br>[name]</h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="Khothuoc.php">Kho thuốc</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="../../page/history/history.php">Lịch sử bán</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="ThongKeNgay.php">Thống kê ngày</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="ThongKeThang.php">Thống kê tháng</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="LichSuNhapKho.php">Lịch sử nhập kho</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="HoSoCaNhan.php">Hồ sơ cá nhân</a></h1>
        </div>
        <div class="box-item">
            <h1 class="itemmenu"><a class="link" href="ChamSocHeThong.php">Chăm sóc hệ thống</a></h1>
        </div>
    </div>
</body>

</html>