<?php

function test() {
	return 1;
}

function fizz($from, $to) {
    $ret = array();
    for ($i=$from; $i <= $to; $i++) {
        $ret[] = $i;
    }
    return $ret;
}