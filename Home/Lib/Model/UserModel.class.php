<?php
	
	class UserModel extends Model{

		protected $_validate = array(
    			array('verify','require','验证码必须！'), 
                                array('verify','checkV','验证码不正确',1,'function'),
    			array('L_id','/^[A-Za-z0-9_]{3,12}$/','账号格式不对',0,'regex'),
    			array('L_id','','账号已存在!',0,'unique',1),
    			//array('L_name','/^[A-Za-z0-9_\u4E00-\u9FFF]{3,12}$/','昵称格式不正确',0,'regex'),
    			array('L_name','','该昵称已经存在！',0,'unique',1), 
    			array('L_pwd','/^[A-Za-z0-9_@.#%&!]{6,16}$/','密码格式不正确',0,'regex'),
    			array('L_email','email','邮箱格式不正确'),
    			array('L_tel','/^[1-9]\d{10}$/','请填写正确的手机号',2,'regex'),
    			array('L_tname','/^[\u4E00-\u9FFF]{1,6}$/','请输入真实中文名字',2,'regex'),
    			array('L_addr','/^[A-Za-z0-9_\u4E00-\u9FFF]{1,100}$/','不要输入特殊字符',2,'regex'),
		);

		protected $_auto = array ( 
    			array('L_valid','0'),  
    			array('L_pwd','md5',1,'function'),
    			array('L_level',10),
		);

		/**
		 * @author UnkelTao
		 * @method arr 子段映射，隐藏数据库字段名
		 */
		protected $_map = array(
        			'username' => 'L_id', 
        			'name' => 'L_name',
        			'password' => 'L_pwd',
        			'email' => 'L_email',
        			'tel' => 'L_tel',
        			'tname' => 'L_tname',
        			'addr' => 'L_addr',
    		);
	} 
?>
