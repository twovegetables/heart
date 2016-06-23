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
    <?php 
    require 'header.php';
    $older_id='123';
    $query="select * from action where older_id='$older_id' order by time asc";
    $result=mysqli_query($con,$query);
     ?>
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
                        <?php 
                        $i=0;
                        while($row=mysqli_fetch_array($result)){ 
                            $time=$row['time'];
                            ?>
                        <li>
                            <div class="time"><?php echo $time; ?></div>
                            <div class="number"><?php echo ++$i; ?></div>
                            <div class="content">
                                <pre><?php echo $row['action']; ?></pre>
                            </div>
                        </li>
                        <?php } ?>

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