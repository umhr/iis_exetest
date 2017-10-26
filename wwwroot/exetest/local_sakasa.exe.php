<?php

//$AppPath = 'D:\inetpub\sakasa\sakasa.exe';
$AppPath = 'sakasa.exe';
$argument = '"Mizutama Inc."';
$cmd = $AppPath.' '.$argument;

echo exec($cmd, $output, $return_var);

if($return_var == 0){
    echo '<pre>';
    echo mb_convert_encoding(var_export($output, true), 'UTF-8', 'sjis-win');
    echo '</pre>';
}else{
    echo '処理が正常に終了しませんでした。$return_var = '.$return_var;
}

?>
