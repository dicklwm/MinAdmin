<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        session(array('name'=>'userInfo','expire'=>3600));
        session('userName','Min Lee');
        session('userId','1000');
//        session(array('userName'=>"Min Lee",'userId'=>'1'));
        $this->display();
    }
}