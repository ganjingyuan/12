<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>留言板</title>
<link href="./css/bootstrap.css" rel="stylesheet">
<style>
.container{margin-top:20px;}
</style>
</head>

<body>
<?php
//定义变量并设置为空值
$titleErr=$contentErr="";
$title=$content="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if (empty($_POST["title"])){
		$title="";
	}else{
			$title=test_input($_POST["title"]);
		}
if(empty($_POST["content"])){
	$content="";
}else{
	$content=test_input($_POST["content"]);
	 }
}
?>
	<div class="container">
		<form class="bs-docs-example form-horizontal" method="POST" action="<?php echo htmlspecilalchars($_SERVER["PHP_SELF"]);?>">
		<div class="control-group">
				<label class="control-label" for="title">标题</label>
				<div class="controls">
					<input type="text" id="title" name="title" placeholder="请输入标题">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="content">内容</label>
				<div class="controls">
					<textarea rows="3" id="content" name="content"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">提交</button>
				</div>
			</div>
	    </form>
	</div>
	<?php
	echo $title;
	echo "<br>";
	echo $content;
	?>
</body>
</html>
