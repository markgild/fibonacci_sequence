<?php

function fibonacci($n) {
    $f_array = array(0, 1);

    for ($i = 0; $i < $n; $i++) {
        $next = $f_array[$i] + $f_array[$i + 1];
        array_push($f_array, $next);
        echo $next . " ";
    }
}

$input = (int)readline("Enter the number of Fibonacci numbers to generate: ");
fibonacci($input);

?>