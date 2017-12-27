<?php
/**
 * Created by PhpStorm.
 * User: chunzhen
 * Date: 2017/12/6
 * Time: 14:06
 */
spl_autoload_register(function ($classname){
    require_once $classname . ".php";
});

$test = new template();

$test->sayHello("niko");
$test->welcome("susan",2);