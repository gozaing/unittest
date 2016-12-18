<?php

for($i=1; $i<=30; $i++) {
    if ($i % 15 === 0) {
        print "fizzbuzz". PHP_EOL;
    } else if ($i % 5 === 0) {
        print "buzz". PHP_EOL;
    } else if ($i % 3 === 0) {
        print "fizz". PHP_EOL;
    } else {
        print $i. PHP_EOL;
    }
}
