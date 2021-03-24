<?php
  
  $numero1 = 150;
  $numero2 = 150;

  //declaracion de variable bool
  $banderaPos = true; // o 1

  $banderaNeg = false; // o 0;

  if($numero1 > $numero2) {
    echo "el numero mayos el ".$numero1; 
  } 
  echo "<hr>";
  if( $numero2 > $numero1) {
    echo "el numero mayos el ".$numero2;
  } 

  if($numero1 == $numero2){
    echo "los numeros son iguales";
  }

  echo "<br>";
  if ($banderaPos) {
    echo "es Positivo" ;
  } 
  echo "<br>";
  echo "<hr>";
  if ($banderaNeg == 0) {
    echo "es negativo";
  }

  
?>