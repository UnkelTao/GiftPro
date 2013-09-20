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

<link href="__PUBLIC__/Home/Css/table.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Home/Css/shenqing.css" rel="stylesheet" type="text/css" />
    
   <div class="status-ac">
   <div class="buzhou1"><div class="buzhou"></div></div>
    <!--new table * -->
    <div class="table-box">
     <div class="table-header">
                <span class="c1">礼品名称</span>
                <span class="c2">等级</span>
                <span class="c4">优惠</span>
                <span class="c5">数量</span>
                <span class="c6">操作</span>
     </div>
      
     <div id="feeds-list" class="table-row-collection ">
        <ul class="shenqing-tlist" sid="ui_shoppingcart_title">
        <li class="c00">
            <a name="productpic" href="#"> <img src="__PUBLIC__/Home/img/tianjialipin.png"></a>
        </li>
        <li class="c01"><a href="#">百度熊</a></li>
                <li class="c02">3</li>
                <li class="c04">无</li>
                <li class="c05">
                    <div class="countbox">
                          <input type="text" class="apply-count" name="number" value="1" onblur="" onkeypress="">
                          <a href="javascript:;" class="add">+</a>
                          <a href="javascript:;" class="cut">-</a>
                    </div>
                </li>
                 <li class="c06"> </li>
        </ul>
    <ul class="shenqing-tlist" sid="ui_shoppingcart_title">
        <li class="c00">
            <a name="productpic" href="#"> <img src="__PUBLIC__/Home/img/tianjialipin.png"></a>
        </li>
        <li class="c01"><a href="#">百度熊</a></li>
                <li class="c02">3</li>
                <li class="c04">无</li>
                <li class="c05">
                    <div class="countbox">
                          <input type="text" class="apply-count" name="number" value="1" onblur="" onkeypress="">
                          <a href="javascript:;" class="add">+</a>
                          <a href="javascript:;" class="cut">-</a>
                    </div>
                </li>
                 <li class="c06"> </li>
        </ul>
        <ul class="shenqing-tlist" sid="ui_shoppingcart_title">
        <li class="c00">
            <a name="productpic" href="#">
              <img src="__PUBLIC__/Home/img/tianjialipin.png">
            </a>
        </li>
        <li class="c01"><a href="#">百度熊</a></li>
                <li class="c02">3</li>
                <li class="c04">无</li>
                <li class="c05">
                    <div class="countbox">
                          <input type="text" class="apply-count" name="number" value="1" onblur="" onkeypress="">
                          <a href="javascript:;" class="add">+</a>
                          <a href="javascript:;" class="cut">-</a>
                    </div>
                </li>
                 <li class="c06"> </li>
        </ul>
          
     </div >
     
     <div class="table-header">
                <span class="c21">申请人姓名</span>
                <span class="c22">申请人工位</span>
                <span class="c23">申请人电话</span>
                <span class="c24">操作</span>
     </div>
      
         <div id="user-info" class="table-row-collection">
         <ul class="user2" >
                <li class="c31">xxx</li>
                <li class="c32">xx</li>
                <li class="c33">XXXXXXXXXXXX</li>
                <li class="c34">修改</li>
         </ul>
         </div>

     </div>
    
       <!--end table * -->
      
     <div class="shenqing-plate">
       <div class="liyou">申请理由</div>
       <div class="note-holder">
            <div class="note-top"></div>
            <div class="note-content">
            <textarea class="textarea" id="apply-reason" data-height="210" ></textarea>
            </div>
       </div>
       
         <div class="btn-holder">
                <input type="submit" name="apply" id="btn-apply"class="sub" value="提交申请" />
        </div>
   </div>


  </div>



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