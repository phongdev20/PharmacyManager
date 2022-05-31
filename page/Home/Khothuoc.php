<!DOCTYPE html>
<html>

<head>
	<title>Kho thuốc</title>
	<link rel="stylesheet" href="../../assets/CSS/STYLE_GLOBAL.css">
	<style type="text/css">
		.inp {
			height: 40px;
			width: 300px;
			font-size: 20px;
			padding-left: 20px;
			border-radius: 10px;
		}

		.bttfind {
			margin-left: 10px;
			width: 80px;
			height: 40px;
			border-radius: 20px;
		}

		.table {
			border-collapse: collapse;
			margin-top: 20px;
			font-size: 25px;
		}

		.tt {
			border: 1px solid gray;
			height: 40px;
		}

		.txt-left {
			text-align: left;
			padding-left: 8px;
		}

		.col1 {
			color: black;
			font-size: 20px;
		}

		.col1:nth-child(odd) {
			background-color: rgb(227, 227, 227);
		}

		.col0 {
			color: white;
		}

		.themthuoc {
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
			border-radius: 5px;

		}
	</style>
</head>

<body>
	<div class="row">
		<div>
			<?php include '../../component/Home/menuLeft.php' ?>
		</div>

		<div style="min-height: 100vh;">
			<div>
				<?php include '../../component/Home/header.php' ?>
			</div>
			<div>
				<h1 class="txt-center" style="font-size: 40px; color: #000;">Kho thuốc</h1>
				<div class="item-center">
					<div class="row">
						<div class="row" style="margin-top: 20px; margin-right: 40px;">
							<input class="inp" type="text" placeholder="Nhập thuốc tìm kiếm..." name="medicine"><br>
							<a href="#"><button class="bttfind"><img src="../../assets/anh/lup.png" width=40px height=40px></button></a>
						</div>
						<a href="#"><button class="themthuoc select"> + Thêm thuốc mới</button></a>
					</div>
					<table class="table">
						<tr class="col0">
							<th class="tt" style="width: 250px; background: rgb(92,152,245);">Tên thuốc</th>
							<th class="tt" style="width: 200px; background: rgb(24,205,229);">Mặt hàng</th>
							<th class="tt" style="width: 150px; background: rgb(92,152,245);">Số lượng</th>
							<th class="tt" style="width: 150px; background: rgb(24,205,229);">Giá</th>
							<th class="tt" style="width: 100px; background: rgb(92,152,245);">Chi tiết</th>
						</tr>
						<?php
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
									<th class="tt"><a href="http://localhost/PharmacyManager/page/Home/ChiTiet.php/?Ma_SP='.$row['Ma_SP'].'"><button class="btnChiTiet select">Xem</button></a></th>
								</tr>
								';
							}
						}
						?>
					</table>

				</div>

			</div>
		</div>
	</div>
</body>

</html>