<?php
/**
 * Created by PhpStorm.
 * User: zlong
 * Date: 2019/2/20
 * Time: 17:31
 */


namespace PichyLaravel\Hasher;
class Md5Hasher
{
    //代码逻辑都在这里
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt);
    }

    public function check($value, $HashValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt) === $HashValue;
    }
}