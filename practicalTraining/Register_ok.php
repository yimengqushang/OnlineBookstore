<?php
	if(empty($_POST['username']) || empty($_POST['password'])){
		exit("用户名或密码为空，请重新输入！");
	}
	require("Conn.php");
	$user = checkInput($_POST["username"]);
	$pwd = checkInput($_POST["password"]);
	$email = checkInput($_POST["email"]);
	
	function checkInput($data){
		$data=trim($data);
		$data=stripslashes($data);//去掉反斜线
		$data=htmlspecialchars($data);
		return $data;
	}
	
	$sql = "insert into account(`Username`,`Password`,`Email`) values('$user','$pwd','$email')";
	$result = $db->query($sql);
	if($db->affected_rows>=1){
		// 注册成功
		echo "<script>alert('注册成功!');location='Login.php'</script>";
	}else{
		echo "<script>alert('注册失败!');location='Register.php'</script>";
	}
?>
