<?php
require_once '../src/passArgument.php';
class PassArgumentTest extends PHPUnit_Framework_TestCase
{
    public function convertString_Test() {
        $obj = new PassArgument();
        $ret = $obj->convertString(1);
        $this->assertEquals($ret,'1');
    }
}