<?php require '../php/db.php';
$con=dboperation::getConnect();
?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze后台管理系统模板HTML 表格页面 - JS代码网</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>TwoVegetables</strong> <small>两颗菜</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="http://mail.126.com/js6/main.jsp?sid=IAfYCTpSPsyLhgEosqSStUZZGGyMFYvd&df=mail126_letter#module=welcome.WelcomeModule%7C%7B%7D"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表格</strong> / <small>Table</small></div>
    </div>

    <div class="am-g">
      <div class="am-u-md-6 am-cf">
        <div class="am-fl am-cf">
          <div class="am-btn-toolbar am-fl">
            <div class="am-btn-group am-btn-group-xs">
            <form action="admin-table.php" method="get">
              <button type="button" class="am-btn am-btn-default"><a href="admin-older.php"><span class="am-icon-plus"></span>新增</a></button>
              <!-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button> -->
            <button type="submit" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 排序</button>
           <div class="am-form-group am-margin-left am-fl">
              <select name="order">
                <option value="ID">ID</option>
                <option value="name">姓名</option>
                <option value="gender">性别</option>
                <option value="birthday">生日</option>
                <option value="health_eval">健康分数</option>
              </select>
            </div>
            </form>
            </div>

            
          </div>
        </div>
      </div>
      <div class="am-u-md-3 am-cf">
        <div class="am-fr">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
                <span class="am-input-group-btn">
                  <button class="am-btn am-btn-default" type="button">搜索</button>
                </span>
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th><th class="table-id">ID</th><th class="table-title">姓名</th><th class="table-type">性别</th><th class="table-author">生日</th><th class="table-date">联系方式</th><th class="table-set">健康分数</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>

          <?php 
          if(isset($_GET['order'])){
            $order=$_GET['order'];
          }
          else
            $order="ID";
          if($order=="ID"){
            $result=mysqli_query($con,"select * from older order by older_id");
          }else if($order=="name"){
            $result=mysqli_query($con,"select * from older order by name");
          }else if($order=="gender"){
            $result=mysqli_query($con,"select * from older order by gender");
          }else if($order=="birthday"){
            $result=mysqli_query($con,"select * from older order by birthday");
          }else if($order=="health_eval"){
            $result=mysqli_query($con,"select * from older order by health_eval");
          }
          while($row=mysqli_fetch_array($result)){

           ?>
            <tr>
              <td><input type="checkbox" /></td>
              <td><?php echo $row['older_id']; ?></td>
              <td><a href="#"><?php echo $row['name']; ?></a></td>
              <td><?php echo $row['gender']; ?></td>
              <td><?php echo $row['birthday']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['health_eval']; ?></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                 <button type="button" class="am-btn am-btn-default"><a href="admin-update.php?older_id=<?php echo $row['older_id'];?>"><span class="am-icon-pencil-square-o"></span>编辑</a></button>
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger"><a href="../php/deleteuser.php?older_id=<?php echo $row['older_id'];?>"><span class="am-icon-trash-o"></span> 删除</a></button>
                  </div>
                </div>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
          <div class="am-cf">
  共 <?php $result=mysqli_query($con,"select count(*) from older"); $row=mysqli_fetch_array($result); echo $row[0]; ?>条记录
  <div class="am-fr">
    <ul class="am-pagination">
      <li class="am-disabled"><a href="#">«</a></li>
      <li class="am-active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>
</div>
          <hr />
          <p>注：.....</p>
        </form>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>

<footer>
  <hr>
  <p class="am-padding-left">© 2016 TwoVegetables.</p>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="assets/js/app.js"></script>
</body>
</html>
