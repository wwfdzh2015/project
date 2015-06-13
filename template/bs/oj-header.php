<html
<head>

<!--  "<?php echo "template/".$OJ_TEMPLATE?>/image/logo.png" -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小组作业</title>
<link href="<?php echo "template/".$OJ_TEMPLATE?>/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo "template/".$OJ_TEMPLATE?>/js/jquery-1-4-2.min.js?>"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="<?php echo "template/".$OJ_TEMPLATE?>/js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="<?php echo "template/".$OJ_TEMPLATE?>/js/showhide.js"></script> 
<script type="text/JavaScript" src="<?php echo "template/".$OJ_TEMPLATE?>/js/jquery.mousewheel.js"></script> 

<link rel="stylesheet" type="text/css" href="<?php echo "template/".$OJ_TEMPLATE?>./css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?php echo "template/".$OJ_TEMPLATE?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo "template/".$OJ_TEMPLATE?>/js/ddsmoothmenu.js">


</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<!-- Load the CloudCarousel JavaScript file -->
<script type="text/JavaScript" src="<?php echo "template/".$OJ_TEMPLATE?>/js/cloud-carousel.1.0.5.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			reflHeight: 40,
			reflGap:2,
			titleBox: $('#da-vinci-title'),
			altBox: $('#da-vinci-alt'),
			buttonLeft: $('#slider-left-but'),
			buttonRight: $('#slider-right-but'),
			yRadius:30,
			xPos: 480,
			yPos: 32,
			speed:0.15,
		}
	);
});
 
</script>

</head>
<body id="home">

<div id="templatemo_header_wrapper">
	<div id="site_title"><h1><a href="http://www.lyun.edu.cn">龙岩学院</a></h1></div>
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="./index.php" class="selected"><FONT face=黑体 color=red size=4>主页</FONT></a></li>
            <li><a href="./problemset.php"><FONT face=黑体 color=red size=4>问题</FONT></a>
                </li>
            <li><a href="./status.php"><FONT face=黑体 color=red size=4>状态</FONT></a>
            </li>
			 <li><a href="./ranklist.php"><FONT face=黑体 color=red size=4>排名</FONT></a></li>
            <li><a href="./contest.php"><FONT face=黑体 color=red size=4>竞赛&作业</FONT></a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=21565696" charset="UTF-8"></script>
</body>
</html>