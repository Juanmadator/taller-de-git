<?php
//Autor:Juan Manuel Adame Torronteras  <juanmadametor@gmail.com>
require('HolaMundo.php');

print "Introduce tu nombre";
$nombre=trim(fgets(STDIN));
print new HolaMundo($nombre);

 ?>
