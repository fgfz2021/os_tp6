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

    public function test()
    {
        echo "01110110";
    }

    public function hello(string $name)
    {
        return 'Hello,'.$name;
    }
}