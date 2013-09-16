<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>注册|礼品管理系统</title>
  <!--[if lt IE 9]>
<script src="http://elclanrs.github.com/jq-idealforms/js/lib/html5shiv.js"></script>
<![endif]-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/Css/reg.css">
  <script type="text/javascript" src="__PUBLIC__/Home/Js/jquery-1.2.6.pack.js"></script>
  <script type="text/javascript" src="__PUBLIC__/Home/Js/reg.js"></script>
  <link href="__PUBLIC__/Home/Css/user/1140.css" rel="stylesheet"/>
  <link href="__PUBLIC__/Home/Css/user/normalize.css" rel="stylesheet"/>
  <link href="__PUBLIC__/Home/Css/base/jquery-ui.css" rel="stylesheet"/>
  <link href="__PUBLIC__/Home/Css/user/jquery.idealforms.min.css" rel="stylesheet" media="screen"/>
<link href="__PUBLIC__/Home/Css/user/styles.css" rel="stylesheet" media="all"/>
<script src="__PUBLIC__/Home/Js/jquery-1.8.2.min.js"></script>
<script src="__PUBLIC__/Home/Js/user/jquery-ui.min.js"></script>
<script src="__PUBLIC__/Home/Js/user/jquery.idealforms.js"></script>
<script type="text/javascript">
  $(function(){
  var options = {
    onFail: function() {
      alert( '还有 '+$myform.getInvalid().length +' 必填选项未填写，或填写错误')
    },
    inputs: {
      'password': {
        filters: 'required pass',
      },
      'username': {
        filters: 'required username',
        data: {
          //ajax: { url:'validate.php' }
        }
      },
      'xieyi2':{ 
         filters:'required xieyi2',
      },
      'name':{
        filters: 'required name',
      },
      'file': {
        filters: 'extension',
        data: { extension: ['jpg'] }
      },

      'comments': {
        filters: 'min max',
        data: { min: 50, max: 200 }
      } 
    } 
  };

  var $myform = $('#my-form').idealforms(options).data('idealforms');

  $('#reset').click(function(){ $myform.reset().fresh().focusFirst() });
  $myform.focusFirst();
}); 
</script>
</head>
<body>
  
    <!--头部-->
  <div id="header">
    <div class="logo-plate">

      <div class="logo"></div>
      <div class="logo-right"></div>
    </div>
    <div class="clearfix">
    </div>
  </div>

  <!--内容部分 -->
  <div id="container">
          <div class="demo">
            <p><span>注册新用户</span></p>
            <br>
            <p>没用账户？ 来吧~注册吧少年</p>
          </div>
        <form id="my-form" action="__URL__/add" name="my-form" method="post">
        <section name="Step 1" >
          <div>
            <h2>someone 必填</h2>
            <p>Wow, 这些项目都是必须要填的</p>
          </div>
          <div class="cnt">
            <label>账号:</label>
            <input id="username" name="username" type="text"/></div>
          <div class="cnt">
            <label>昵称:</label>
            <input id="name" name="name" type="text"/></div> 
          <div class="cnt">
            <label>密码:</label>
          <input id="password" name="password" type="password"/></div>
          <div class="cnt">
            <label>E-Mail:</label>
            <input id="email" name="email" data-ideal="required email" type="email"/>
          </div>
        </section>
        <section name="Step 2">
          <div>
            <h2>噢，完成一大半了</h2>
            <p>Wow, 剩下的是选填部分，如果想通过审核，还是都填上吧</p>
          </div>
          <div class="cnt">
            <label>真是姓名:</label>
            <input id="tname" name="tname" type="text"/></div>
            <div class="cnt">
            <label>电       话:</label>
            <input id="tel" name="tel" type="text"/></div>
            <div class="cnt">
            <label>详细地址:</label>
            <input id="addr" name="addr" type="text"/></div>
            <div class="cnt">
            <label>验证码:</label>
            <input id="verify" name="verify" data-ideal="" type="text"/>
            <img src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random'>
          </div>
            <div class="cnt">
           
             <input id="xieyi2" name="xieyi2" value="0" type="hidden"/>
          <div class="logo-l">
              <div class="xieyi"></div>
          </div>
            
           </div>
        </section>
      <div><hr/></div>
      <div class="cnt2">
        <button type="submit">Submit</button>
        <button id="reset" type="button">Reset</button>
      </div>

    </form>

  </div>


  <!--尾部-->
  <!--
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
      ©2013 Baidu 
      <a href="/duty/">使用百度前必读</a> 
      <a href="http://www.miibeian.gov.cn" target="_blank">京ICP证030173号</a> 
      <em class="s-bottom-copyright">&nbsp;&nbsp;&nbsp;&nbsp;</em>
    </div>
  </div>
  <!-- -->
  <div class="balckscreen">
      <div class="agreedment-holder">
          <div class="agreedment-title">
		  请认真阅读本站协议！
          </div>
          <div class="agreedment-content">
	         <p>
		        1.XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
		        2.XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
		        3.XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	         </p>
          </div>
          <div>
                <input id="checkbox1" type="checkbox" value="" checked/>
                <span>同意</span>
	           <input id="agree"  type="button"  value="同  意"   />
          </div>
      </div>
  </div>
</body>
</html>