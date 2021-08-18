<?php
//获取句子文件的绝对路径,本地版
$path = dirname(__FILE__);
$file = file($path."/yiyan.txt");

//随机读取一行
$arr  = mt_rand( 0, count( $file ) - 1 );
$hitokoto  = trim($file[$arr]);

//输出内容
echo $hitokoto;
?>