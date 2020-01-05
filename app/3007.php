<?php

// What this code outputs?

$a = [1 => 1, 3 => 2, 5 => 3] + [4, 5, 6];

echo implode(', ', array_keys($a));


// A) Fatal error
// B) 1, 3, 5, 6, 7, 8
// C) 1, 3, 5, 0, 2     ##
// D) 0, 1, 2, 3, 4, 5


// explicação para a resposta.
// http://php.net/manual/pt_BR/language.operators.array.php