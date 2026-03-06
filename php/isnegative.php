<?php
require_once'lib/printer.php';
function isnegative($nb){
    if($nb<0){
    printChar('T');
} else {
printChar('F');
}
printChar("\n");
}