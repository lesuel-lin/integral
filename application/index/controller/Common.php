<?php
namespace app\index\controller;
use think\Controller;
class Common extends Controller
{
    public function index()
    {
        
    }
    // 判断是否登录
    public function initialize()
    {
        $user_session = session('user_session');
        if(!$user_session) {
            $this->redirect('index/login');
        }
    }
}