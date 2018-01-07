<?php

/**
 * 今回比較するもの
 * - require_once
 * - include_once 
 */

//~_onceつかってみる
echo "---require START---\n";
require(dirname(__FILE__) . '/dummy/require.php');
echo "---require E N D---\n\n";

echo "---require_once START---\n";
require_once(dirname(__FILE__) . '/dummy/require.php');
echo "---require_once E N D---\n\n";


echo "---include START---\n";
include(dirname(__FILE__) . '/dummy/include.php');
echo "---include E N D---\n\n";

echo "---include_once START---\n";
include_once(dirname(__FILE__) . '/dummy/include.php');
echo "---include_once E N D---\n\n";