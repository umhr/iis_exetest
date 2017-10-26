<?php

exec('ipconfig', $output);

echo '<pre>';
echo mb_convert_encoding(var_export($output, true), 'UTF-8', 'sjis-win');
echo '</pre>';

// ウェブブラウザで確認したいだけなら次の書き方も可能
/* *
header('Content-Type: text/html; charset=sjis');
var_dump($output);
/* */

?>
