<!DOCTYPE html>
<html>

<head>
	<title>Kho thuốc</title>
	<link rel="stylesheet" href="../../../assets/CSS/STYLE_GLOBAL.css">
	<style>
		#NhaCungCap .txt-input {
			height: 40px;
			width: 300px;
			font-size: 20px;
			padding-left: 20px;
			border-radius: 10px;
		}

		#NhaCungCap .bttfind {
			margin-left: 10px;
			width: 80px;
			height: 40px;
			border-radius: 20px;
		}

		#NhaCungCap .table {
			border-collapse: collapse;
			margin-top: 20px;
			font-size: 25px;
		}

		#NhaCungCap .tt {
			border: 1px solid gray;
			height: 40px;
		}

		#NhaCungCap .txt-left {
			text-align: left;
			padding-left: 8px;
		}

		#NhaCungCap .col1 {
			color: black;
			font-size: 20px;
		}

		#NhaCungCap .col1:nth-child(odd) {
			background-color: rgb(227, 227, 227);
		}

		#NhaCungCap .col0 {
			color: white;
		}

		#NhaCungCap .themthuoc {
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
			<?php include '../../component/Home/menuLeft.php' ?>
		</div>

		<div style="min-height: 100vh; margin-left: 300px;">
			<div>
				<?php include '../../component/Home/header.php' ?>
			</div>
			<div id="NhaCungCap">
				<h1 class="txt-center" style="font-size: 40px; color: #000;">Thông tin các nhà cung cấp</h1>
				<div class="item-center">
					<div class="row">
						<form action="NhaCungCap.php" method="GET" class="row" style="margin-top: 20px; margin-right: 40px;">
							<input class="txt-input" type="text" placeholder="Nhập tên nhà cung cấp..." name="txtSearch"><br>
							<a href="#"><button class="bttfind" type="submit" name="btnSearch"><img src="../../../assets/anh/lup.png" width=40px height=40px></button></a>
						</form>
						<a href="./ThemNhaCungCap.php"><button class="themthuoc select"> + Thêm mới</button></a>
					</div>
					<div>
						<table class="table">
							<tr class="col0">
								<th class="tt" style="width: 420px; background: rgb(92,152,245);">Nhà cung cấp</th>
								<th class="tt" style="width: 200px; background: rgb(24,205,229);">Số điện thoại</th>
								<th class="tt" style="width: 130px; background: rgb(92,152,245);">Email</th>
								<th class="tt" style="width: 200px; background: rgb(24,205,229);">Chức năng</th>
							</tr>
							<?php
							if (isset($_GET['btnSearch'])) {
								$key = addslashes($_GET['txtSearch']);
								$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
								$sql = "SELECT * FROM `nha_cung_cap` WHERE Ten_NCC LIKE '%$key%' ORDER BY Ten_NCC";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo '
										<tr class="col1">
											<th class="tt txt-left">' . $row['Ten_NCC'] . '</th>
											<th class="tt txt-left">' . $row['SDT'] . '</th>
											<th class="tt txt-left">' . $row['Email'] . '</th>
											<th class="tt row btn-group">
												<a href="http://localhost/PharmacyManager/ADMIN/page/NhaCungCap/ChiTiet.php/?Ma_NCC=' . $row['Ma_NCC'] . '"><button class="btnChiTiet select">Xem</button></a>
												<form action="xuLyXoaNCC.php" method="GET">
													<input type="text" name="txtMaNCC" id="" class="none" value="' . $row['Ma_NCC'] . '">
													<input type="submit" name="removeNCC" value="Xóa" class="btn btn-submit">
												</form>
											</th>
										</tr>
										';
									}
								}
							} else {
								$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
								$sql = "SELECT * FROM `nha_cung_cap` ORDER BY Ten_NCC";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo '
										<tr class="col1">
											<th class="tt txt-left">' . $row['Ten_NCC'] . '</th>
											<th class="tt txt-left">' . $row['SDT'] . '</th>
											<th class="tt txt-left">' . $row['Email'] . '</th>
											<th class="tt row btn-group">
												<a href="http://localhost/PharmacyManager/ADMIN/page/NhaCungCap/ChiTiet.php/?Ma_NCC=' . $row['Ma_NCC'] . '"><button class="btnChiTiet select">Xem</button></a>
												<form action="xuLyXoaNCC.php" method="GET">
													<input type="text" name="txtMaNCC" id="" class="none" value="' . $row['Ma_NCC'] . '">
													<input type="submit" name="removeNCC" value="Xóa" class="btn btn-submit">
												</form>
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