<?php

use think\facade\Route;

// 管理员
Route::group('user', function () {
    // 登录
    Route::rule('login', 'User/login', 'POST');
    // 注册
    Route::rule('register', 'User/register', 'POST');
});

Route::group('user', function () {
    // 验证登录
    Route::rule('isLogin', 'User/isLogin', 'GET');
    // 退出登录
    Route::rule('logout', 'User/logout', 'GET');
    // 获取用户
    Route::rule('getUserByToken', 'User/getUserByToken', 'GET');
    // 根据id获取用户
    Route::rule('getUserById', 'User/getUserById', 'GET');
    // 用户主页
    Route::rule('index', 'User/index', 'GET');
    // 获取邀请码
    Route::rule('get_invitation_code', 'User/getInvitationCode', 'GET');
})->middleware(app\api\middleware\IsLogin::class);
