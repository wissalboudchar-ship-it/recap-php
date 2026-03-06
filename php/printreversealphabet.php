<?php
require_once 'lib/printer.php';
for ($d = ord('z'); $d >= ord('a'); $d--) {
    printChar(chr($d));
}
printChar("\n");
