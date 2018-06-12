<!--
   /**
   * Created by PhpStorm.
   * User: jiaoge
   * Date: 2017/12/9
    * Time: 11:01
   */-->
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
<a href="istrue.php?name=KIKI">发发发 </a>
<form action="istrue.php" method="get" enctype="multipart/form-data">
    <!--二进制格式传输-->

<!--    <input type="text" name="username">*-->
    <a href="istrue.php">istrue</a>
    <input type="text" name="myself">
    <span>
       <!-- -->
        <?php
/*        $exit=($_GET['count']);
//        echo $_GET['count'];
             if($exit){
                   echo $_GET['count'];
                    }
$_SESSION想要在多个页面传递涉及到的页面都要写session_start()在最开始
            */?>
    </span>
<!--<button type="submit">提交</button>-->
</form>
<script src="jquery-3.2.1.min.js"></script>
<script>
 /* $(function () {
      $("input").on("blur",function(){
           $.get("istrue.php",{user:this.value},function (res) {
            console.log(res);
              $("span").text(res);
       },"text");
      });
    });*/
</script>
</body>
</html>
<?php
/*$cars=array("1",52,"w");
var_dump($cars);
echo '1234567'
//*/?>