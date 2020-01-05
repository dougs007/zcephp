<?php

try {
    throw new Exception("Error");
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL; # Quebra de linha "\n".
} finally {
    echo $e->getMessage();
}


// A) NULL
// B) Error
//     Error
// C) Error
//     Notice:  Undefined variable: e
// D) Nada é impresso