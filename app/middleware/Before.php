<?php

namespace app\middleware;

class Before
{
    public function handle($request, \Closure $next)
    {
        // 添加中间件执行代码

        echo "<br>前<br>";

        return $next($request);
    }
}