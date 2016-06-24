<?php 
require ('../php/isLogin.php');
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
                    <?php 
                    $query="select * from alert where older_id=$older_id order by time desc limit ".($page*4).",4";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
                    {?>
                    

                        <li>
                            <div class="img">
                                 <img src="<?php echo $row['picture'];?>"  width="246" height="130" alt="养老解决方案 智能照护系统 跌倒报警">
                            </div>
                            <h3><?php echo $row['type'];?></h3>
                            <p><?php echo $row['time'];?>&nbsp>>&nbsp<?php echo $row['location'];?></p>
                        </li>
                        <?php 
                        $row=mysqli_fetch_array($result);
                        if(!$row)break;
                        ?>
                        <li class="even">
                            <div class="img">
                                <img src="<?php echo $row['picture'];?>" width="246" height="130" alt="养老解决方案 智能照护系统 走失报警">
                            </div>
                            <h3><?php echo $row['type'];?></h3>
                            <p><?php echo $row['time'];?>&nbsp>>&nbsp<?php echo $row['location'];?></p>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                 <div class="row alerm-page">
                        <ul class="pager">
                            <li><a <?php if($page!=0)echo "href=\"alert.php?page=".($page-1)."\"";?>>上一页</a></li>;
                            <li><a <?php echo "href=\"alert.php?page=".($page+1)."\"";?>>下一页</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>