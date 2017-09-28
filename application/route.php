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

/*
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
];
*/

/**
    URL路径格式
    · PATH_INFO
    · 混合模式
    · 强制使用路由模式
 */

use think\Route;
/**
 * 注册路由规则
 * Route::rule($rule, $route = '', $type = '*', $option = [], $pattern = [])
 * @access public
 * @param string    $rule 路由规则
 * @param string    $route 路由地址
 * @param string    $type 请求类型
 * @param array     $option 路由参数
 * @param array     $pattern 变量规则
 * @return void
 */

Route::rule('hello', 'sample/Test/hello');
//Route::get('hello', 'sample/Test/hello');
//Route::post('hello', 'sample/Test/hello');
//Route::any('hello', 'sample/Test/hello');