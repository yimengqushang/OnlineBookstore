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
	<link rel="stylesheet" href="css/products.css">
</head>
<?php include("HeaderNav.html");?>
<body>
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
	$CategoryId=$_GET["CategoryId"];
	session_start();
	$id = $_SESSION['CategoryId']=$CategoryId;
	if(isset($CategoryId)){
		//获取页码并检查是否非法
		if(isset($_GET['page']) && (int)$_GET['page']>0) 
		      $page=$_GET['page'];
		else	
		      $page=1; //如果获取不到页码则显示第1页
		//设置每页显示记录数
		$pageSize=4;
		require("Conn.php");
		$sql="select * from product where CategoryId=$CategoryId";
		//创建结果集
		$result=mysqli_query($db,$sql);
		//记录总数
		$recordCount=mysqli_num_rows($result);
		//计算总共有多少页
		$pageCount=ceil($recordCount/$pageSize);
		//将某一页的记录放入结果集
		$result=mysqli_query($db, "Select * from product where CategoryId=$CategoryId limit ". ($page-1)*$pageSize.",".$pageSize); 
	}
	?>
	<?php
	while($row=mysqli_fetch_array($result)){
	?>
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
	<?php
	}
	?>
	<tr>
		<td colspan="9">
	    共有<?=$recordCount?>条记录 
		第<?=$page?>/<?=$pageCount?>页
		<?php
		// 显示分页链接的代码
		if($page == 1) 			//如果是第1页，则不显示第1页的链接
			{
				echo  "首页  上一页 ";
			}	
		else 
			{
				echo "<a href='?CategoryId=".$id."&page=1'>首页</a>
				<a href='?CategoryId=".$id."&page=".($page-1)."'>上一页</a>";	
			}
		   
				  
		if($page == $pageCount)   		 // 设置“下一页”链接
			{
				echo  " 下一页  末页 ";
			}
		else 
			{
				echo "<a href='?CategoryId=".$id."&page=".($page+1)."'> 下一页</a>
			    <a href='?CategoryId=".$id."&page=$pageCount'>末页</a>";	
			}
		    
		?>
		</td>
	</tr>
</body>
<script src="js/index.js"></script>
<?php include("Footer.html"); ?>	
</html>