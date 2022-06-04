<!DOCTYPE html>
<html>

<head>
	<title>Đăng nhập</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="./styles1.css">
</head>

<body id="body">
	<div>
		<div class="fullicon">
			<div class="icon">
				<img src="../../../assets/anh/picture2.png" height="150px" width="150px" alt="" />
			</div>
			<div class="nameAp">
				<div class="thuonghieu">
					<h1 style="color: rgb(34,86,161);font-size: 50px;">Smart Phamacy</h1>
					<p style="color: rgb(34,86,161);font-size: 25px;">Quản lý hiệu thuốc thông minh</p>
				</div>
			</div>
		</div>
		<div>
			<div class="loginboxicon">
				<h1 style="text-align: center; font-size: 20px;line-height: 30px; color: white;">Login:</h1>
			</div>
		</div>
		<form action="xulydangnhap.php" method="post">
			<div class="area1">
				<div class="whitebox">
					<img src="../../../assets/anh/human.jpg" height="50px" width="50px" alt="" / style="padding: 5px 5px; margin-left: 20px;">
				</div>
				<input class="inp" type="text" placeholder="Nhập tài khoản của bạn..." name="username"><br>
				<div class="whitebox">
					<img src="../../../assets/anh/lock.jpg" height="40px" width="35px" alt="" / style="padding: 5px 5px; margin-left: 30px; margin-top: 5px;">
				</div>
				<input class="inp" type="password" placeholder="Nhập mật khẩu của bạn..." name="password"><br>
				<input type="submit" name="dangnhap" value='Đăng nhập' class="bttdn" />
			</div>
		</form>
	</div>
	<div id="footer">
		<?php include '../../component/Login/footer.php' ?>
	</div>
</body>

</html>