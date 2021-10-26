<?php
declare (strict_types = 1);

namespace app\werp\controller;

class Error
{
    public function __call($method, $args)
    {
//        return 'error request!';
        return view('404.html');
    }
}