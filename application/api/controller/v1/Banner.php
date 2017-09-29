<?php
/**
 * Created by PhpStorm.
 * User: liuwei
 * Date: 2017/9/28
 * Time: 下午8:52
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
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
        //验证器
        $data = [
            'id' => $id
        ];

        $validate = new IDMustBePostiveInt();

        $result = $validate -> batch() -> check($data);

        if ($result) {
            echo $id;
        } else {
            echo $validate -> getError()['id'];
        }
    }

}