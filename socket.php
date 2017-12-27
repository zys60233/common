<?php
    /**
     * Created by PhpStorm.
     * User: chunzhen
     * Date: 2017/12/5
     * Time: 17:28
     */
    if ($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) {

    } else {
        echo socket_strerror();
    };

    socket_bind($sock, "127.0.0.1", "8080");

    socket_listen($sock, 4);

    $count = 0;

    do {
        if (($msgsock = socket_accept($sock)) < 0) {
            echo socket_strerror();
        } else {
            $msg = "test success!\n";
            socket_write($msgsock, $msg, strlen($msg));

            echo "oh yeah, testing is successful\n";

            $buf = socket_read($msgsock, 8192);

            $talkback = "recive message is:" . $buf . "\n";
            echo $talkback;

            if (++$count > 5) {
                break;
            }
        }
        socket_close($msgsock);
    } while (true);

    socket_close($sock);

