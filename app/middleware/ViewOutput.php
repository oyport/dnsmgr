<?php

declare (strict_types=1);

namespace app\middleware;

use think\facade\View;

class ViewOutput
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        View::assign('islogin', $request->islogin);
        View::assign('user', $request->user);
        View::assign('cdnpublic', 'https://cdnjs.webstatic.cn/ajax/libs/');
        View::assign('skin', getAdminSkin());
        return $next($request);
    }
}
