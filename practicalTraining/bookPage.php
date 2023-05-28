<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="css/bootstrap-4.6.0-dist/css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="css/bootstrap-4.6.0-dist/js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bookPage.css">
</head>
<body>
<?php include("HeaderNav.html");?>
	<?php
		$name = $_GET["name"];
		require("Conn.php");
		$sql= "select * from bookpage where Name = '$name'";
		$result=mysqli_query($db,$sql);
		if($result->num_rows>0){
	?>
	<?php while($row=mysqli_fetch_array($result)){ ?>
		<div class="bookPage">
			<div class="bookImg">
				<img src="images/<?=$row['Image']?>" alt="">
			</div>
			<div class="bookName">
				<p><?=$row['Name']?></p>
			</div>
			<div class="bookJj">
				<p>
					<?=$row['Descn']?>
				</p>
				<div class="gwc">
					<a class="gwc_sum">hh </a>
					<button class="btn btn-danger">加入购物车</button>
				</div>
			</div>
			<div class="bookContent">
				<span>
					<?=$row['firstName']?>
				</span>
				<p>
					<?php
					 if(isset($row['bookContent'])){
					?>
						<?=$row['bookContent']?>
					<?php
					}else{?>
						<h1>敬请期待......</h1>
					<?php }
					?>
					
				</p>
			</div>
		</div>
	<?php
	}
	?>
	<?php 
	}else{
		echo "正在进货中......";
	}
	?>
</body>
<?php include("Footer.html"); ?>	
</html>