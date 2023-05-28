<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="css/bootstrap-4.6.0-dist/css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="css/bootstrap-4.6.0-dist/js/bootstrap.js"></script>
</head>
<body>
<?php include("HeaderNav.html");?>
	<div class="zt">		
		<div class="content">
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
			<div class="lunBo">
				<div id="myCarousel" style="width:100%;" class="carousel slide carousel-fade" data-ride="carousel" style="width:400px;margin:20px auto;">
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
					  <li data-target="#myCarousel" data-slide-to="3"></li>
				    </ol>
				    <div class="carousel-inner">
				      <div class="carousel-item active" data-interval="1000">
				        <img src="images/5.jpg" class="d-block w-100" alt="...">
				      </div>
				      <div class="carousel-item" data-interval="2000">
				        <img src="images/3.webp" class="d-block w-100" alt="...">
				      </div>
				      <div class="carousel-item" data-interval="3000">
				        <img src="images/1.webp" class="d-block w-100" alt="...">
				      </div>
					  <div class="carousel-item" data-interval="4000">
					    <img src="images/4.jpg" class="d-block w-100" alt="...">
					  </div>
				    </div>
				    <a class="carousel-control-prev left" href="#myCarousel" role="button" data-slide="prev">
				      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next right" href="#myCarousel" role="button" data-slide="next">
				      <span class="carousel-control-next-icon" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
			</div>
			
			<!-- 楼层效果 -->
			<div class="elevator">
					<li data-n="rm">热门<br />书籍</li>
					<li data-n="xh">猜你<br />喜欢</li>
					<li data-n="db">返回<br />顶部</li>
			</div>
			
			<div class="tuijian_logo">
				<img src="images/tuijian_logo.png" alt="">
			</div>
			<div class="tuiJian">
				<div class="tuiJian_lb">
					<div id="demo" class="carousel slide" data-ride="carousel">
					 
					  <!-- 指示符 -->
					  <div class="zs">
						  <ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						  </ul>
					 </div>
					  <!-- 轮播图片(热门推荐) -->
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <a href="bookPage.php?name=经济学入门"><img decoding="async" src="images/jjxrm.jpg"></a>
						  <a href="bookPage.php?name=挪威的森林"><img decoding="async" src="images/nwsl.jpg"></a>
						  <a href="bookPage.php?name=悲惨世界"><img decoding="async" src="images/bcsj.jpg"></a>
						  <a href="bookPage.php?name=围城"><img decoding="async" src="images/wc.jpg"></a>
						</div>
						<div class="carousel-item">
						  <a href="bookPage.php?name=老人与海"><img decoding="async" src="images/lryh.jpg"></a>
						  <a href="bookPage.php?name=百年孤独"><img decoding="async" src="images/bngd.jpg"></a>
						  <a href="bookPage.php?name=发现孩子"><img decoding="async" src="images/fxhz.jpg"></a>
						  <a href="bookPage.php?name=轻声说再见"><img decoding="async" src="images/qsszj.jpg"></a>
						</div>
						<div class="carousel-item">
						  <a href="bookPage.php?name=千只鹤"><img decoding="async" src="images/qzh.jpg"></a>
						  <a href="bookPage.php?name=寺山修司少女诗集"><img decoding="async" src="images/ssxssnsj.jpg"></a>
						  <a href="bookPage.php?name=万物有时"><img decoding="async" src="images/wwys.jpg"></a>
						  <a href="bookPage.php?name=自在的旅行"><img decoding="async" src="images/zzdlx.jpg"></a>
						</div>
					  </div>
					 
					  <!-- 左右切换按钮 -->
					  <div class="pn">
						  <a class="carousel-control-prev" href="#demo" data-slide="prev" id="prev">
							<span class="carousel-control-prev-icon"></span>
						  </a>
						  <a class="carousel-control-next" href="#demo" data-slide="next" id="next">
							<span class="carousel-control-next-icon"></span>
						  </a>
					 </div>
					</div>
				</div>
			</div>

			<div class="xihuan_logo">
				<img src="images/xihuan_logo.png" alt="">
			</div>
			<div class="xihuan" id="img">
				<?php
				require("Conn.php");
				$result = $db->query("select * from product where CategoryId=4");
				if($result->num_rows>0){
				?>
				<ul class="xihuan_book">
				<?php while($row=$result->fetch_assoc()){ ?>
					<li><a href="bookPage.php"><img src="images/<?=$row['Image']?>" alt=""><span><?=$row['Name']?></span></a></li>
				<?php
				}
				?>
				</ul>	
				<?php 
				}
				?>
			</div>
		</div>
	</div>
	<script src="js/index.js"></script>
<?php include("Footer.html"); ?>	
</body>
</html>


