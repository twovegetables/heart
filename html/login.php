<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="../css/style.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-8 login-left">
    			<form class="login-form" action="../php/login.php" method="post">
    			    <label>用户名：</label>
    			    <input type="text" name="username" id="username" class="form-control" placeholder="请输入微信号/手机号...">
    			    <label>密码：</label>
    			    <input type="text" name="password" id="userpassword" class="form-control" placeholder="请输入密码...">
    			    <button type="submit" class="btn btn-default" id="login-button">登陆</button>
    			</form>
    		</div>
    		<div class="col-md-4 login-right">
    		    <img src="../images/login.png" alt="image" id="login-image">
    		</div>
    	</div>
    </div>
</body>
</html>