<?php
/**
 * Created by PhpStorm.
 * User: chunzhen
 * Date: 2017/10/16
 * Time: 14:49
 */
// $name = array("张三","李四","王五","赵六");

// $key = rand(0,3);

// echo $name[$key];

// $input = $_POST['data'];

// file_put_contents("./test.txt", $input);

$pdo = new PDO("mysql: host=localhost,dbname=test","root","root");
$str = "select * from user";
$result = $pdo->query($str);
print_r($result);