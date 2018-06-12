<?php
	//var_dump($_POST);
$str=implode($_POST,'\n');
//echo $str;

//把内存数据写到文件

file_put_contents('./post.txt',$str);
echo OK;

?>