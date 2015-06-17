<!DOCTYPE html>

<html lang="en">

 <head>

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="stylesheet" href=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/css/amazeui.min.css"?>>  <!--必须要加上去-->
<?php include("template/$OJ_TEMPLATE/css.php");?>	
    <title><?php echo $OJ_NAME?></title>  
        


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <style>
    @media only screen and (min-width: 641px) {
      .am-offcanvas {
        display: block;
        position: static;
        background: none;
      }

      .am-offcanvas-bar {
        position: static;
        width: auto;
        background: none;
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
      .am-offcanvas-bar:after {
        content: none;
      }

    }

    @media only screen and (max-width: 640px) {
      .am-offcanvas-bar .am-nav>li>a {
        color:#ccc;
        border-radius: 0;
        border-top: 1px solid rgba(0,0,0,.3);
        box-shadow: inset 0 1px 0 rgba(255,255,255,.05)
      }

      .am-offcanvas-bar .am-nav>li>a:hover {
        background: #404040;
        color: #fff
      }

      .am-offcanvas-bar .am-nav>li.am-nav-header {
        color: #777;
        background: #404040;
        box-shadow: inset 0 1px 0 rgba(255,255,255,.05);
        text-shadow: 0 1px 0 rgba(0,0,0,.5);
        border-top: 1px solid rgba(0,0,0,.3);
        font-weight: 400;
        font-size: 75%
      }

      .am-offcanvas-bar .am-nav>li.am-active>a {
        background: #1a1a1a;
        color: #fff;
        box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
      }

      .am-offcanvas-bar .am-nav>li+li {
        margin-top: 0;
      }
    }

    .my-head {
      margin-top: 40px;
      text-align: center;
    }

    .my-button {
      position: fixed;
      top: 0;
      right: 0;
      border-radius: 0;
    }
    .my-sidebar {
      padding-right: 0;
      border-right: 1px solid #eeeeee;
    }

    .my-footer {
      border-top: 1px solid #eeeeee;
      padding: 10px 0;
      margin-top: 10px;
      text-align: center;
    }
  </style>
	
  </head>


  <body>

    <div class="container">
    <?php include("template/$OJ_TEMPLATE/nav.php");?>

	
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <p>
<center>
          <div class="am-align-left">
            <img src=<?php echo "template/$OJ_TEMPLATE/image/acm.jpg" ?> alt="" width="240">
          </div>
          <p><small>
		  龙岩学院ACM在线测评系统于2015年4月份上线，最初版本为华中科技大学的开源oj。2012级计算机科学与技术专业吴伟锋、宋伟宏、刘游龙等对其进行二次开发作为大三下学期web课程设计作品，通过收集老师的需求而重新设计开发，形成了一个符合信息工程学院计算机程序设计基础教学、ACM竞赛、算法训练的有龙岩学院特色的oj平台，并将代码托管在github：<a href="https://github.com/wwfdzh2015/project.git">https://github.com/wwfdzh2015/project.git</a>，有志愿或兴趣的同学可继续根据需求进行完善，并把新版本更新在github，从而使龙岩学院oj平台能够与时俱进。本平台目前隶属于岩学院计算机学会，由计算机学会进行管理，有需要拥有本平台的某权限的老师或同学可联系计算机学会，加入计算机学会官方QQ群：386157515,咨询管理员。
		  </small></p>
</center>
	
      </div>


    </div> <!-- /container -->
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/polyfill/rem.min.js"?>></script>
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/polyfill/respond.min.js"?>></script>
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/amazeui.legacy.js"?>></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/jquery.min.js"?>></script>
<script src=<?php echo $path_fix."template/$OJ_TEMPLATE/assets/js/amazeui.min.js"?>></script>
<!--<![endif]-->

  

  </body>
</html>
