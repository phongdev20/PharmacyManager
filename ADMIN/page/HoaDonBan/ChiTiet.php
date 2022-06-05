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

    </style>
</head>

<body>
    <div class="row">
        <div>
            <?php include '../../component/Home/menuLeft/ML_HoaDonBan.php' ?>>
        </div>

        <div style="min-height: 100vh; margin-left: 300px;">
            <div>
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div id="chi-tiet" style="margin-top: 20px;">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                    </tr>
                </table>
                <?php
                $Ma_HD = $_GET['Ma_HD'];

                $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
                $sql = "SELECT san_pham.Ten_SP, chi_tiet_hoa_don.So_Luong, san_pham.Gia FROM `chi_tiet_hoa_don` JOIN san_pham on chi_tiet_hoa_don.Ma_SP = san_pham.Ma_SP WHERE `Ma_Hoa_Don` = '$Ma_HD'";
                $result = $conn->query($sql);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $stt = 1;
                        echo
                        '
                        <tr>
                            <td>'.$stt.'</td>
                            <td>'.$row['Ten_SP'].'</td>
                            <td>'.$row['SoLuong'].'</td>
                            <td>'.$row['Gia'].'</td>
                        </tr>
                        ';
                        $stt += 1;
                    }
                }
                $conn->close();
                ?>
                
            </div>
        </div>
    </div>
</body>

</html>