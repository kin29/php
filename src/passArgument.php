<?php

class PassArgument
{
    // 値渡し(普通のよくやるやつ)
    /**
     * 数値型を文字列型に変更する
     *
     * @param integer $number
     * @return string $number
     */
    function convertString($number)
    {
        //return (string)$number;のが冗長ではないが、そこは我慢。
        $number = (string)$number;
        return $number;
    }

    //参照渡し
    //PHP5.4.0から仕様変わったやーつー。※今回はPHP5.5を想定
    /**
     * 数値型を文字列型に変更する
     *
     * @param integer $number
     * @return string $number
     */
    function convertString_reference(&$number)
    {
        $number = (string)$number;
        return $number;
    }

    //デフォルト引数
    /**
     * 数値型を文字列型に変更する
     *
     * @param integer $number
     * @return string $ret
     */
    function convertString_default($number = 0)
    {
        $number = (string)$number;
        return $number;
    }
}
