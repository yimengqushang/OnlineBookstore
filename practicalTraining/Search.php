<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<? include("HeaderNav.html") ?>
	<div class="fenLei" style="display:none;">
		<?php
		require("Conn.php");
		$result = $db->query("select * from category");
		if($result->num_rows>0){
		?>
		<ul class="books">
		<?php while($row=$result->fetch_assoc()){ ?>
		<li><a href="products.php?CategoryId=<?=$row['CategoryId']?>"><img src="images/<?=$row['Image']?>" alt=""><span><?=$row['Name']?></span></a></li>
		<?php
		}
		?>
		</ul>	
		<?php 
		}
		?>
	</div>
	<h1>搜索</h1>
	<form action="" method="post" name="form1" onsubmit="return Search()">
		书名:<input type="text" name="bookName" >
		<input type="submit" name="btSubmit" value="搜索">
	</form>
	<script>
		function Search(){
			//获取关键字
			var key=form1.bookName.value;
			if(key==""){
				window.alert("请输入书籍名称");
				return false;
			}
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4 && xhr.status==200){
					//查询成功
					document.getElementById("result").innerHTML=xhr.responseText;
				}
			}
			xhr.open("GET","Search_ok.php?bookName="+key);
			xhr.send();
			return false;
			}
	</script>
	<div id='result'></div>
	<script src="js/index.js"></script>
	<? include("Footer.html") ?>
</body>
</html>

	




