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

<link href="__PUBLIC__/Home/Css/lipin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
       $("#idx_2").addClass("cur");
</script>
<div id="mainContent">

    <div class="imgplate">
        <ul>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div class="feed-hoder">
                        <div class="feed-content" id="feedid-01">
                            <div class="lipin-img">
                                <img src="__PUBLIC__/Gift/<?php echo ($vo["L_path"]); ?>"></img>
                            </div>
                            <div class="feed-title">
                                <a href="__URL__/show/p/<?php echo ($vo["L_id"]); ?>" title="<?php echo ($vo["L_name"]); ?>">
                                    <?php echo ($vo["L_name"]); ?>
                                </a>
                                <div class="tip">
                                    <span class="feedcount"><?php echo ($vo["L_count"]); ?></span>
                                </div>
                            </div>
                            <a href="__URL__/show/p/<?php echo ($vo["L_id"]); ?>" class="feed-class"> 
                                <img src="__PUBLIC__/Gift/level/level_<?php echo ($vo["L_level"]); ?>.png">
                            </a>   
                            
                        </div>
                        <div class="feed-bottom"></div>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
        </ul>
        <div class="clearfix">
        </div>
    </div>

    <div class="pagecount">
        <?php echo ($page); ?>
    <!--
        <a href="" class="prepage"><span>上一页</span></a>
        <a href="" class="page"><span>1</span></a>  
        <a href="" class="page curp"><span>2</span></a> 
        <a href="" class="page"><span>3</span></a>
        <a href="" class="nextpage"><span>下一页</span></a> -->
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