<?php require '../php/isLogin.php' ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人信息</title>
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
        $result=mysqli_query($con,"select * from older where older_id=$older_id");
        $row=mysqli_fetch_array($result);
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
                <div class="container">
                    <div class="row personal-info">
                        <div class="col-md-5">
                            <div class="personal-item-head">
                                <h>基本信息:</h>
                            </div>
                            <div class="personal-item">
                                <h>ID：</h>
                                <p><?php echo $row['older_id']; ?></p>
                            </div>
                            <div class="personal-item">
                                <h>姓名：</h>
                                <p><?php echo $row['name']; ?></p>
                            </div>
                            <div class="personal-item">
                                <h>年龄：</h>
                                <p><?php echo $row['age']; ?></p>
                            </div>
                            <div class="personal-item">
                                <h>生日：</h>
                                <p><?php echo $row['birthday']; ?></p>
                            </div>
                            <div class="personal-item">
                                <h>联系方式：</h>
                                <p><?php echo $row['phone']; ?></p>
                            </div>
                            <div class="personal-item">
                                <h>兴趣爱好：</h>
                                <p><?php echo $row['hobit']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-5 personal-right">
                            <div class="personal-item-head">
                                <h>健康信息:</h>
                            </div>
                            <div class="personal-item">
                                <h>身高：</h>
                                <p>152cm</p>
                            </div>
                            <div class="personal-item">
                                <h>体重：</h>
                                <p>48kg</p>
                            </div>
                            <div class="personal-item">
                                <h>过敏反应：</h>
                                <p><?php echo $row['allergy']; ?></p>
                            </div>
                            <div class="personal-item">
                                <h>老年病：</h>
                                <p><?php echo $row['illhistory']; ?></p>
                            </div>
                            <div class="personal-item">
                                <h>重大病史：</h>
                                <p>无</p>
                            </div>
                        </div>
                        <div class="col-md-2 head-photo">
                            <img src="../images/bg.png" alt="image">
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>