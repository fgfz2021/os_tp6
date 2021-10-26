<?php

namespace app\middleware;

class After
{
    public function handle($request, \Closure $next)
    {
        $response = $next($request);

        // 添加中间件执行代码
        echo "<br>后<br>";
        return $response;
    }
}