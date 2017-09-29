<?php
/**
 * Created by PhpStorm.
 * User: liuwei
 * Date: 2017/9/28
 * Time: 下午10:02
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends Validate
{
    protected $rule = [
        'id' => 'require|isPostiveInteger'
    ];

    protected function isPostiveInteger($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0)
        {
            return true;
        }
        else
        {
            return $field.'必须是正整数';
        }
    }
}