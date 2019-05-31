<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>登録</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script type="text/javascript" src="clock.js"></script>
	<div id="clockbox" style="text-align:left;" ></div>
  <div class="header">
  	<h2>ログイン</h2>
  </div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>ユーザー名</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>パスワード</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">ログイン</button>
  	</div>
  	<p>
		まだメンバーではありません？<a href="register.php">サインアップ</a>
  	</p>
  </form>
</body>
</html>