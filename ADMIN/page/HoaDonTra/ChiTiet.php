<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
    <link rel="stylesheet" href="../../../assets/CSS/STYLE_GLOBAL.css">
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

        #chi-tiet table,
        #chi-tiet th,
        #chi-tiet tr,
        #chi-tiet td {
            border: 1px solid rgb(85, 149, 205);
            border-collapse: collapse;
        }
        th{
            height: 50px;
        }

    </style>
</head>

<body>
    <div class="row">
        <div>
            <?php include '../../component/Home/menuLeft/ML_ThongKe.php' ?>>
        </div>

        <div style="min-height: 100vh; margin-left: 300px;">
            <div>
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div id="chi-tiet" style="margin-top: 20px;">
                <table style="margin-left: 50px;">
                    <tr>
                        <th style="width: 300px; background: rgb(92,152,245);">Tên sản phẩm</th>
                        <th style="width: 100px; background: rgb(24,205,229);">Số lượng</th>
                        <th style="width: 200px; background: rgb(92,152,245);">Đơn giá</th>
                    </tr>
                
                <?php
                $Ma_Tra = $_GET['Ma_Tra'];

                $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
                $sql = "SELECT san_pham.Ten_SP, chi_tiet_tra_thuoc.So_Luong, san_pham.Gia FROM `chi_tiet_tra_thuoc` JOIN san_pham on chi_tiet_tra_thuoc.Ma_SP = san_pham.Ma_SP WHERE `Ma_Tra_Thuoc` = '$Ma_Tra'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo
                        '
                        <tr>
                            <td>'.$row['Ten_SP'].'</td>
                            <td>'.$row['So_Luong'].'</td>
                            <td>'.$row['Gia'].'</td>
                        </tr>
                        ';
                        
                    }
                }
                $conn->close();
                ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>