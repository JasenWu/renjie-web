<?php
 
header("Content-type: text/html; charset=utf-8");
 
define('__ROOT__',dirname(__FILE__).'/');

$folderName = $_GET['floder'];
 



if (!file_exists(__ROOT__.'demo/'.$folderName)){
    mkdir(__ROOT__.'demo/'.$folderName,0777,true);
    echo '创建文件夹test成功';
} else {
    echo '需创建的文件夹test已经存在';
}


?>