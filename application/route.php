<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------



//\think\Route::any(":ver1/login","api/:ver1.login/index");
\think\Route::any(":ver1/index/login","api/:ver1.index/login");
\think\Route::any(":ver1/index/regist","api/:ver1.index/regist");
\think\Route::any(":ver1/index/reset","api/:ver1.index/reset");
\think\Route::any(":ver1/index/seckill","api/:ver1.index/seckill");

\think\Route::any(":ver1/index/aaaa","api/:ver1.index/aaaa");
\think\Route::any(":ver1/index/Comment","api/:ver1.index/Comment");
\think\Route::any(":ver1/index/Shop","api/:ver1.index/Shop");
\think\Route::any(":ver1/index/Shopcar","api/:ver1.index/Shopcar");
\think\Route::any(":ver1/index/Delshopcar","api/:ver1.index/Delshopcar");
\think\Route::any(":ver1/index/Car","api/:ver1.index/Car");

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
