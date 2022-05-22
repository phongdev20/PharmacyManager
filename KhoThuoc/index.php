<!DOCTYPE html>
<html>
<head>
	<title>Kho thuốc</title>
	<style type="text/css">
		body{
			font-family: 'Roboto', sans-serif;
		}
		.menu{
			height: 100vh;
			width:  250px;
			background-color: rgb(251,250,246);
			float: left;
		}
		.name{
			color:  rgb(54,129,243);
			padding-top: 10px;
			padding-left: 20px;
			font-size: 25px;
		}
		.logout{
			margin-left: 900px;
			font-size: 20px;
			font-weight: bold;
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
		.itemmenu{
			font-size: 24px;
			text-align: right;
			padding-right: 20px;
			padding-top: 25px;
		}
	</style>
</head>
<body>
	<div class="menu">
		<h1 class="name">Xin chào<br>[name]</h1>
		<div style="background: rgb(54,129,243); width: 250px;height: 5px;"></div>
		<div style="width: 230; float: left;">
			<h1 class="itemmenu">Kho thuốc</h1>
			<h1 class="itemmenu">Lịch sử bán</h1>
			<h1 class="itemmenu">Thống kê ngày</h1>
			<h1 class="itemmenu">Thống kê tháng</h1>
			<h1 class="itemmenu">Lịch sử nhập kho</h1>
			<h1 class="itemmenu">Hồ sơ cá nhân</h1>
			<h1 class="itemmenu">Chăm sóc hệ thống</h1>
		</div>
		<div style="float: left; width: 10px; background: red;">

		</div>
		<div></div>
	</div>
	<div class="Khothuoc">
		<p class="logout">log-out</p>
		<h1 class="name" style="font-size: 40px; margin-top:0px; padding-top: 0px;">Kho thuốc</h1>
		<div style="margin-left: 550px;"> 
			<input class="inp" type="text" placeholder="Nhập thuốc tìm kiếm..." name="medicine"><br>
			<button class = "bttfind"><img src="anh/lup.png" width=40px height= 40px></button>
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
	            <th class="tt">Chi tiết</th>
        	</tr>
        	<tr class="col2">
	            <th class="tt">Tên thuốc</th>
	            <th class="tt">Dạng</th>
	            <th class="tt">Số lượng</th>
	            <th class="tt">Giá</th>
	            <th class="tt">Chi tiết</th>
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
		<button class="themthuoc">Thêm thuốc mới</button>
	</div>
</body>
</html>