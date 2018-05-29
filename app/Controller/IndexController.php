<?php

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