<?php
/**
 * Created by PhpStorm.
 * User: 彪
 * Date: 2015/4/14
 * Time: 21:38
 */


//主类，控制页面载入，处理数据
class Main{

    private $index;
    private $send;


    //构造方法，用来初始化数据
    public function __construct($index=''){
        $this->index = $index;

        if( isset($_POST['send']) ){
            $this->send = $_POST['send'];
        }

    }

    //运行方法
    public function runs(){

        //处理数据
        $this->send();

        include $this->ui();

    }


    //创建载入界面方法
    //这个方法，我想得到login.cin.php这个字符串
    private function ui(){
        //判断变量是否为空，或者磁盘没有该文件
        if( empty($this->index) || !file_exists('inc/'.$this->index.'.inc.php') ){

            $this->index='start';
        }

        return 'inc/'.$this->index.'.inc.php';

    }


    //创建一个方法来接收登录和注册发送的数据操作
    private function send(){


        switch($this->send){
            case '注册':
                $this->execs(new Reg($_POST['username'],$_POST['password'],$_POST['notpassword'],$_POST['email']));
                break;
            case '登陆':
                $this->execs(new Login($_POST['username'],$_POST['password']));
                break;
        }

    }


    //创建一个执行的方法，里面传一个方法，是reg或者是login的对象引用
    private function execs($class){
        $class->querys();


    }

}