<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dream Career 登録</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<script type="text/javascript" src="clock.js"></script>
<div id="clockbox" style="text-align:left;" ></div>
  <div class="header">
  	<h2>ÐC 登録</h2>
  </div>	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>ユーザー名</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>メール</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>パスワード</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>パスワードを確認</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">登録</button>
  	</div>
  	<p>
		もうメンバーですか？ <a href="login.php">サインイン</a>
  	</p>
  </form>
</body>
</html>