<?php

function printChar($char) {
    if (is_string($char) && strlen($char) === 1) {
        echo $char;
    }
}