<?php 
require_once "./lib/mysql.php";
$list = selectAll('article');
//print_r($list);

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>LostRed</title> 
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	</head>
	<body>
		<div class="mid">
			<div class="header">
				<h1 class="title">迷失的红<small>lost.red</small></h1>
				<h2 class="title-info">专注前沿技术</h2>
			</div>
			
			<div class="content">
				<ul class="list">
					<?php foreach($list as $li):?>
					<li class="list-li">
						<a href="content.php?id=<?php echo $li['id'] ?>">
							<h3 class="li-title"><?php echo $li['title'];?></h3>
							<p class="li-content"><?php echo substr($li['content'],0,46)."...";?></p>
							
						</a>
					</li>
					<?php endforeach;?>
				</ul>
			</div>
			
			<div class="footer">
				<p>所有结束都是另一种开始。</p><form action="./control/pin.php" method="post"><input type="text" name="pin" /><button type="submit">go</button></form>
			</div>
		</div>
  	<script type="text/javascript">
  		//setInterval(function(){window.location.href='index.php'}, 1000);
  	</script>
	</body>
</html>