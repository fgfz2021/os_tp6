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
        echo "<br>";
        $url = url('bb_test', ['id' => 10]);

        print_r($url);exit;

    }

    public function fan($name = "傻明")
    {
        echo $name."这个名字";
        echo "不是我想要的";
        exit;
    }
}