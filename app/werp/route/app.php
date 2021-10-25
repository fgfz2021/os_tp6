<?php
use think\facade\Route;


Route::get('/', function () {
    return 'Hello,world!';
});

// 必须这样写
Route::get('basic/brand/test/:id', '\app\werp\controller\basic\brand@test');
Route::get('basic/brand/test', '\app\werp\controller\basic\brand@test');
Route::get('look', 'basic.Brand/test')->name('bb_test');

Route::redirect('blog/:id', 'http://blog.thinkphp.cn/:id', 302);

