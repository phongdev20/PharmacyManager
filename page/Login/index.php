<!DOCTYPE html>
<html>

<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="./styles.css">
</head>

<body id="body">
	<div>
		<div class="fullicon">
			<div class="icon">
				<img src="../../assets/anh/picture2.png" height="150px" width="150px" alt="" />
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
				<h1 style="text-align: center; font-size: 20px;line-height: 10px; color: white;">Login:</h1>
			</div>
		</div>
		<div class="area1">
			<div class="whitebox">
				<img src="../../assets/anh/human.jpg" height="50px" width="50px" alt="" / style="padding: 3px 28px">
			</div>
			<input class="inp" type="text" placeholder="Nhập tài khoản của bạn..." name="accout"><br>
			<div class="whitebox">
				<img src="../../assets/anh/lock.jpg" height="35px" width="30px" alt="" / style="padding: 10px 37px">
			</div>
			<input class="inp" type="password" placeholder="Nhập mật khẩu của bạn..." name="password"><br>
			<button type="submit" class="bttdn"><a class="dn" href="../Home/Khothuoc.php">Đăng nhập</a></button>
			<!--<p style="color: red;">[Lỗi]</p>-->
		</div>
	</div>
	<div id="footer">
		<?php include '../../component/Login/footer.php' ?>
	</div>
</body>

</html>