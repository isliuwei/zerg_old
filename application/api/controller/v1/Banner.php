<?php
/**
 * Created by PhpStorm.
 * User: liuwei
 * Date: 2017/9/28
 * Time: 下午8:52
 */

namespace app\api\controller\v1;

use think\Validate;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @param $id banner的id号
     */
    public function getBanner($id)
    {
        //独立验证
        $data = [
            'name' => 'lisi',
            'email' => 'lw.588@163.com'
        ];
        $validate = new Validate([
            'name' => 'require|max:10',
            'email' => 'email'
        ]);
        $result = $validate -> batch() -> check($data);
        $error = $validate -> getError();
        var_dump($error);
    }

}