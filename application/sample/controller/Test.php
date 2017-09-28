<?php
/**
 * Created by PhpStorm.
 * User: liuwei
 * Date: 2017/9/25
 * Time: 下午1:19
 */

namespace app\sample\controller;

use think\Request;

class Test
{
    // http://localhost/zerg/public/index.php/sample/test/hello
    // http://servername/index.php/module/controller/action/[k/v]
    // http://z.cn/sample/test/hello 虚拟域名
    public function hello()
    {

        /*
         * 获取请求参数
            Request::instance() -> param('id');
            Request::instance() -> get(); // ?
            Request::instance() -> post(); // ?
            Request::instance() -> route();  //  /路径
            Request::instance() -> param();
            //助手函数 input 获取请求参数
            input('param.');
            input('param.id');
            input('get.id');
            input('post.');
        */
        return 'hello world! thinkphp coding';
    }

    /*
    // 依赖注入  Request $request
    public function hello(Request $request)
    {
        $request -> param('id');
        $request -> get(); // ?
        return 'hello world!';
    }
    */

}