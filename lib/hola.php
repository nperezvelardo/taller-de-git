<?php
// NOELIA PÉREZ VELARDO
// Autor: Noelia Pérez <nperezvelardo@iessansebastian.com>require('HolaMundo.php');
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>