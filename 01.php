<?php
    $arr = array("list1"=>array("name"=>"zhangsan","age"=>"16"),"list2"=>array("name"=>"lisi","age"=>"19"));
    $return = json_encode($arr);

    echo $return;