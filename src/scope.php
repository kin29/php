<?php

// ローカル変数 - 関数内で定義され、有効範囲はその関数内のみ
$a = 1;
function showLocalNum()
{
  //ローカル変数 $aのスコープ　ここから
  $a = 2; // ←ローカル変数 $aの定義
  print 'ローカル変数 $a: ' . $a . "\n";
  //ローカル変数 $aのスコープ　ここまで
}
showLocalNum(); // 2 →ローカル変数 $a
print '4行目の$a: ' . $a . "\n";


// グローバル変数 - 関数内外問わず定義され、有効範囲はPHPスクリプト全体
$g = 1;
function showGlobalNum()
{
  global $g;
  $g++;
  print 'グローバル変数 $g: ' . $g . "\n";
}
showGlobalNum(); // 1 →グローバル変数 $g
print '17行目の$g: ' . $g . "\n"; //グローバル変数 $gとなる


//静的(static)変数 - 関数内で定義され、初期化は最初の一回のみ行われ、その後は前の値が残る。
//static $d = 100;　//関数外では定義できない
function showStaticNum()
{
  static $s = 100; //←ローカル変数 $sの定義	
  $s++;
  print '静的(static)変数 $s: ' . $s . "\n";
}
showStaticNum(); // 101
showStaticNum(); // 102
showStaticNum(); // 103