<?php

class Machine {

    function doSomething(int $val) {
        if($val < 0) {
            throw new ZuKleinException();
        }
        elseif($val > 100) {
            throw new ZuGrossException();
        }
        else {
            echo 'Wird verarbeitet: '.$val;
        }
    }
}

class ZuKleinException extends Exception {
}

class ZuGrossException extends Exception {
}

class SpecialException extends Exception {
}

$machine = new Machine();
try {
    $machine->doSomething(150);
}
catch(Exception $e) {
    print_r($e);
}


function doSomethingElse(Machine $m, int $v) {
    //try {
        $m->doSomething($v);
    //}
    //catch(Exception $e) {
    //    echo $e->getMessage();
    //}
    echo "\nENDE METHODE";
}

try {
    doSomethingElse($machine, -20);
}
catch(SpecialException $e) {
    echo "\n".$e->getMessage().'SE';
}
catch(ZuKleinException $e) {
    echo "\nDein Wert ist zu klein!";
}
catch(ZuGrossException $e) {
    echo "\nDein Wert ist zu groß";
}
catch(Exception $e) { // Fängt alle Exceptions ein
    echo "\n".$e->getMessage().'E';
}
finally {
    echo "\nWird immer ausgeführt!";
}
echo "\nENDE";