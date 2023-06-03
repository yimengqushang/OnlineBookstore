<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/register.css">
	<link rel="stylesheet" href="css/Style.css">
</head>
<body>
	<header></header>
	<main>
	<div class="cent">
		<form action="Register_ok.php" method="post">
			<h1>欢迎您的加入</h1>
			<label>
				<img src="images/user.png" alt="">
				<input type="text" name="username" placeholder="请输入用户名" required >	
			</label>
			<label>
				<img src="images/pass.png" alt="">
				<input type="password" name="password" placeholder="请输入密码" required>	
			</label>
			<label>
				<img src="images/email.png" alt="">
				<input type="text" name="email" placeholder="请输入邮箱">	
			</label>
			<div>
				<input type="submit" name="submit" value="注册">
			</div>
		</form>
	</div>
</body>
<?php include("Footer.html"); ?>	
</html>