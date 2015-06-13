﻿<?php 
	$url=basename($_SERVER['REQUEST_URI']);
	$dir=basename(getcwd());
	if($dir=="discuss3") $path_fix="../";
	else $path_fix="";
?>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/css/amazeui.min.css"?>><!--必须要加上去-->


<style type="text/css">
body {background-image:url(<?php echo $path_fix."template/$OJ_TEMPLATE/image/bg1.png"?>);}
</style>		


</head>
<body>

<header class="am-topbar-inverse">
<p>
<img src=<?php echo $path_fix."template/$OJ_TEMPLATE/image/top-bg.png"?> />
</p>
  <h1 class="am-topbar-brand">
    <a href="index.php">LyunOJ</a>
  </h1>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
	<?php $ACTIVE="class='am-active'"?>
	  <li <?php if ($dir=="discuss3") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>bbs.php"><?php echo $MSG_BBS?></a></li>
	  <li <?php if ($url=="problemset.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>problemset.php"><?php echo $MSG_PROBLEMS?></a></li>
      <li <?php if ($url=="status.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>status.php"><?php echo $MSG_STATUS?></a></li>
      <li <?php if ($url=="ranklist.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>ranklist.php"><?php echo $MSG_RANKLIST?></a></li>
      <li <?php if ($url=="contest.php") echo " $ACTIVE";?>><a href="<?php echo $path_fix?>contest.php"><?php echo $MSG_CONTEST?></a></li>
	  
    </ul>
<?php if (isset($_SESSION['user_id']))
			$title = $_SESSION['user_id'];
		else
			$title = "登录";
?>
    <div class="am-topbar-right">
      <div class="am-dropdown" data-am-dropdown="{boundary: '.am-topbar'}">
        <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm am-dropdown-toggle" data-am-dropdown-toggle><?php echo $title; ?><span class="am-icon-caret-down"></span></button>
		<ul class="am-dropdown-content"><!--add-->
	    <li 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="profile">Login</span><span class="caret"></span></a>
			<script src="<?php echo $path_fix."template/$OJ_TEMPLATE/profile.php?".rand();?>" ></script>
              <!--<li><a href="../navbar-fixed-top/">Fixed top</a></li>-->
	    </li>
        </ul>
      </div>
    </div>
  </div>
</header>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/jquery.min.js"?>></script>
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/amazeui.min.js"?>></script>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/polyfill/rem.min.js"?>></script>
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/polyfill/respond.min.js"?>></script>
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/amazeui.legacy.js"?>></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->
<!--<script src="<?php echo $path_fix."template/$OJ_TEMPLATE/profile.php?".rand();?>" ></script>-->
<body bgcolor="#000000">
<body bgcolor="rgb(0,0,0)">
<body bgcolor="black">
</body>
</html>
