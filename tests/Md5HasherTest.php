<?php
/**
 * Created by PhpStorm.
 * User: zlong
 * Date: 2019/2/21
 * Time: 9:26
 */

class Md5HasherTest extends \PHPUnit\Framework\TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \PichyLaravel\Hasher\Md5Hasher();
    }

    public function testMd5HasherMake()
    {
        $password = md5('long1991');
        $passwordTwo = $this->hasher->make('long1991');
        return $this->assertEquals($password, $passwordTwo);
    }

    public function testMd5HasherCheck()
    {
        $password = md5('long1991');
        $result = $this->hasher->check('long1991', $password);
        return $this->assertTrue($result);
    }
}