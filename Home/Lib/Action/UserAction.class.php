<?php
	/** 
	 *  @author  UnkelTao
	 *  @function 用户模块
	 */
	class UserAction extends Action {

		/**
		 *  @author UnkelTao
		 *
		 *  @method  index  显示礼品系统首页
		 */
		public function index(){
			$this->redirect('Gift/index');
    		}
    		
    		/**
    		 * @author UnkelTao
    		 *
    		 * @method login 显示登陆页面
    		 */
    		public function login(){
    			$this->display();
    		}

                     public function logout()
                     {
                               if (session('?uname')) {
                                        unset($_SESSION['uname']);
                                        echo '<script language="javascript">alert("注销成功")</script>';
                                } else{
                                        $this->redirect("login");
                                }    
                                $this->display("login");
                     }
    		/**
    		 * @author UnkelTao
    		 *
    		 * @method to_login 登陆操作
    		 */
    		public function to_login(){
    			/*if(session('?uname')){ 
    				$this->redirect('User/index');
    			}else{ */
    				$user = M('user');
    				$name = htmlentities($_POST['userName'],ENT_QUOTES,"UTF-8");
				$pwd = htmlentities($_POST['password'],ENT_QUOTES,"UTF-8");

				if($name==''){
					echo '<script language="javascript">alert("用户名格式不对")</script>';
					//$this->redirect('User/index');
                                                     if (session('?uname')) {
                                                            unset($_SESSION['uname']);
                                                     }                                
					$this->error('用户名不能为空','login');
				}else if($pwd==''){
    					echo '<script language="javascript">alert("密码格式不对")</script>';
					//$this->redirect('User/index');
                                                      if (session('?uname')) {
                                                            unset($_SESSION['uname']);
                                                     }    
    					$this->display("login");
				}else{
					$con['L_id'] = $name;
					$con['L_pwd'] = md5($pwd);
					$con['_logic'] = 'and';
					$data = $user->where($con)->find();
					if ($data){
						session('uname', $data['L_name']);
						session('uid', $data['L_id']);

						$this->redirect('User/index');
					}else{
                                                                if (session('?uname')) {
                                                                     unset($_SESSION['uname']);
                                                                }  
						echo '<script language="javascript">alert("用户名或密码错误！")</script>';
						$this->display("login");
					}
				}
			//}
    		}

    		/**
    		 * @author UnkelTao
    		 *
    		 * @method register 显示注册页面
    		 */
    		public function register(){
    			$this->display();
    		}

    		/**
    		 * @author UnkelTao
    		 *
    		 * @method create 添加新用户
    		 */
    		public function add(){
                            $Form = D("User");
                            if ($Form->create($_POST,1)) {
                                if (false !== $Form->add()) {
                                    $this->success('注册成功!去登陆吧','login');
                                } else {
                                   // $this->error('数据写入错误');
                                    echo "string";
                                    this.display();
                                }
                            } else {
                                    // 字段验证错误
                                    $this->error($Form->getError());
                            }  		
                    }
                    
	}

?>