<?php
session_start();
/**
 * Created by PhpStorm.
 * User: jiaoge
 * Date: 2017/12/23
 * Time: 14:20
 */
session_start();
$name=$_POST['name'];
$pwd=$_POST['pwd'];
if($name=='li'&&$pwd=='123'){
    $user=array("name"=>$name,"$pwd"=>$pwd);
    $_SESSION['user']=$user;
}else{
    header('location:$_session.php?erro=密码错误');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>欢迎你<?php dump( $_SESSION['user']['name']) ?></h1>
<a href="do.php">do something</a>
</body>
</html>
