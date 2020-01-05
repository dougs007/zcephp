<?php

$a = array();

for($i = 0; $i < 1.02; $i += 0.17) {
  $a[$i] = $i;
}

echo count($a);

// A) 1 #
// B) 2
// C) 5
// D) 6