<?php
	
	/**
	* 关于项目的基础配置
	*/
	return array(
		//'配置项'=>'配置值'
		'TMPL_L_DELIM' => '{<' , // 设置左定界符
		'TMPL_R_DELIM' => '>}' ,	//设置右定界符
		'DB_TYPE'   => 'mysql', // 数据库类型
		'DB_HOST'   => 'localhost', // 服务器地址
		'DB_NAME'   => 'gift', // 数据库名
		'DB_USER'   => 'root', // 用户名
		'DB_PWD'    => 'wangyue', // 密码
		'DB_PORT'   => 3306, // 端口
		'DB_PREFIX' => 'L_', // 数据库表前缀
		'SHOW_PAGE_TRACE' =>true, //开启页面Trace，程序发布后注释掉
		'LAYOUT_ON' => true, //开启模板布局
	);
?>