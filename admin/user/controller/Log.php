<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2017/5/19 17:04
 */
namespace admin\user\controller;

use admin\common\controller\HomeLogin;

class Log extends HomeLogin{
    public function index(){
        return $this->fetch('index');
    }
}