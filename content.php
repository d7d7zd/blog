<?php
require_once "./lib/mysql.php"; 
$id = $_GET['id'];
$li = select('article', "id='{$id}'");

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
				<a href="index.php"><h1 class="title">迷失的红<small>lost.red</small></h1></a>
				<h2 class="title-info">专注前沿技术</h2>
			</div>
			
			<div class="c-content">
				<h3 class="c-title"><?php echo $li['title']?></h3>
			<?php 
				
//				$names = preg_split('/\r\n/',$li[);
//				foreach($names as $name){
// 					 echo $name;
//				}
				$str = $li['content'];
				$strlist = explode("\n", $str);
				foreach($strlist as $strtmp){
					echo "<p class='cc-content'>{$strtmp}</p>";
				}
			
				?>
			</div>
			
			<div class="footer">
				<p>所有结束都是另一种开始。</p>
			</div>
		</div>
  	<script type="text/javascript">
  		//setInterval(function(){window.location.href='content.php'}, 1000);
  	</script>
	</body>
</html>