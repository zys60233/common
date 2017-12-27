<?php
    /**
     * Created by PhpStorm.
     * User: chunzhen
     * Date: 2017/12/5
     * Time: 18:20
    */
    $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

    socket_connect($sock, "127.0.0.1", "8080");

    $in = "this is the clent message";

    socket_write($sock, $in, strlen($in));

    socket_write($sock, $in, strlen($in));

    while ($out = socket_read($sock,8192)) {
        echo "server return message is " . $out;
    }

    socket_close($sock);