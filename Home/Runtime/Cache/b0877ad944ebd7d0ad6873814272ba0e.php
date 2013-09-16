<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/Css/jiegou.css"/>
<script type="text/javascript" src="__PUBLIC__/Home/Js/global.js"></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/jquery-1.2.6.pack.js"></script>
<title>礼品管理系统</title>
</head>

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<body>
  <div id="container">
    <div id="topbar">
        <div class="logo-icon">  </div>
        <div class="tools"> 
        <div class="user"><?php echo ($username); ?>:</div>
        <div class="msg">
          <a href="#" class="icona">
            <span class="msgico"></span>
            <span class="newMsg"></span>
          </a> 
          <div class="downlist">
            <ul>
              <li>
                <a href="">
                  <span>5条</span>待审核订单
                </a>
              </li>
              <li>
                <a href="">
                  <span>2条</span>新消息
                </a>
              </li></ul>
            </div>
          </div>
          <div class="set">
            <a href="#" class="icona"><span class="setico"></span></a>
          </div> 
          <div class="logout">
            <a href="__APP__/User/logout" class="icona"><span class="logoutico"></span></a>
          </div>

        </div>
    </div>
  <div id="header">
    <div class="logo">
      <ul>
        <li><a  id="idx_1" href="__URL__/home">首　页</a></li>
        <li><a id="idx_2" href="__URL__/center">礼品中心</a></li>
        <li><a id="idx_3" href="lipinstatus.html">礼品状态</a></li>
        <li><a id="idx_4"href="shenqing.html">申请礼品</a></li>
        <li ><a href="shenhe.html">审　核</a></li>
        <li><a href="usercenter.html">个人中心</a></li>
      </ul>

    </div>
  </div>
  <!-- end #header -->
  </div>

<script type="text/javascript" src="__PUBLIC__/Home/Js/home.js"></script>
<script type="text/javascript">
       $("#idx_1").addClass("cur");
</script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/Css/home.css"/>
  <div id="mainContent">
    <div class="imgshow-plate">
      <div class="imgshow-bottom">
        <div class="imgshow">
          <img id="imgshow_1" src="__PUBLIC__/Home/img/show/1.jpg" alt="百度钱包" />
          <img id="imgshow_2" src="__PUBLIC__/Home/img/show/2.jpg" alt="百度U盘" style="display: none;"/>
          <img id="imgshow_3" src="__PUBLIC__/Home/img/show/3.jpg" alt="百度熊" style="display: none;"/>
          <img id="imgshow_4" src="__PUBLIC__/Home/img/show/4.jpg" alt="百度书包" style="display: none;"/>
        </div>
        <ul class="lipin-list">
          <li id='1'>百度钱包</li>
          <li id='2'>百度U盘</li>
          <li id='3'>百度熊</li>
          <li id='4'>百度书包</li>
          <li id='0' class="goto-lipin">
            <a  href="__URL__/center" >
              <img src="__PUBLIC__/Home/img/lanm_r6_c2.png" alt="前往礼品中心" width="159" height="69" />
            </a>    
          </li>
        </ul>
        
      </div>
    </div>
<!--imgshow-plate-->
    <div class="content cfl">
      <div class="rk">
        <h3><a href="lipinstatus.html">礼品状态</a></h3>
        <p>这里可以查看，有关申请的礼品是否到了。</p> 
        <p>
          <a href="lipinstatus.html">
            <img style="display:block; " alt="" src="__PUBLIC__/Home/img/yunshu.png" />
          </a>
        </p>
        <p>GO!</p>
      </div>
<!--mi2-->
      <div class="rk"> 
        <h3><a href="shenqing.html">礼品申请</a></h3>
        <p>还没有申请礼品吗？赶紧去申请吧？</p>  
        <p>
          <a href="shenqing.html">  
            <img style="display:block; " alt="" src="__PUBLIC__/Home/img/shenqing.png"  ></img>
          </a>
        </p>
        <p>了解礼品申请?</p>
      </div> 
 <!-- hezi-->
 <div  class="rk">
   <h3><a href="shenge.html">审核礼品</a></h3>
   <p>审核礼品？必须的，你懂的！</p> 
   <p>
      <a href="shenhe.html">
        <img style="display:block; " alt="" src="__PUBLIC__/Home/img/shenhe.png">
      </a>
    </p>
  <p>去审核~</p>
 </div> 
<!-- buy-->
 <div  class="rk rk-last">
   <h3><a href="tianjia.html">添加礼品</a></h3>
   <p>有新礼？赶紧去添加吧，大伙等不及了。</p> 
   <p>
      <a href="tianjia.html">  
        <img style="display:block; " alt="" src="__PUBLIC__/Home/img/tianjialipin.png">
      </a>
    </p>
   <p> ...</p>
 </div> 
<!-- buy-->
</div>
  </div>
 <!-- mainContent-->


<div id="footer">
      <div class="bottom-line1" style="padding-bottom: 9px;">
        <a href="http://e.baidu.com/?refer=888">加入百度推广</a> 
        | 
        <a href="http://top.baidu.com">搜索风云榜</a> 
        | 
        <a href="http://home.baidu.com">关于百度</a> 
        | 
        <a href="http://ir.baidu.com">About Baidu</a> 
        | 
        <a href="http://www.baidu.com/home/p/open" target="_blank">加入开放首页</a>
      </div>
      <div class="bottom-line2">
        ?2013 Baidu 
        <a href="/duty/">使用百度前必读</a> 
        <a href="http://www.miibeian.gov.cn" target="_blank">京ICP证030173号</a> 
        <em class="s-bottom-copyright">&nbsp;&nbsp;&nbsp;&nbsp;</em>
      </div>
  </div>

</body>
</html>