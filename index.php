<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员系统</title>
    <link href="style/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php


    //获取类名
    function __autoload( $className ){

        //载入类
        require( 'class/'.$className.'.class.php' );


    }

    //实例化主类
    //是否有地址栏变量
    if( isset($_GET['index']) ){

        $main = new Main($_GET['index']);

    }else{

        $main = new Main();
    }

    //运行
    $main->runs();


?>

</body>
</html>
