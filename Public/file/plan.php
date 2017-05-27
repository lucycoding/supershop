<?php

ignore_user_abort(true);
set_time_limit(0);

function write_txt() {
    if (!file_exists("test.txt")) {
        $fp = fopen("test.txt", "wb");
        fclose($fp);
    }
    $str = date("Y-m-d H:i:s") . "\r\n";
    $fp = fopen("test.txt", "a+");
    fwrite($fp, $str);
    fclose($fp);
}

function do_cron() {
    usleep(10000000);
    write_txt();
}

while (1) {
    do_cron();
}