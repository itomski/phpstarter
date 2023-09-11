<?php

const DEBUG = false;

function debug($input, ...$info) {

    if(DEBUG) {
        echo '<pre>';
        foreach($info as $i) {
            echo $i."\n";
        }
        print_r($input);
        echo '</pre>';
    }
}