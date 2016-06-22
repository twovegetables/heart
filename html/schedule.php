<?php require '../php/isLogin.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>活动记录</title>
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
                    <li id="item1">个人信息</li>
                    <a href="health.php"><li>健康档案</li></a>
                    <a href="schedule.php"><li>活动信息</li></a>
                    <a href="food.php"><li>饮食信息</li></a>
                    <a href="alert.php"><li>警报记录</li></a>
                </ul>
            </div>
            <div class="col-md-10 main-content">
                <div class="schedule">
                    <ul class="timeline">
                        <li>
                            <div class="time">2016-06-15</div>
                            <div class="version">10:00</div>
                            <div class="number">1</div>
                            <div class="content">
                                <pre>item1</pre>
                            </div>
                        </li>
                        <li>
                            <div class="time">2016-06-15</div>
                            <div class="version">10:00</div>
                            <div class="number">2</div>
                            <div class="content">
                                <pre>item1</pre>
                            </div>
                        </li>
                        <li>
                            <div class="time">2016-06-15</div>
                            <div class="version">10:00</div>
                            <div class="number">3</div>
                            <div class="content">
                                <pre>item1</pre>
                            </div>
                        </li>
                        <li>
                            <div class="time">2016-06-15</div>
                            <div class="version">10:00</div>
                            <div class="number">4</div>
                            <div class="content">
                                <pre>item1</pre>
                            </div>
                        </li>
                        <li>
                            <div class="time">2016-06-15</div>
                            <div class="version">10:00</div>
                            <div class="number">5</div>
                            <div class="content">
                                <pre>item1</pre>
                            </div>
                        </li>
                        <li>
                            <div class="time">2016-06-15</div>
                            <div class="version">10:00</div>
                            <div class="number">6</div>
                            <div class="content">
                                <pre>item1</pre>
                            </div>
                        </li>
                        <li>
                            <div class="time">2016-06-15</div>
                            <div class="version">10:00</div>
                            <div class="number">7</div>
                            <div class="content">
                                <pre>item1</pre>
                            </div>
                        </li>
                    </ul>
                    <div class="row schedule-page">
                        <ul class="pager">
                            <li><a href="#">上一页</a></li>
                            <li><a href="#">下一页</a></li>
                        </ul>
                    </div>
                    <div class="row schedule-search">
                        <div class="col-md-2">
                            <h>日期选择：</h>
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-default">查询</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>