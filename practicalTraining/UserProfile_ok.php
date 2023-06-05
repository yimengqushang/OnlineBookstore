<?php
	require("Conn.php");
	if(isset($_POST['submit'])){
		$user = trim($_POST['username']);
		$cname = trim($_POST['name']);
		$city = trim($_POST['city']);
		$address = trim($_POST['address']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$zip = trim($_POST['zip']);
		$sql="update account set Cname='$cname',City='$city',Address='$address',Phone='$phone',Email='$email',Zip='$zip' where Username='$user'";
		$result = $db->query($sql);
		if($db->affected_rows>=1){
			echo "<script>alert('更新成功!');location='UserProfile.php'</script>";
		}else{
			echo "<script>alert('更新失败!');location='UserProfile.php'</script>";
		}
	}
?>