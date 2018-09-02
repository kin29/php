<?php
require_once __DIR__ .'/../src/passArgument.php';

class passArgumentTest extends PHPUnit_Framework_TestCase
{
    public function test_convertString_1()
    {
        $obj = new PassArgument();
        $ret = $obj->convertString(1);
        $this->assertEquals($ret, '1');
    }

    public function test_convertString_reference_1()
    {
        $obj = new PassArgument();
        $val = 1;
        $obj->convertString_reference($val);
        $this->assertEquals($val, 1);
    }

    public function test_convertString_default_null()
    {
        $obj = new PassArgument();
        $ret = $obj->convertString_default();
        $this->assertEquals($ret, '0');
    }

    public function test_convertString_default_1()
    {
        $obj = new PassArgument();
        $ret = $obj->convertString_default(1);
        $this->assertEquals($ret, '1');
    }
}
