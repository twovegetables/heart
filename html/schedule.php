<?php 
require '../php/isLogin.php';
if(!isset($_GET['page'])){
        $page=0;
}else{
    $page=$_GET['page'];
}
?>
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
    $query="select * from action where older_id=$older_id order by time asc limit ".($page*6).",6";
    echo $query;
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
                        $i=$page*6+1;
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
                            <li><a <?php if($page!=0)echo "href=\"schedule.php?page=".($page-1)."\"";?>>上一页</a></li>;
                            <li><a <?php echo "href=\"schedule.php?page=".($page+1)."\"";?>>下一页</a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>