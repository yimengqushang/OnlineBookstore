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
					<button class="btn btn-danger">加入购物车</button>
				</div>
			</div>
			<div class="bookContent">
				<span>
					<?php
					if(isset($row['firstName'])){
					?>
						<?=$row['firstName']?><a>节选</a>
					<?php
					} 
					?>
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
<script src="js/index.js"></script>
<?php include("Footer.html"); ?>	
</html>