<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="stylesheet" href=<?php echo "./template/$OJ_TEMPLATE/assets/css/amazeui.min.css"?>>
  <?php include("template/$OJ_TEMPLATE/css.php");?>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="container">
    <?php include("/template/$OJ_TEMPLATE/nav.php");?>	    
      <!-- Main component for a primary marketing message or call to action -->
	 <div class="jumbotron"><!--超大屏幕-->
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <form action="login.php" method="post" role="form" class="am-form">
      <label for="userid"><?php echo $MSG_USER_ID?>:</label>
      <input placeholder="<?php echo $MSG_USER_ID?>" type="text" name="user_id"><!--提示-->
      <br>
      <label for="password"><?php echo $MSG_PASSWORD?>":</label>
      <input placeholder="<?php echo $MSG_PASSWORD?>" type="password" name="password">
      <br>

<?php if($OJ_VCODE){?>

	<label for="vcode"><?php echo $MSG_VCODE?>:</label>
	<div class="am-btn-group-justify">	  
	<input name="vcode" type="text">
	<div class="am-btn-group-justify"><img alt="click to change" src="vcode.php" onclick="this.src='vcode.php#'+Math.random()" height="40px">*</div>
	</div>
</div>
<?php }?>
      <br />
      <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <input type="submit"value="登录" class="am-btn am-btn-primary am-round">
		
	<div class="col-sm-4">
	<a class="am-btn am-btn-default am-round am-btn-sm am-fr" href="lostpassword.php">忘记密码 ^_^? </a>
	</div>
      </div>
    </form>
    <hr>
    <p>This ACM/ICPC OnlineJudge is a GPL product from hustoj</p>

  </div>
</div>
</div>
</div>
<?php include("template/$OJ_TEMPLATE/js.php");?>
</body>
</html>