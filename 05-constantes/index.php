<?php

//constante: contenedor de informacion que no ppuede variar

define("nombre", "Gaby");
define("web","www.buymore.com");

//Para imprimir una constante no debo escribir el simbolo del $

echo "<h1>".nombre."</h1>";
echo "<br>";
echo "<h1>".web."</h1>";


// Constantes Predefinidas

echo PHP_OS;
echo "<br>";
echo PHP_VERSION;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __LINE__;