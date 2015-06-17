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
            <img src=<?php echo "template/$OJ_TEMPLATE/image/LCA.png" ?> alt="" width="240">
          </div>
          <p><small>
		  龙岩学院计算机学会是由信息工程学院计算机科学与技术专业和软件工程专业师生牵头组成的面向全校
师生的专业社团组织，在信息工程学院团委和计算机系指导下开展工作，旨在普及与提高同学们的计算机水平，组织师生参加各级
各类计算机专业竞赛以及接手各类实际社会项目，提高计算机技术应用能力、丰富师生校园文化生活。
计算机学会在成立的不到一年中，学会成员取得了优异的成绩，其中在学科竞赛中获得过国家级一等奖2次，国家级二等奖5次，国家级三等奖3次，省级一等奖和创新奖各1次，省级二等奖1次，市级三等奖1次和省级优秀奖、校级奖项若干次。计算机学会首任会长吴伟锋入围第十届中国大学生年度人物候选人，获得2015年首届龙岩学院“校长奖励基金”个人特别奖，计算机学会副会长项兴兴为“龙岩学院校十佳歌手”和“最佳辩手”，在龙岩学院首届ACM程序设计大赛中计算机学会代表、计算机学会副会长刘游龙获得专业组B组第一名。
2015年6月5日由计算机学会发起并组织承办，信息工程学院、教务处共同主办并拨款专项资金15000元的龙岩学院首届ACM程序设计大赛圆满落幕。
		  </small></p>
</center>
	
      </div>


    </div> <!-- /container -->
    
    <div id=foot>
	<?php require_once("oj-footer.php");?>
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
