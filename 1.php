<?php
/**
 * Created by PhpStorm.
 * User: jiaoge
 * Date: 2017/12/23
 * Time: 9:23*/
$c=array('a'=>1,'b'=>9,1=>2,10);
/*关联数组*/
count();
/*数组长度*/
/*关联数组*/
foreach ($c as $index=>$value){
 echo "key".$index."value".$value;
}
/*require 会生成致命错误（E_COMPILE_ERROR）并停止脚本
include 只生成警告（E_WARNING），并且脚本会继续*/
//    ISSET函数是否有内容
$_SERVER["PHP_SELF"];
//表示当前页本页php
$_SERVER["REQUEST_METHOD"]=="POST";
//判断是否提交
//HTMLspecialchars
//全部变成字符串防止xss攻击传递script标签攻击
//empty判断是否有值
