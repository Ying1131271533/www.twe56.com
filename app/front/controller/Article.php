<?php
namespace app\front\controller;

use think\facade\View;

class Article
{
    public function index()
    {
        return View::fetch();
    }

    public function detail()
    {
        return View::fetch();
    }
}
