<?php require ('../php/isLogin.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>警报记录</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="../css/style.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <?php require('header.php');?>
        <div class="row">
            <div class="col-md-2 left-navbar">
                <ul>
                    <a href="personal.php"><li>个人信息</li></a>
                    <a href="health.php"><li>健康档案</li></a>
                    <a href="schedule.php"><li>活动信息</li></a>
                    <a href="food.php"><li>饮食信息</li></a>
                    <li id="item5">警报记录</li>
                </ul>
            </div>
            <div class="col-md-10 main-content">
                <div class=" container alarm_detail">
                    <ul>
                        <li>
                            <div class="img">
                                 <img src="../images/alarm1.png"  width="246" height="130" alt="养老解决方案 智能照护系统 跌倒报警">
                            </div>
                            <h3>跌倒报警</h3>
                            <p>2012.06.17&nbsp15:25&nbsp>>&nbsp餐厅</p>
                        </li>
                        <li class="even">
                            <div class="img">
                                <img src="../images/alarm2.png"  width="246" height="130" alt="养老解决方案 智能照护系统 走失报警">
                            </div>
                            <h3>走失报警</h3>
                            <p>2012.06.17&nbsp15:25&nbsp>>&nbsp美兰湖</p>
                        </li>
                        <li>
                            <div class="img">
                                <img src="../images/alarm3.png" width="246" height="130" alt="养老解决方案 智能照护系统 生命体征监测／报警">
                            </div>
                            <h3>生命体征监测报警</h3>
                            <p>2012.06.17&nbsp15:25&nbsp>>&nbsp心率</p>
                        </li>
                        <li class="even">
                            <div class="img">
                                <img src="../images/alarm4.png" width="246" height="130" alt="养老解决方案 智能照护系统 夜间离床未归报警">
                            </div>
                            <h3>夜间离床未归报警</h3>
                            <p>2012.06.17&nbsp15:25&nbsp>>&nbsp餐厅</p>
                        </li>
                    </ul>
                </div>
                 <div class="row alerm-page">
                        <ul class="pager">
                            <li><a href="#">上一页</a></li>
                            <li><a href="#">下一页</a></li>
                        </ul>
                    </div>
                    <div class="row alert-search">
                        <div class="col-md-2">  
                        </div>
                        <div class="col-md-2">
                            <h>日期选择：</h>
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-default">查询</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>