<?php
namespace app\index\controller;
// use app\index\controller\Commen;
use think\Controller;

class Goods extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

}
