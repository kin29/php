<?php
require_once __DIR__ . '/../src/passArgument.php';

class passArgumentTest extends PHPUnit_Framework_TestCase
{
    public function test_convertString_正常系()
    {
        $obj = new PassArgument();
        $val = 1;
        $val = $obj->convertString($val);
        $this->assertSame($val, '1');
    }

    public function test_convertString_格納しないパターン()
    {
        $obj = new PassArgument();
        $val = 1;
        $obj->convertString($val);
        $this->assertSame($val, 1);
    }

    public function test_convertString_reference_正常系()
    {
        $obj = new PassArgument();
        $val = 1;
        $obj->convertString_reference($val);
        $this->assertSame($val, '1');
    }

    public function test_convertString_reference_上書き()
    {
        $obj = new PassArgument();
        $val = 1;
        $val = $obj->convertString_reference($val);
        $this->assertSame($val, '1');
    }

    public function test_convertString_default_引数なし()
    {
        $obj = new PassArgument();
        $ret = $obj->convertString_default();
        $this->assertSame($ret, '0');
    }

    public function test_convertString_default_引数あり()
    {
        $obj = new PassArgument();
        $ret = $obj->convertString_default(1);
        $this->assertSame($ret, '1');
    }
}
