<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        echo "Fizz Buzz";
    } elseif ($i % 3 === 0) {
       echo "Fuzz";
    } elseif ($i % 5 === 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
    echo PHP_EOL;
}
