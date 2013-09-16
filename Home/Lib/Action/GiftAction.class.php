<?php
	/** 
	 *  @author  UnkelTao
	 *  @function 礼品模块
	 */
	class GiftAction extends Action {
                   
                   public function index(){
                          $this->redirect('Gift/home');
                   }

                   /**
                    * @author UnkelTao
                    * @method  首页
                    */
                   public function home(){
                            if(session('?uname')){ 
                                $uname = session('uname');
                                $this->assign('username',$uname);
                                $this->display();
                            }else{
                                echo '<script language="javascript">alert("对不起，请先登录")</script>';
                                $this->redirect('User/login');
                            }
                   }

                   /**
                    * @author UnkelTao
                    * @method  礼品中心，显示所有礼品---带分页模板
                    */
                   public function center( ){
                             if(session('?uname')){
                                    $uname = session('uname');
                                     $this->assign('username',$uname);
                                     $Gift = D("Gift");
                                 
                                     //$Page = 
                                     $p = $_GET['p'];
                                     //非法数据过滤
                                     if(false==preg_match('/^[0-9]{1,10}+$/',$p))  $p='1';
                                      $count      = $Gift->count();// 查询满足要求的总记录数
                                     if($count < $p*12)  $p= intval(($count + 11)/12);

                                    $list = $Gift->page($p.',12')->select();
                                    $this->assign('list',$list);

                                    //官方分页
                                    import("ORG.Util.Page");// 导入分页类
                                   

                                    $Page       = new Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数
                                    $show     = $Page->show();// 分页显示输出
                                    $this->assign('page',$show);// 赋值分页输出*/
                                    $this->display(); // 输出模板

                             } else{
                                echo '<script language="javascript">alert("对不起，请先登录")</script>';
                                $this->redirect('User/login');
                             }
                   }

                   /**
                    * @author UnkelTao
                    * @method  显示单个礼品详情，需要礼品id作为参数
                    */
                   public function show(){

                          if(session('?uname')){
                                    $uname = session('uname');
                                     $this->assign('username',$uname);
                                     $Gift = D("Gift");
                                 
                                     //$Page = 
                                     $p = $_GET['p'];
                                     //非法数据过滤
                                     if(false==preg_match('/^[0-9]{1,10}+$/',$p)) {
                                             $this->error('非法参数','__URL__/home');
                                     }

                                     
                                    $data = $Gift->where("l_id = $p")->limit(1)->select();
                                    if($data[0]==null){
                                            $this->error('没有该礼品','__URL__/home');
                                    }
                                    
                                   // var_dump($data[0]);
                                    $this->assign('data',$data[0]);
                                    $this->display(); // 输出模板

                             } else{
                                echo '<script language="javascript">alert("对不起，请先登录")</script>';
                                $this->redirect('User/login');
                             }
                   }

                   public function apply(){
                        if(session('?uname')){
                              $uname = session('uname');
                              $this->assign('username',$uname);
                              $User = D("User");
                              $us = $User->where("L_name = '$uname'")->find();
                              ///if($us[0]['L_level']<100){
                                     // $this->error('您的权限不够','__URL__/home');
                                  echo "string";
                                  echo  $us['L_id'];
                          //        var_dump($us);
                            //  }
                              $Gift = D("Gift");
                              //$Page = 
                              $p = $_GET['p'];
                              //非法数据过滤
                              if(false==preg_match('/^[0-9]{1,10}+$/',$p)) {
                                    $this->error('非法参数','__URL__/home');
                              }

                                     
                              $data = $Gift->where("l_id = $p")->limit(1)->select();
                              if($data[0]==null){
                                    $this->error('没有该礼品','__URL__/home');
                              }
                              
                              $this->show();

                        } else{
                                echo '<script language="javascript">alert("对不起，请先登录")</script>';
                                $this->redirect('User/login');
                        }
                   }
            }
?>