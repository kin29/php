# PHP
phpの色々

### 引数の渡し方...値渡し/参照渡し/デフォルト引数
- passArgument.php

### 他ファイルの参照...requireとincludeの違い
require と include はほぼ同じだが、失敗した場合の動きが異なる。
require → 致命的なエラーを発生する。スクリプトの処理がそこで止まってしまう。
include → 警告 (E_WARNING) を発するが、スクリプトの処理は続行する。
- requireVsInclude.php
