<?php

/**
 * 今回比較するもの
 * - require
 * - include
 */

//わざと失敗させる：該当ファイル(notFound.php)がない
echo "---include(Error) START---\n";
include(dirname(__FILE__) . '/notFound.php');
echo "---include(Error) E N D---\n\n";

echo "---include START---\n";
include(dirname(__FILE__) . '/dummy/include.php');
echo "---include E N D---\n\n";


echo "---require(Error) START---\n";
require(dirname(__FILE__) . '/notFound.php');
echo "---require(Error) E N D---\n\n";

echo "---require START---\n";
require(dirname(__FILE__) . '/dummy/require.php');
echo "---require E N D---\n\n";




