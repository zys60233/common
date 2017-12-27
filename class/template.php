<?php

/**
 * Created by PhpStorm.
 * User: chunzhen
 * Date: 2017/12/6
 * Time: 14:02
 */

interface iTemplate
{
    public function sayHello($output);
    public function welcome($name,$first);
}

class template implements iTemplate
{
    public function sayHello($output) {
        echo "hello" . $output;
    }

    public function welcome($name,$first) {
        echo "welcome the " . $name . $first . "logining";
    }
}