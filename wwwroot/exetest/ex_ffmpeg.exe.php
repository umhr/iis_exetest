<?php

$AppPath = 'C:\inetpub\ffmpeg-20171016-7480f23-win64-static\bin\ffmpeg.exe';
$source = 'pcloud640480.mp4';
$out = $source.'_ex_ffmpeg.exe.jpg';
$argument = ' -i "'.$source.'" -f image2 -vframes 1 -ss 3 -an -deinterlace "'.$out.'"';
$cmd = $AppPath.' '.$argument;

// もし既にファイルがあれば削除
if(is_readable($out)){
    unlink($out);
}

exec($cmd, $output, $return_var);

if($return_var == 0){
    echo '処理が正常に終了しました。';
}else{
    echo '処理が正常に終了しませんでした。$return_var = '.$return_var;
}

?>
