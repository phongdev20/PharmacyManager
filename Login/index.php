<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<style type="text/css">

		body {
			  background-image: url(../anh/x2.png);
			  background-position: center;
			  background-size: cover;
			  background-repeat: no-repeat;
			  min-height: 100vh;
			  font-family: 'Roboto', sans-serif;
			  overflow: hidden;
			}
		.fullicon{
			padding-top:  5% ;
		}
		.icon{
			margin-left: 300px;;
			float: left;
			margin-top: -1%;
		}
		.nameAp{
			margin-left: 320px;
			width: 700px;
			height: 110px;
			background: white;
			border-radius: 60px;
			border: 5px solid rgb(34,86,161);
		}
		.thuonghieu{
			margin-left: 200px;
			line-height: 10px;
		}
		.loginboxicon{
			width: 100px;
			height: 30px;
			background: rgba(34,86,161,0.7);
			border-radius: 10px;
			margin-left: 400px;
			margin-top: 20px;
			border: 3px solid white;
		}
		.area1{
			margin-left: 250px;
			margin-top: 20px;
		}
		.inp{
			margin: 10px;
			margin-left: 2px;
			height: 52px;
			font-size: 25px;
			width: 650px;
			background: red;
			background: rgba(255,255,255,0.7);
			border: 2px solid black ;
			border-top-right-radius: 30px;
			border-bottom-right-radius: 30px;
			padding-left: 30px;
		}
		.whitebox{
			margin-top: 10px;
			width: 80px;
			height: 55px;
			background: rgba(255,255,255,0.7);
			float: left;
			margin-left: 50px;
			border: 2px solid black ;
			border-top-left-radius: 30px;
			border-bottom-left-radius: 30px;
		}
		.dn{
			text-decoration: none;
			color: white;
			font-size: 30px;
		}
		.bttdn{
			width: 200px;
			height: 60px;
			background: rgba(34,86,161,0.9);
			border-radius: 10px;
			margin-left: 135px;
			margin-top: 20px;
			border: 1px solid white;
		}
		#trapezium {
		    height: 0;
		    width: 320px;
		    border-bottom: 100px solid rgb(24,205,229);
		    border-right: 50px solid transparent;
		}
		#trapezium2 {
		    height: 0;
		    width: 300px;
		    border-bottom: 100px solid rgb(1,74,153);
		    border-right: 50px solid transparent;
		    padding-top: 20px;
		}
		#rec {
		    width: 100%;
			height: 80px;
			background: rgb(1,74,153);
		}
		.lh{
			float: left;
			color: white;
			font-weight: bold;
			font-size: 25px;
			line-height: 0px;
			margin-left: 30px;
		}
	</style>
</head>
<body>
	<div class="fullicon">
		<div class="icon">
			<img src="../anh/picture2.png" height="150px" width="150px" alt="" />
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
			<h1 style="text-align: center; font-size: 20px;line-height: 5px; color: white;">Login:</h1>
		</div>
	</div>
	<div class="area1">
			<div class="whitebox">
				<img src="../anh/human.jpg" height="50px" width="50px" alt="" / style="padding: 3px 28px">
			</div>
			<input class="inp" type="text" placeholder="Nhập tài khoản của bạn..." name="accout"><br>
			<div class="whitebox">
				<img src="../anh/lock.jpg" height="35px" width="30px" alt="" / style="padding: 10px 37px">
			</div>
			<input class="inp" type="password" placeholder="Nhập mật khẩu của bạn..." name="password"><br>
			<button type="submit" class="bttdn"><a class="dn" href="http://localhost/DoAn/KhoThuoc/index.php">Đăng nhập</a></button>
			<!--<p style="color: red;">[Lỗi]</p>-->
	</div>
</body>
<footer style="margin: 0px; padding: 0 ; box-sizing: border-box;">
	<div id="trapezium">
		<div id="trapezium2">
			<h1 style="font-size: 25px; padding-left: 20px; padding-top: 10px; color: white;">Chăm sóc khách hàng</h1>
		</div>
	</div>
	<div id="rec">
		<p class="lh">Liên hệ:</p>
		<img src="../anh/call.png" height="30px" width="30px" alt="" / style = "float: left; margin-left: 500px; margin-top: 10px;">
		<p class="lh">0123123321</p>
		<img src="../anh/email.png" height="50px" width="50px" alt="" / style = "float: left; margin-left: 100px;">
		<p class="lh">ktxteam012@gmail.com</p>
	</div>
</footer>
</html>