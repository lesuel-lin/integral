<?php
namespace app\index\controller;
// use app\index\controller\Commen;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function home()
    {
        return $this->fetch();
    }

}
