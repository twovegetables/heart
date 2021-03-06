<?php 
require '../php/db.php';
$con=dboperation::getConnect();
$older_id=$_GET['older_id'];
$result=mysqli_query($con,"select * from older where older_id=$older_id");
$row=mysqli_fetch_array($result);
?>

<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin user Examples</title>
  <meta name="description" content="这是一个 user 页面">
  <meta name="keywords" content="user">
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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">个人资料</strong> / <small>Personal information</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
        <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="am-g">
              <div class="am-u-md-4">
                <img class="am-img-circle am-img-thumbnail" src="#" alt="image"/>
              </div>
              <div class="am-u-md-8">
                <p>你可以本地上传头像。 </p>
                <form class="am-form">
                  <div class="am-form-group">
                    <input type="file" id="user-pic">
                    <p class="am-form-help">请选择要上传的文件...</p>
                    <button type="button" class="am-btn am-btn-primary am-btn-xs">保存</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form class="am-form am-form-horizontal" action="../php/update_older.php" method="POST">
        <input type="hidden" name="older_id" value="<?php echo $_GET['older_id'];?>">
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
            <div class="am-u-sm-9">
              <input type="text" name="user-name" value="<?php echo $row['name'];?>">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-email" class="am-u-sm-3 am-form-label">生日</label>
            <div class="am-u-sm-9">
              <input type="date" name="user-birthday" value="<?php echo $row['birthday'];?>">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-phone" class="am-u-sm-3 am-form-label">联系方式 / Contact</label>
            <div class="am-u-sm-9">
              <input type="text" name="user-phone" value="<?php echo $row['phone'];?>">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-hobby" class="am-u-sm-3 am-form-label">兴趣爱好 / Hobby</label>
            <div class="am-u-sm-9">
              <input type="text" name="user-QQ" value="<?php echo $row['hobit'];?>">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-height" class="am-u-sm-3 am-form-label">身高 / Height</label>
            <div class="am-u-sm-9">
              <input type="text" name="user-height" value="身高 / Height / cm">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-weight" class="am-u-sm-3 am-form-label">体重 / Weight</label>
            <div class="am-u-sm-9">
              <input type="text" name="user-weight" value="体重 / Weight / kg">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-allergy" class="am-u-sm-3 am-form-label">过敏 / Allergy</label>
            <div class="am-u-sm-9">
              <input type="text" name="user-allergy" value="<?php echo $row['allergy'];?>">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-illness" class="am-u-sm-3 am-form-label">老年病 / Geriatric</label>
            <div class="am-u-sm-9">
              <input type="text" name="user-geriatric" value="<?php echo $row['illhistory'];?>">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-disease" class="am-u-sm-3 am-form-label">重大病史 / Disease</label>
            <div class="am-u-sm-9">
              <input type="text" name="user-disease" value="重大病史 / Disease / 以-分隔开">
            </div>
          </div>

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="submit" class="am-btn am-btn-primary">提交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- content end -->

</div>

<footer>
  <hr>
  <p class="am-padding-left">© 2016 TwoVegetables</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="assets/js/app.js"></script>
</body>
</html>
