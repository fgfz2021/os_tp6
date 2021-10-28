<?php
use think\facade\Route;


Route::get('/', function () {
    return 'Hello,world!';
});

// 必须这样写
Route::get('basic/brand/test/:id', '\app\werp\controller\basic\brand@test');
//Route::get('basic/brand/test', '\app\werp\controller\basic\brand@test');
//Route::get('look', 'basic.Brand/test')->name('bb_test');

Route::redirect('blog/:id', 'http://blog.thinkphp.cn/:id', 302);

Route::get('basic/brand/hello', 'basic.Brand/hello');
//Route::get('basic/brand/hello/:id', '\app\werp\controller\basic\brand@hello');

// 只有GET请求下MISS路由有效
//Route::miss('\app\common\controller\index@miss', 'get');