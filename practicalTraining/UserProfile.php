<?php include("HeaderNav.html");?>
<?php
	session_start();
	require("Conn.php");
	$user = $_SESSION['user'];
	$sql = "select * from account where Username='$user'";
	$result=$db->query($sql);
	if($result->num_rows <1) exit("未找到用户信息");
	$row=$result->fetch_assoc();
?>

	<form action="UserProfile_ok.php" method="post">
		<p>账号&nbsp;:&nbsp;&nbsp;<input type="text" name="username" value="<?=$row['Username']?>" readonly></p>
		<p>姓名&nbsp;:&nbsp;&nbsp;<input type="text" name="name" value="<?=$row['Cname']?>"></p>
		<p>国家&nbsp;:&nbsp;&nbsp;<input type="text" name="city" value="<?=$row['City']?>"></p>
		<p>地址&nbsp;:&nbsp;&nbsp;<input type="text" name="address" value="<?=$row['Address']?>"></p>
		<p>电话&nbsp;:&nbsp;&nbsp;<input type="text" name="phone" value="<?=$row['Phone']?>"></p>
		<p>邮箱&nbsp;:&nbsp;&nbsp;<input type="text" name="email" value="<?=$row['Email']?>"></p>
		<p>邮编&nbsp;:&nbsp;&nbsp;<input type="text" name="zip" value="<?=$row['Zip']?>"></p>
		<p><input type="submit" name="submit" value="保存"></p>
	</form>
<?php include("Footer.html"); ?>	
