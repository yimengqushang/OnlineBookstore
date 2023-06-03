<?php
//判断cookie是否存在
if(isset($_COOKIE['username'])){
	$username=$_COOKIE['username'];
	$password=$_COOKIE['password'];
	$sql="select * from account where username='$username' and password='$password'";
	var_dump($sql);
	require("Conn.php");
	$result=mysqli_query($db,$sql);
	
	//分支判断
	if($result && mysqli_num_rows($result)>0 ){
		//创建会话变量
		session_start();
		$_SESSION['user']=$username;
		echo "自动登录成功，即将跳转到主页...";
		header("refresh:3;url=index.php");
		exit;
	}
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/Style.css">
</head>
<body>
	<header></header>
	<main>
	<div class="cont">
	  <form method="post" action="Login_ok.php">
	    <h1>欢迎登陆</h1>
		<label>
			<img src="images/user.png">
			<input type="text" name="username" required>
		</label>
		<label>
			<img src="images/pass.png">
			<input type="password" name="password" required>
		</label>
	    <div class="code">
	        <label>
	            <img src="images/code.png">
	            <input type="text" name="code" required>
	        </label>
	        <img src="code.php" alt="" onclick="this.src='code.php?'+'Math.random()'">
	    </div>
		<div>
			<input type="checkbox" name="alogin"> 下次自动登录
		</div>
		<div class="login">
			<input type="submit" name="submit" value="登录">
			<a href="Register.php">注册</a>
		</div>
	  </form>
	</div>
</body>
<?php include("Footer.html"); ?>	
</html>