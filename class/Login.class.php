<?php
/**
 * Created by PhpStorm.
 * User: 彪
 * Date: 2015/4/14
 * Time: 22:17
 */

//登录类
class Login extends User{

    //写一个构造方法来接收表单的值
    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;


    }

    //从xml里面读出信息
    public function querys(){
        //载入xml文件
        $sxes = simplexml_load_file('user.xml');
        echo ;
        echo
        if($this->username==$sxes->username && $this->username==$sxes->password;){
            echo '登陆成功';
        }else{
            echo '登录失败';
        }
    }

    //验证
    public function checks(){

    }

}