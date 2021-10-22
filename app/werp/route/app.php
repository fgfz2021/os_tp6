<?php
use think\facade\Route;

// 必须这样写
Route::get('basic/brand/test/:id', '\app\werp\controller\basic\brand@test');
Route::get('basic/brand/test', '\app\werp\controller\basic\brand@test');
Route::get('look', '\app\werp\controller\basic\brand@test');

