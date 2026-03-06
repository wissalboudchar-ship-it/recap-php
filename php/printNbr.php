<?php
require_once 'lib/printer.php';

function printNbr($n): void {
    if ($n < 0) {
        printChar('-');
        $n = -$n;
    }

    if ($n >= 10) {
        printNbr(intdiv($n, 10));
    }

    printChar((string)($n % 10));
}