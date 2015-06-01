<?php

function fib($num)
{
    if ($num == 0) {
        return 0;
    }
    if ($num == 1) {
        return 1;
    }
    if ($num == 2) {
        return 1;
    }

    else {
        return fib($num-1) + fib($num-2);
    }
}

for ($num = 0; $num <= 16; $num++) {
    echo(fib($num));
}

?>