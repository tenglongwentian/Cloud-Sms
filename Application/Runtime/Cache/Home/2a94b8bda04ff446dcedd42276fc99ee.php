<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>短信云轰炸</title>
 	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
 	<style>
	#center{
		width: 400px;
		margin: 0 auto;
	}
	</style>
 </head>
 <body>
	<div id="center">
		<h2 class="form-signin-heading"><b>提交</b><small>提交要托管的手机...</small></h2>
		<form class="form-sign" method="post" action="./checkadd" role="form">
			<input name="number" type="text" class="form-control" placeholder="手机号" autofocus>
			<input name="social" type="hidden"><br/>
			<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 </body>
 </html>