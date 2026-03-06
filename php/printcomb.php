<?php
require_once'lib/printer.php';
function printcomb(){
    for($a=0;$a<=7;$a++){
        for($b=$a+1;$b<=8;$b++){
            for($c=$b+1;$c<=9;$c++){
                printChar((string)$a);
                printChar((string)$b);
                printChar((string)$c);
                if(!($a==7 && $b==8 && $c==9)){
                    printChar(",");
                    printChar(" ");
                }
     }   }    }
}
