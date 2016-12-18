<?php
date_default_timezone_set('Asia/Tokyo');

function check_fizz_buzz($i) {
//    if ($i > 1000 ) {
//        return "limit 1000 over";
//    }
    if ($i % 15 === 0) {
        return "fizzbuzz";
    } else if ($i % 5 === 0) {
        return "buzz";
    } else if ($i % 3 === 0) {
        return "fizz";
    } else {
        return $i;
    }
}

CONST RANGE_FROM = 1;
CONST RANGE_TO   = 10000;

function spec_microtime_fizzbuzz_use_for() {

    $start_time = microtime(true);

    $for_array = array();
    for($i=RANGE_FROM; $i<=RANGE_TO; $i++) {
        $for_array[] = check_fizz_buzz($i);
    }

    $time = microtime(true) - $start_time;

    $ret = array(
            'microtime' => $time,
            'count'     => count($for_array)
                );

    return $ret;
}

function spec_microtime_fizzbuzz_use_array_reduce() {
    $start_time = microtime(true);

    $a = range(RANGE_FROM, RANGE_TO);

    function fizzbuzz_callback($carry, $item) {
        $carry[] = check_fizz_buzz($item);
        return $carry;
    }

    $reduce_array = array_reduce($a, "fizzbuzz_callback");

    $time = microtime(true) - $start_time;

    echo "array_reduce time->". $time. "秒";

    $ret = array(
            'microtime' => $time,
            'count'     => count($reduce_array)
                );

    return $ret;
}
