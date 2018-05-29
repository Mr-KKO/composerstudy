<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/28 0028
 * Time: 20:34
 */
namespace app\Controller;

class IndexController
{
    public function index(){
        echo view('Index.index',['title' => '首頁', 'cpr' => 'LOU'])->with(['msg' => '美滋滋^~^……', 'slogan' => 'Nothing is impossible!!!']);
//        echo view('welcome',['title' => 'Welcome', 'slogan' => 'Welcome to Mr-KKO']);
    }

    public function show(){
        pp(time());
    }

}