<!DOCTYPE html>
<html>

<head>
	<title>Kho thuốc</title>
	<link rel="stylesheet" href="../../assets/CSS/STYLE_GLOBAL.css">
	<link rel="stylesheet" href="./history1.css">
</head>

<body>
	<div class="row">
		<div style="position: absolute">
			<?php include '../../component/Home/MenuLeft/ML_LichSuBan.php' ?>
		</div>

		<div class="main_right" style="margin-left: 300px;">
    		<div style="min-height: 100vh;">
				<div >
					<?php include '../../component/Home/header.php' ?>
				</div>
      		<div class="titles">
        		<h3>Lịch sử thanh toán</h3>
      		</div>
      	<table class="table">
						<thead>
							<tr class="col0">
									<th>ID</th>
									<th>khách hàng</th>
									<th>nhân Viên</th>
									<th>ngày bán</th>
									<th>Chi tiết</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
								$sql = "SELECT * FROM `hoa_don`";
								$result = $conn->query($sql);
								if($result->num_rows > 0){
									while ($row = $result->fetch_assoc()){
										echo'
										<tr class="col1">
											<td>'.$row['Ma_Hoa_Don'].'</td>
											<td >'.$row['Ten_KH'].'</td>
											<td>'.$row['Ma_NV'].'</td>
											<td >'.$row['Ngay_Ban_Hang'].'</td>
											<td ><a href="http://localhost/PharmacyManager/EMPLOYEE/page/history/detailed_history.php/?Ma_HD=' . $row['Ma_Hoa_Don'] . '"><button class="btnChiTiet select">Xem</button></a></td>
										</tr>
										';
									}
								}
								$conn->close();
							?>

								
						</tbody>
						
						
					</table>

    </div>
    </div>
		</div>
    
   

	</div>
</body>
</html>