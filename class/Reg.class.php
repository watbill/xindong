<?php
/**
 * Created by PhpStorm.
 * User: 彪
 * Date: 2015/4/14
 * Time: 22:16
 */


//注册类
class Reg extends User{


    //写一个构造方法来接收表单的值
    public function __construct($username,$password,$notpassword,$email){
        $this->username = $username;
        $this->password = $password;
        $this->notpassword = $notpassword;
        $this->email = $email;

    }


    //将信息注册到xml里面
    public function querys(){
        //xml字符串
        $xmls = <<<xmls
<?xml version="1.0" encoding="utf-8"?>
<user>
    <username>$this->username</username>
    <password>$this->password</password>
    <email>$this->email</email>
</user>
xmls;

        $sxes = new SimpleXMLElement($xmls);
        $sxes->asXML('user.xml');

        echo "reg";
        echo $this->username;
        echo $this->password;
        echo $this->notpassword;
        echo $this->email;

    }

    //验证
    public function checks(){

    }

}
