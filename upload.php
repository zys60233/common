<?php 
    $input = json_encode($_POST);
    $file = json_encode($_FILES);
    move_uploaded_file($_FILES["goods_pics"]["tmp_name"], "./01.png");
    file_put_contents("./uploadlog.txt", $input . $file . "\n");
 ?>