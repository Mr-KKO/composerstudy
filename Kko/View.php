<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/29
 * Time: 9:53
 */

namespace Kko;


class View
{
    private $file_path = '';
    private $args = [];
    private $action = '';
    private $class = '';

    public function __construct()
    {
        $this->action = Bootstrap::getAction();
        $this->class = Bootstrap::getController();
    }

    public function make($path, $args)
    {
        if (isset($path) && $path){
            $file_path =  realpath('').'/app/View';
            $path_level = explode('.',$path);
            if (count($path_level) === 1){
                $file_path .= '/'.$this->class.'/'.$path_level[0];
            }else{
                foreach ($path_level as $pl){
                    $file_path .= '/'.$pl;
                }
            }
            $file_path .= '.php';
        }else{
            $file_path = realpath('').'/app/View/'.$this->class.'/'.$this->action.'.php';
        }
        $file_path = str_replace('\\','/',$file_path);
        $this->file_path = $file_path;

        $this->args = $args;

        return $this;
    }

    public function with($args)
    {
        $this->args = array_merge($this->args, $args);

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        extract($this->args);
        include_once $this->file_path;
        return '';
    }


}