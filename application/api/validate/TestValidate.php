<?php
/**
 * Created by PhpStorm.
 * User: liuwei
 * Date: 2017/9/28
 * Time: 下午9:35
 */

namespace app\api\validate;

use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}