<?php
/**
 * Created by PhpStorm.
 * User: pudgala
 * Date: 2021/10/13
 * Time: 12:12
 */

namespace app\werp\controller\basic;


class Brand
{
    public function index()
    {
        return view('index');
    }

    public function test($id = 3)
    {
        echo "你这是什么拳法";
        echo $id;
    }
}