<?php require '../php/isLogin.php' ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>健康档案</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/highcharts.js"></script>
    <script src="../js/highcharts-more.js"></script>
</head>
<body>
    <div class="container-fluid">
        <?php require 'header.php' ?>
        <div class="row">
            <div class="col-md-2 left-navbar">
                <ul>
                    <a href="personal.php"><li>个人信息</li></a>
                    <li id="item2">健康档案</li>
                    <a href="schedule.php"><li>活动信息</li></a>
                    <a href="food.php"><li>饮食信息</li></a>
                    <a href="alert.php"><li>警报记录</li></a>
                </ul>
            </div>
            <div class="col-md-10 main-content">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="health.php">总概况</a>
                    </li>
                    <li>
                        <a href="heart_rate.php">心率</a>
                    </li>
                    <li>
                        <a href="temperature.php">体温</a>
                    </li>
                    <li>
                        <a href="weight.php">体重</a>
                    </li>
                    <li>
                        <a href="blood_pressure.php">血压</a>
                    </li>
                    <li>
                        <a href="blood_glucose.php">血糖</a>
                    </li>
                    <li>
                        <a href="blood_oxygen.php">血氧</a>
                    </li>
                    <li>
                        <a href="sleep.php">睡眠</a>
                    </li>
                </ul>