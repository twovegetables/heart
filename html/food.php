<?php require '../php/isLogin.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>饮食记录</title>
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
                   <li id="item4">饮食信息</li>
                    <a href="alert.php"><li>警报记录</li></a>
                </ul>
            </div>
            <div class="col-md-10 main-content">
                <div class="row food-content">
                    <div class="col-md-8 food-table">
                        <h>饮食营养情况</h>
                        <table class="table table-bordered table-striped">
                            <caption>2016年6月17日饮食情况</caption>
                            <thead>
                                <tr>
                                    <td>菜名</td>
                                    <td>原料</td>
                                    <td>数量</td>
                                    <td>糖类</td>
                                    <td>蛋白质</td>
                                    <td>脂肪</td>
                                    <td>微量元素</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>番茄炒蛋</td>
                                    <td>番茄,鸡蛋</td>
                                    <td>500g,200g</td>
                                    <td>400g</td>
                                    <td>200g</td>
                                    <td>50g</td>
                                    <td>钙</td>
                                </tr>
                                 <tr>
                                    <td>番茄炒蛋</td>
                                    <td>番茄,鸡蛋</td>
                                    <td>500g,200g</td>
                                    <td>400g</td>
                                    <td>200g</td>
                                    <td>50g</td>
                                    <td>钙</td>
                                </tr>
                                 <tr>
                                    <td>番茄炒蛋</td>
                                    <td>番茄,鸡蛋</td>
                                    <td>500g,200g</td>
                                    <td>400g</td>
                                    <td>200g</td>
                                    <td>50g</td>
                                    <td>钙</td>
                                </tr>
                                 <tr>
                                    <td>番茄炒蛋</td>
                                    <td>番茄,鸡蛋</td>
                                    <td>500g,200g</td>
                                    <td>400g</td>
                                    <td>200g</td>
                                    <td>50g</td>
                                    <td>钙</td>
                                </tr>
                                 <tr>
                                    <td>番茄炒蛋</td>
                                    <td>番茄,鸡蛋</td>
                                    <td>500g,200g</td>
                                    <td>400g</td>
                                    <td>200g</td>
                                    <td>50g</td>
                                    <td>钙</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <div class="food-search">
                            <label>查询日期:</label>
                            <input type="date" name="end-time" class="form-control">
                            <button type="button" class="btn btn-default">查询</button>
                        </div>
                        <div class="food-total">
                            <h>营养总计</h>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td>糖类</td>
                                        <td>蛋白质</td>
                                        <td>脂肪</td>
                                        <td>微量元素</td>
                                    </tr>
                                    <tr>
                                        <td>100g</td>
                                        <td>200g</td>
                                        <td>300g</td>
                                        <td>400g</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>