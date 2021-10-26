<?php
declare (strict_types = 1);

namespace app\middleware;

class Check
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        if ($request->param('name') == 'think') {
            return redirect('http://www.baidu.com');
        }

        return $next($request);
    }

    public function end(\think\Response $response)
    {
        // 回调行为
        // 注意，在end方法里面不能有任何的响应输出。因为回调触发的时候请求响应输出已经完成了。
    }
}
