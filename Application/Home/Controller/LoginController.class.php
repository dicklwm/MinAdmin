<?php
/**
 * 文件名：LoginController.class.php
 * 作者: Min
 * 日期时间: 2016/8/5  1:12
 * 描述：登陆控制器
 */
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller {
    //首页显示模板
    public function index(){
        $this->display();
    }

    //登陆操作
    public function Login(){
        if (!IS_POST) $this->error('请先登陆', U('Login/index'));
        // Get输入的账号和密码
        $account = $_POST['account'];
//        $account = "admin";
        $password = $_POST['password'];
//        $password = "2";
        $AfterMd5 = base64_encode(md5($password, true));
        $result = postToV3WebAPI('LoginComp', 'API_AccPwdIdentityAndLogin',
            array(
                'loginAccount' => $account,
                'loginPassword' => $AfterMd5
            ));
        if ($result['success'] == 0) {
            $this->error('请检查账号密码', U('Login/index'));
        } else {
            $userInfo = postToV3WebAPI('vbase_organization', 'OrgChainQueryGeneralRelaForList',
                array('relaMode' => '1111',
                    'srcNodeId' => $result['data']['accountId'],
                    'isForward' => 'False',
                    'orgFields' => '*',
                    'postFields' => '*',
                    'userFields' => '*',
                    'accountFields' => '*',
                ));
            if ($userInfo['success'] == 1) {
                session('userInfo',$userInfo['data']['resultEntity']);
                $this->redirect('index/index');
            } else {
                $this->error('获取账户信息错误', U('Login/index'));
            }
        }
    }

    public function Logout(){
        session('[destroy]'); // 销毁session
        $this->success('登出成功', U('Login/index'), 3);
    }

    public function test(){
//        p(postV3WebAPI('vbase_organization', 'OrgChainQueryGeneralRelaForList',
//            array('relaMode' => '1111',
//                'srcNodeId' => 'cb7b000d27f0eba241b39e8d3273b342',
//                'isForward' => 'False',
//                'orgFields' => '*',
//                'postFields' => '*',
//                'userFields' => '*',
//                'accountFields' => '*',
//                'postEnable'=>1,
//            )));

    }

}

