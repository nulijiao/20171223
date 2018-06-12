<?php
/**
 * Created by PhpStorm.
 * User: jiaoge
 * Date: 2017/12/23
 * Time: 14:34
 */
$myfile = fopen("a.txt", "r") or die("Unable to open file!");

echo readfile("a.txt");
/*读取文件并且输出到流里*/

echo fread($myfile,filesize("a.txt"));
fclose($myfile);
//die方法就是错误执行方法发生异常执行die就不执行其后
/*plupload
文件上传插件*/
//*一个try对应一个catch，而且catch的异常信息要写类型
//过滤器FILTER
//打开文件操作
/* die方法就是操作失败时候的显示的信息,同时die后面的方法就不会执行了*/
$myfile = fopen("a.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("a.txt"));
//PHP 读取单行文件 - fgets()
fgets($myfile);