<!DOCTYPE html>
<html>

<head>
	<title>Kho thuốc</title>
	<link rel="stylesheet" href="../../../assets/CSS/STYLE_GLOBAL.css">
	<style>
		#HoaDonNhap .txt-input {
			height: 40px;
			width: 300px;
			font-size: 20px;
			padding-left: 20px;
			border-radius: 10px;
		}

		#HoaDonNhap .bttfind {
			margin-left: 10px;
			width: 80px;
			height: 40px;
			border-radius: 20px;
		}

		#HoaDonNhap .table {
			border-collapse: collapse;
			margin-top: 20px;
			font-size: 25px;
		}

		#HoaDonNhap .tt {
			border: 1px solid gray;
			height: 40px;
		}

		#HoaDonNhap .txt-left {
			text-align: left;
			padding-left: 8px;
		}

		#HoaDonNhap .col1 {
			color: black;
			font-size: 20px;
		}

		#HoaDonNhap .col1:nth-child(odd) {
			background-color: rgb(227, 227, 227);
		}

		#HoaDonNhap .col0 {
			color: white;
		}

		#HoaDonNhap .themthuoc {
			margin-top: 20px;
			width: 200px;
			height: 50px;
			background-color: rgb(85, 149, 205);
			border: none;
			color: white;
			font-size: 22px;
			font-weight: bold;
			border-radius: 10px;
		}

		.select:hover {
			background: rgb(24, 205, 229);
			cursor: pointer;
		}


		.btnChiTiet {
			background: rgb(24, 205, 229);
			width: 70px;
			height: 30px;
			font-weight: bold;
			border-color: rgb(92, 152, 245);
			border-radius: 8px;

		}

		.btn {
			display: inline-block;
			padding-left: 16px;
			padding-right: 16px;

			border-radius: 8px;
			color: #fff;
			font-weight: 700;
			font-size: 20px;
		}

		.btn-submit {
			background: #dc3545;
			margin-left: 20px;
		}

		.btn-submit:hover {
			background: #ef2235;
			cursor: pointer;
		}

		.none {
			display: none;
		}

		.btn-group {
			padding-left: 20px;
			padding-right: 20px;
		}
	</style>
</head>

<body>
	<div class="row">
		<div>
			<?php include '../../component/Home/menuLeft/ML_HoaDonNhap.php' ?>

		</div>

		<div style="min-height: 100vh; margin-left: 300px;">
			<div>
				<?php include '../../component/Home/header.php' ?>
			</div>
			<div id="HoaDonNhap">
				<h1 class="txt-center" style="font-size: 40px; color: #000;">Thông tin nhập hàng</h1>
				<div class="item-center">
					<div class="row">
						<form action="HoaDonNhap.php" method="GET" class="row" style="margin-top: 20px; margin-right: 40px;">
							<input class="txt-input" type="text" placeholder="Nhập tên nhà cung cấp" name="txtSearch"><br>
							<a href="#"><button class="bttfind" type="submit" name="btnSearch"><img src="../../../assets/anh/lup.png" width=40px height=40px></button></a>
						</form>
					</div>
					<div>
						<table class="table">
							<tr class="col0">
								<th class="tt" style="width: 500px; background: rgb(92,152,245);">Tên nhà cung cấp</th>
								<th class="tt" style="width: 200px; background: rgb(24,205,229);">Ngày đặt hàng</th>
								<th class="tt" style="width: 200px; background: rgb(92,152,245);">Thanh toán</th>
								<th class="tt" style="width: 150px; background: rgb(24,205,229);">Chức năng</th>
							</tr>
							<?php
							if (isset($_GET['btnSearch'])) {
								$key = addslashes($_GET['txtSearch']);
								$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
								$sql = "SELECT * FROM `nhap_hang` JOIN nha_cung_cap on nhap_hang.Ma_NCC = nha_cung_cap.Ma_NCC WHERE nha_cung_cap.Ten_NCC LIKE '%$key%'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo '
										<tr class="col1">
											<th class="tt txt-left">' . $row['Ten_NCC'] . '</th>
											<th class="tt txt-left">' . $row['Ngay_Dat'] . '</th>
                                            <th class="tt txt-left">' . $row['Trang_Thai_Thanh_Toan'] . '</th>
											<th class="tt row btn-group">
												<a href="http://localhost/PharmacyManager/ADMIN/page/HoaDonNhap/ChiTiet.php?Ma_Nhap=' . $row['Ma_Nhap'] . '"><button class="btnChiTiet select">Xem</button></a>
											</th>
										</tr>
										';
									}
								}
							} else {
								$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
								$sql = "SELECT * FROM `nhap_hang` JOIN nha_cung_cap on nhap_hang.Ma_NCC = nha_cung_cap.Ma_NCC";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo '
										<tr class="col1">
											<th class="tt txt-left">' . $row['Ten_NCC'] . '</th>
											<th class="tt txt-left">' . $row['Ngay_Dat'] . '</th>
                                            <th class="tt txt-left">' . $row['Trang_Thai_Thanh_Toan'] . '</th>
											<th class="tt row btn-group">
												<a href="http://localhost/PharmacyManager/ADMIN/page/HoaDonNhap/ChiTiet.php?Ma_Nhap=' . $row['Ma_Nhap'] . '"><button class="btnChiTiet select">Xem</button></a>
											</th>
										</tr>
										';
									}
								}
							}
							?>
						</table>
					</div>

				</div>

			</div>
		</div>
	</div>
</body>

</html>