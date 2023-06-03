<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="css/bootstrap-4.6.0-dist/css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="css/bootstrap-4.6.0-dist/js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/products.css">
</head>
<body>
	<?
	//链接数据库
	require_once 'conn.php';
	if(isset($_GET['bookName'])){
		$bookName=$_GET['bookName'];
	}
	$result=$db->query("select * from product where `Name` like '%$bookName%'");//模糊查询

	if($result->num_rows < 1)
	exit('没有找到图书');

	?>
<? while($row=$result->fetch_assoc()){ ?>
	<div class="media">
		<div class="media_zt">
			<div class="img">
			<a href="bookPage.php?name=<?=$row['Name']?>"><img src="images/<?=$row['Image']?>" alt=""></a>
			</div>
			<div class="jianJie">
				<p class="p_sm">《<?=$row['Name']?>》</p>
				<p class="p_jj"><?=$row['Descn']?></p>
				<a>当前定价:</a><span>￥<b><?=$row['ListPrice']?></b></span>
			</div>
			<div class="gwc">
				<button class="btn btn-danger">加入购物车</button>
			</div>
		</div>
	</div>
	<?}?>
<script src="js/index.js"></script>
</body>
</html>



	

