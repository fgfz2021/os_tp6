<?php
/**
 * Created by PhpStorm.
 * User: pudgala
 * Date: 2021/10/13
 * Time: 12:12
 */

namespace app\werp\controller\basic;


use app\middleware\Check;
use app\Request;

class Brand
{
    protected $request;

//    protected $middleware = [Check::class];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

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

    public function hello($name = 3)
    {
        echo "44444444444444444444444444";
//        return 'Hello,' . $name . '！This is '. $this->request->action();
    }

    public function think()
    {
        echo "thinkphp6";
    }

}