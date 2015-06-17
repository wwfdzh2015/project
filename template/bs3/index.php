<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $OJ_NAME?></title>  
    <?php include("template/$OJ_TEMPLATE/css.php");?>	    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    <?php include("template/$OJ_TEMPLATE/nav.php");?>

	
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <p>
<center>


<div class="am-slider am-slider-default am-slider-carousel"
     data-am-flexslider="{itemWidth: 200, itemMargin: 5}">
  <ul class="am-slides">
	<li><img src="image/1.jpg"</li>
	<li><img src="image/2.jpg"</li>
	<li><img src="image/3.jpg"</li>
	<li><img src="image/4.jpg"</li>
	<li><img src="image/5.jpg"</li>
	<li><img src="image/6.jpg"</li>
	<li><img src="image/7.jpg"</li>
	<li><img src="image/9.jpg"</li>
	<li><img src="image/10.jpg"</li>
	<li><img src="image/11.jpg"</li>
	<li><img src="image/12.jpg"</li>
	<li><img src="image/13.jpg"</li>
	<li><img src="image/14.jpg"</li>
	<li><img src="image/15.jpg"</li>

  </ul>
  <div class='center'>
  <?php
  	echo "龙岩学院第一届ACM程序设计大赛"
  ?>
  </div>
</div>

<?//php echo "template/$OJ_TEMPLATE/image/06.jpg" ?>
	<div class='left'>
		<img src=<?php echo "template/$OJ_TEMPLATE/image/acm.jpg" ?> /
	</div>
</center>
        </p>
	<?php echo $view_news;?>

	
	<?php if(file_exists("setlang.php")){?>
	<a href=setlang.php?lang=cn>中文</a>&nbsp;
	<a href=setlang.php?lang=en>English</a>&nbsp;
	<?php }?>	
	
      </div>


    </div> <!-- /container -->
<div id=foot>
	<?php require_once("oj-footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include("template/$OJ_TEMPLATE/js.php");?>	    
 <script language="javascript" type="text/javascript" src="include/jquery.flot.js"></script>

  </body>
</html>
