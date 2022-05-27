<!DOCTYPE html>
<html>
<head>
	<title>Kho thuốc</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			font-family: 'Roboto', sans-serif;
		}
		.row {
			display: flex;
			flex-direction: row;
		}
		
		.Khothuoc{
			float: left;
		}
		.inp{
			float: left;
			height: 40px;
			width: 300px;
			margin-top: 15px;
			font-size: 20px;
			padding-left: 20px;
			border-radius: 10px;
		}
		.bttfind{
			margin-left: 10px;
			float: left;
			width: 80px;
			height: 40px;
			border-radius: 20px;
		}
		.table{
			border-collapse: collapse;
			margin-top: 60px;
			margin-left: 100px;
			font-size: 25px;
		}
		.tt{
			border: 1px solid gray;
			height: 40px;
		}
		.col1{
			color: black;
			font-size: 20px;
		}
		.col2{
			background-color: rgb(227,227,227);
			color:black;
			font-size: 20px;
		}
		.col0{
			color: white;
		}
		.themthuoc{
			margin-top: 10px;
			width: 200px;
			height: 50px;
			margin-left: 770px;
			background-color: rgb(85,149,205);
			border: none;
			color: white;
			font-size: 22px;
			font-weight: bold;
			border-radius: 10px;
		}
		
		
		.btnChiTiet{
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
			<?php include'../../component/Home/menuLeft.php' ?>
		</div>

		<div class="Khothuoc">
			<div>
				<?php include'../../component/Home/header.php' ?>
			</div>
			<h1 class="name" style="font-size: 40px; color: #000; text-align: center;">Kho thuốc</h1>
			<div style="margin-left: 550px;"> 
				<input class="inp" type="text" placeholder="Nhập thuốc tìm kiếm..." name="medicine"><br>
				<a href="#"><button class = "bttfind"><img src="anh/lup.png" width=40px height= 40px></button></a>
				<div></div>
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
					<th class="tt"><a href="#"><button class="btnChiTiet">Xem</button></a></th>
				</tr>
				<tr class="col2">
					<th class="tt">Tên thuốc</th>
					<th class="tt">Dạng</th>
					<th class="tt">Số lượng</th>
					<th class="tt">Giá</th>
					<th class="tt"><a href="#"><button class="btnChiTiet">Xem</button></a></th>
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
			<a href="#"><button class="themthuoc">Thêm thuốc mới</button></a>
		</div>
	</div>
</body>
</html>