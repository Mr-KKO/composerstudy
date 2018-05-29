<?php
/**
 * 格式化打印
 *
 * @param $c,mixed
 * @return void
 */
function pp($c){
    echo "<pre>";
    var_dump($c);
    echo "</pre>";
}

/**
 * 视图渲染
 *
 * @param $path,string,视图文件路径
 * @param $args, array,参数
 * @return object
 */
function view($path='', $args=[]){
    $view = new \Kko\View();

    return $view->make($path, $args);
}