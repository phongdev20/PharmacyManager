<!DOCTYPE html>
<html>

<head>
	<title>Kho thuốc</title>
	<link rel="stylesheet" href="../../../assets/CSS/STYLE_GLOBAL.css">
	<style>
		#KhoThuoc .txt-input {
			height: 40px;
			width: 300px;
			font-size: 20px;
			padding-left: 20px;
			border-radius: 10px;
		}

		#KhoThuoc .bttfind {
			margin-left: 10px;
			width: 80px;
			height: 40px;
			border-radius: 20px;
		}

		#KhoThuoc .table {
			border-collapse: collapse;
			margin-top: 20px;
			font-size: 25px;
		}

		#KhoThuoc .tt {
			border: 1px solid gray;
			height: 40px;
		}

		#KhoThuoc .txt-left {
			text-align: left;
			padding-left: 8px;
		}

		#KhoThuoc .col1 {
			color: black;
			font-size: 20px;
		}

		#KhoThuoc .col1:nth-child(odd) {
			background-color: rgb(227, 227, 227);
		}

		#KhoThuoc .col0 {
			color: white;
		}

		#KhoThuoc .themthuoc {
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
			<?php include '../../component/Home/MenuLeft/ML_KhoThuoc.php' ?>
		</div>

		<div style="min-height: 100vh;">
			<div>
				<?php include '../../component/Home/header.php' ?>
			</div>
			<div id="KhoThuoc">
				<h1 class="txt-center" style="font-size: 40px; color: #000;">Kho thuốc</h1>
				<div class="item-center">
					<div class="row">
						<form action="Khothuoc.php" method="GET" class="row" style="margin-top: 20px; margin-right: 40px;">
							<input class="txt-input" type="text" placeholder="Nhập thuốc tìm kiếm..." name="txtSearch"><br>
							<a href="#"><button class="bttfind" type="submit" name="btnSearch"><img src="../../../assets/anh/lup.png" width=40px height=40px></button></a>
						</form>
					</div>
					<div>
						<table class="table">
							<tr class="col0">
								<th class="tt" style="width: 250px; background: rgb(92,152,245);">Tên thuốc</th>
								<th class="tt" style="width: 250px; background: rgb(24,205,229);">Mặt hàng</th>
								<th class="tt" style="width: 150px; background: rgb(92,152,245);">Số lượng</th>
								<th class="tt" style="width: 150px; background: rgb(24,205,229);">Giá</th>
								<th class="tt" style="width: 200px; background: rgb(92,152,245);">Chức năng</th>
							</tr>
							<?php
							if (isset($_GET['btnSearch'])) {
								$key = addslashes($_GET['txtSearch']);
								$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
								$sql = "SELECT * FROM `san_pham` INNER JOIN loai_mat_hang on san_pham.Loai_Mat_Hang = loai_mat_hang.Ma_Loai_MH WHERE san_pham.Ten_SP LIKE '%$key%' ORDER BY loai_mat_hang.Ten_Loai_MH";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo '
										<tr class="col1">
											<th class="tt txt-left">' . $row['Ten_SP'] . '</th>
											<th class="tt txt-left">' . $row['Ten_Loai_MH'] . '</th>
											<th class="tt txt-left">' . $row['So_Luong'] . '</th>
											<th class="tt txt-left">' . $row['Gia'] . ' VNĐ</th>
											<th class="tt row btn-group">
												<a href="../../page/Home/ChiTiet.php/?Ma_SP=' . $row['Ma_SP'] . '"><button class="btnChiTiet select">Xem</button></a>
											</th>
										</tr>
										';
									}
								}
							} else {
								$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
								$sql = "SELECT * FROM `san_pham` INNER JOIN loai_mat_hang on san_pham.Loai_Mat_Hang = loai_mat_hang.Ma_Loai_MH ORDER BY loai_mat_hang.Ten_Loai_MH";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo '
										<tr class="col1">
											<th class="tt txt-left">' . $row['Ten_SP'] . '</th>
											<th class="tt txt-left">' . $row['Ten_Loai_MH'] . '</th>
											<th class="tt txt-left">' . $row['So_Luong'] . '</th>
											<th class="tt txt-left">' . $row['Gia'] . ' VNĐ</th>
											<th class="tt row btn-group">
												<a href="../../page/Home/ChiTiet.php/?Ma_SP=' . $row['Ma_SP'] . '"><button class="btnChiTiet select">Xem</button></a>
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