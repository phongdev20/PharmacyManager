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

		.col1 {
			color: black;
			font-size: 20px;
		}

		.col2 {
			background-color: rgb(227, 227, 227);
			color: black;
			font-size: 20px;
		}

		.col0 {
			color: white;
		}

		.themthuoc {
			margin-top: 20px;
			width: 200px;
			height: 50px;
			margin-left: 800px;
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

		<div style="height: 100vh;">
			<div>
				<?php include '../../component/Home/header.php' ?>
			</div>
			<div >
				<h1 class="txt-center" style="font-size: 40px; color: #000;">Kho thuốc</h1>
				<div class="item-center">
					<div class="row" style="margin-top: 20px;">
						<input class="inp" type="text" placeholder="Nhập thuốc tìm kiếm..." name="medicine"><br>
						<a href="#"><button class="bttfind"><img src="../../assets/anh/lup.png" width=40px height=40px></button></a>
					</div>
					<table class="table">
						<tr class="col0">
							<th class="tt" style="width: 250px; background: rgb(92,152,245);">Tên thuốc</th>
							<th class="tt" style="width: 200px; background: rgb(24,205,229);">Dạng</th>
							<th class="tt" style="width: 150px; background: rgb(92,152,245);">Số lượng</th>
							<th class="tt" style="width: 150px; background: rgb(24,205,229);">Giá</th>
							<th class="tt" style="width: 100px; background: rgb(92,152,245);">Chi tiết</th>
						</tr>
						<tr class="col1">
							<th class="tt">Tên thuốc</th>
							<th class="tt">Dạng</th>
							<th class="tt">Số lượng</th>
							<th class="tt">Giá</th>
							<th class="tt"><a href="#"><button class="btnChiTiet select">Xem</button></a></th>
						</tr>
						<tr class="col2">
							<th class="tt">Tên thuốc</th>
							<th class="tt">Dạng</th>
							<th class="tt">Số lượng</th>
							<th class="tt">Giá</th>
							<th class="tt"><a href="#"><button class="btnChiTiet select">Xem</button></a></th>
						</tr>
						<tr class="col1">
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
						</tr>
						<tr class="col2">
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
						<tr class="col1">
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
						</tr>
						<tr class="col2">
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
						<tr class="col1">
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
							<th class="tt"></th>
						</tr>
					</table>

				</div>
				<a href="#"><button class="themthuoc select"> + Thêm thuốc mới</button></a>
			</div>
		</div>
	</div>
</body>
</html>