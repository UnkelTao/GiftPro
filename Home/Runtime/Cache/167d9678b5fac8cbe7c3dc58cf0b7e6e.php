<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/Css/logoin.css">
<script type="text/javascript" src="__PUBLIC__/Home/Js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/common.js"></script>
</head>

<body>
<div id="container">
  <div id="header">
  <!-- /* 登陆框*/-->

        <div class="login-plate">
        	<div class="login-ornament">
        	</div>
        	 <form name="form1" id="form1" action="__URL__/to_login" method="post">
        		<div  class="login">
          		<div class="username">
          			<input name="userName" type="text" class="username"  />
			<span>输入用户名</span>
          		</div>
          		<div class="password">
          			<input name="password" type="password" class="username" />
		  	<span>密码</span>
          		</div>
          		<div class="submi"><a href="#" >
          			<input id="login"  type="button"  value="登　　陆"   onclick="tologin('form1');"/></a>
          		</div>
          		<!--忘记密码和注册-->
         		<div class="login-plate-bottom"> 
         			<span class="forget"><a href="#">忘记密码？</a></span>
         			<span class="register"><a href="register">注册</a></span>         </div> 
        		</div>
    		</div>
    	</form>
    <div class="welcom">
    <div class="welcom-tip tip0"><span>欢</span></div>
	    <div class="welcom-tip tip1"><span>迎</span></div>
		    <div class="welcom-tip tip2"><span>光</span></div>
			    <div class="welcom-tip tip3"><span>临</span></div>
    <div class="welcom-cut-off"></div>
    
    </div>
  </div>
  <div id="mainContent">
  <!--logo图标-->
 <div class="logo-plate">
 <div class="logo"></div>
 <div class="ornament-tizi"></div>
 <div class="ornament-youqi"></div>
 </div>
   </div>
  </div>
  <div id="footer" class=”opacityem”>
    <div class="bottom-line1" style="padding-bottom: 9px;"><a href="http://e.baidu.com/?refer=888">加入百度推广</a> | <a href="http://top.baidu.com">搜索风云榜</a> | <a href="http://home.baidu.com">关于百度</a> | <a href="http://ir.baidu.com">About Baidu</a> | <a href="http://www.baidu.com/home/p/open" target="_blank">加入开放首页</a></div>
      <div class="bottom-line2">©2013 Baidu <a href="/duty/">使用百度前必读</a> <a href="http://www.miibeian.gov.cn" target="_blank">京ICP证030173号</a> <em class="s-bottom-copyright">&nbsp;&nbsp;&nbsp;&nbsp;</em></div>
  </div>

<script type="text/javascript" >
$(document).ready(function(){
 
	//提示~
	$("input").focus(function(){
		$(this).parent().find("span").css("display","none");
	});
	$("input").blur(function(){
		if($(this).val()!="")
		{
		$(this).parent().find("span").css("display","none");
		$(this).parent().find(".tip").removeClass("false");
		$(this).parent().find(".tip").addClass("true");
		}
		else
		{
		$(this).parent().find("span").css("display","block");
		$(this).parent().find(".tip").removeClass("true");
		$(this).parent().find(".tip").addClass("false");
		}
	});
	var margintop;
	$(".welcom-tip").hover(function(){
			margintop=$(this).css('margin-top');
			$(this).animate({marginTop:'30px'},500);
		},
		function(){
			$(this).animate({marginTop:'30px'},500).animate({marginTop:margintop},500,function(){$(this).removeAttr('style')})
		});
});
</script>
</body>
</html>