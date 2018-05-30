<?php

namespace app\Controller;

class IndexController
{
    public function index(){
        return view('Index.index',['title' => '首頁', 'cpr' => 'LOU'])->with(['msg' => '美滋滋^~^……', 'slogan' => 'Nothing is impossible!!!']);
//        return view('welcome',['title' => 'Welcome', 'slogan' => 'Welcome to Mr-KKO']);
    }

    public function show(){
        pp(time());
    }


}