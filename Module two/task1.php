<?php
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}
printEvenNumbersFor(2, 20, 2);


//Uses while loop:

function printEvenNumbersWhile($start, $end, $step) {
    while ($start <= $end) {
        if ($start % 2 == 0) {
            echo $start . " ";
        }
        $start += $step;
    }
}
printEvenNumbersWhile(2, 20, 2);


//Uses do-while loop:

    function printEvenNumbersDoWhile($start, $end, $step) {
        do {
            if ($start % 2 == 0) {
                echo $start . " ";
            }
            $start += $step;
        } while ($start <= $end);
    }
    
    printEvenNumbersDoWhile(2, 20, 2);
    