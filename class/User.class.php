<?php
/**
 * Created by PhpStorm.
 * User: 彪
 * Date: 2015/4/14
 * Time: 22:12
 */


// 这个用户类为一个抽象类，规范自雷的字段和方法

abstract class User{
    protected $username;
    protected $password;
    protected $notpassword;
    protected $email;

    //一个方法，登录和注册
    //如果点了注册，就执行注册方法
    abstract function querys();

    //验证
    abstract function checks();

}