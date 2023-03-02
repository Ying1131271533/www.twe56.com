<?php


use think\facade\Route;

// 跨境资讯
Route::group('test', function(){
    Route::rule('', 'Test/index', 'GET');
});