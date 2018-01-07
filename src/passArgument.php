<?php

// 値渡し(普通のよくやるやつ)
/**
 * 数値型を文字列型に変更する
 *
 * @param integer $number
 * @return string　$number
 */
function convertString($number)
{
  //return (string)$number;のが冗長ではないが、そこは我慢。
  $number = (string)$number;
  return $number;
}

$a = 1;
convertString($a); //文字列型の"1"が返ってくるが、変数$aに格納していないため、$a = 1のまま
var_dump($a); //int(1)

$b = 2;
$b = convertString($b); //文字列型の"2"が返ってきて、変数$bに格納し、$b = "2"となる
var_dump($b); //string(1) "2"


//参照渡し
//PHP5.4.0から仕様変わったやーつー。※今回はPHP5.5を想定
/**
 * 数値型を文字列型に変更する
 *
 * @param integer $number
 * @return string　$number
 */
function convertString_reference(&$number)
{
  $number = (string)$number;
  return $number;
}
$c = 3;
//PHP5.4.0以前ではconvertString_reference(&$c)で呼ぶこともできる。
convertString_reference($c); //$numberと$cが同等となる。
var_dump($c); //string(1) "3"

$d = 4;
$d = convertString_reference($d); //$numberと$dが同等となる。それを$dに格納。
var_dump($d); //string(1) "4"


//デフォルト引数
/**
 * 数値型を文字列型に変更する
 *
 * @param integer $number
 * @return string　$number
 */
function convertString_default($number = 0)
{
  $number = (string)$number;
  return $number;
}
$d = 5;
$d = convertString_default($d); //変数$bと同様
var_dump($d); //string(1) "5"

//引数を渡さずにconvertString_defaultを実行
$e = convertString_default(); //デフォルト引数$number = 0が渡される
var_dump($e); //string(1) "0"


