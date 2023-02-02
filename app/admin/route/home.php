<?php

use think\facade\Route;

Route::group('home', function(){
    // 首页
    Route::rule('', 'Home/index', 'GET');
    // 主页
    Route::rule('welcome', 'Home/welcome', 'GET');
})->middleware([app\admin\middleware\IsLogin::class, app\admin\middleware\CheckAuth::class]);