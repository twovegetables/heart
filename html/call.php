<?php require '../php/isLogin.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>呼叫记录</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="../css/style.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <?php require 'header.php' ?>
        <div class="row">
            <div class="col-md-2 left-navbar">
                <ul>
                    <a href="personal.php"><li>个人信息</li></a>
                    <a href="health.php"><li>健康档案</li></a>
                    <a href="schedule.php"><li>活动信息</li></a>
                    <a href="food.php"><li>饮食信息</li></a>
                    <a href="alert.php"><li>警报记录</li></a>
                    <li id="item6">呼叫记录</li>
                </ul>
            </div>
            <div class="col-md-10 main-content">
            </div>
        </div>
    </div>
</body>
</html>