<?php
require('lib/db.php');
require('functions/lichsuphieu.php');
session_start();

	try 
	{
		if(isset($_SESSION['MaNV']))
		{
			$id = $_SESSION['MaNV'];
			//---set tình trang nhân viên không login
			$sql="UPDATE tblDMNhanVien SET IsLogInWeb = 0 WHERE MaNV like '$id'";
			$rs=sqlsrv_query($conn,$sql);
			
			//---insert lich su ra vao
			InsertLichSuRaVao($conn,$id);
			
			$_SESSION = array();
			session_destroy();
		}
	} 
	catch(Exception $e) {	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Quản lý đánh giá dịch vụ </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Phần mềm quản lý Spa ZinSPA">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1 class="wthree">ĐÁNH GIÁ CHẤT LƯỢNG DỊCH VỤ</h1>
	<div class="container login-section">
	<div class="login-w3l">	
				<div class="login-form">			
					<form action="login_action.php" method="post">
						<div class="w3ls-icon">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input type="text" class="user" name="username" placeholder="Nhân viên" required />
						</div>
						<div class="w3ls-icon">
							<i class="fa fa-unlock" aria-hidden="true"></i>
							<input type="password" class="lock" name="password" placeholder="Mật khẩu" required />
						</div>
						<div class="signin-rit">
						<div class="clear"> </div>
						</div>
						<input type="submit" value="Đăng nhập">
					</form>	
				</div>
	<!-- //login -->
		</div>	
		<div class="login-w3l-bg">	
			<img src="images/banner.png" alt=""/>
		</div>	
         
		<div class="clear"></div>	
	</div> 	
    <div class="footer">
		<p class="title">CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ ZINTECH</h2>
        <p>Phone:02839310042 - Hotline:0966885959</p>
        <p>Website:www.zintech.vn</p>
        <p>Email:sales@zintech.vn</p>
        </br>
     </div>
        
        
	<div class="clearfix"></div>
		<!--//login-->
</body>
</html>