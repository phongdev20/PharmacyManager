<!DOCTYPE html>
<html>

<head>
	<title>Kho thuốc</title>
	<link rel="stylesheet" href="../../assets/CSS/STYLE_GLOBAL.css">
	<link rel="stylesheet" href="./history.css">
</head>

<body>
	<div class="row">
		<div class = "main_left">
			<?php include '../../component/Home/menuLeft.php' ?>
		</div>

		<div class="main_right">
    <div style="min-height: 100vh;">
			<div >
				<?php include '../../component/Home/header.php' ?>
			</div>
      <div class="form1">
      <div class="titles">
        <h3>lịch sử thanh toán chi tiết</h3>
      </div>
      <div class="backs">
        <button> <a href="#">trở về</a></button>
      </div>
      <table class="table">
						<tr class="col0">
							<th>Date</th>
							<th>tên khách hàng</th>
              <th>tên thuốc</th>
							<th >số lượng</th>
              <th>giá cả</th>
						</tr>
						<tr class="col1">
							<td>13/03/2022</td>
							<td>nguyễn văn A</td>
							<td>vitamin A</td>
							<td>5</td>
							<td>500 <span>VND</span></td>
						</tr>
			</table>
      
      
    </div>
    </div>
		</div>
    
   

	</div>
</body>
</html>