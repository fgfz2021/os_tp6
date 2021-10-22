<?php
declare (strict_types = 1);

namespace app\index\controller;

class Index
{
    public function index()
    {
        return view('index/index');
    }

    public function hello()
    {
        echo "is good";
    }
}
