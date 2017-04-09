<?php 
session_start();
 if(!$_SESSION['pin'] == '606'){
 	header('location:index.php');
 }	
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
			
			<div class="c-content add">
				<form action="">
					<div class="form-group"><label for="title">题标</label><input type="text" name="title"/></div>
					<div class="form-group"><label for="content">内容</label><textarea name="content" rows="10" cols="100%"></textarea></div>
					<button type="submit">提交</button>
				</form>	
			</div>
			
			<div class="footer">
				<p>所有结束都是另一种开始。</p>
			</div>
		</div>
  	<script type="text/javascript">
  	//	setInterval(function(){window.location.href='add.php'}, 1000);
  	</script>
	</body>
</html>