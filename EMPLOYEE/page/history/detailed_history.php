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
        <div style="position: absolute;">
            <?php include '../../component/Home/MenuLeft/ML_LichSuBan.php' ?>
		</div>
        <div style="min-height: 100vh;margin-left:  300px;">
            <div style="margin-left:  0px;">
                <?php include '../../component/Home/header.php' ?>
            </div>
            <div style="margin-top: 20px;">
						<h1 class="txt-center">Chi tiết Hóa Đơn </h1>
                <?php
                $Ma_SP = $_GET['Ma_HD'];
                $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
                $sql = "SELECT * FROM `Chi_Tiet_Hoa_Don`  INNER JOIN san_pham on san_pham.Ma_SP = Chi_Tiet_Hoa_Don.Ma_SP WHERE Ma_Hoa_Don='$Ma_SP'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo
                        '
                        <div>
                            
                            <div class="row">
                                <div class="detail">
                                    <span class="item">Mã hóa đơn :</span><span>' . $row['Ma_CTHD'] . '</span><br />  
																		<span class="item">Tên sản phẩm: </span><span>' . $row['Ten_SP'] . '</span><br />
                                    <span class="item">Số Lượng : </span><span>' . $row['So_Luong'] . '</span><br />
                                    <span class="item">giá: </span><span>' . $row['Gia'] . ' VNĐ </span><br />
                              
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                                    ';
                    }
                }
                $conn->close();
                ?>
                <div class="click-group rowItem">
                                <button class="btn btn-return"> <a href="../../history/history.php">Trở về </a></button>
                            </div>
            </div>
        </div>
    </div>
</body>

</html>