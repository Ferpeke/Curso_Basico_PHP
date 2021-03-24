<?php
  
  $resultado = 50;
  #*************AND***********
  if ($resultado < 51 and $resultado > 49) {
    echo "es un numero 50 valido";
  }

  echo "<br>";
  $edadvalida = 25;

  if ($edadvalida > 18 and $edadvalida < 26) {
    echo "la edad es valida";
  }

  echo "<hr>";
  #***********OR*******
  $sexo = "M";

  if ($sexo == 'M' or $sexo == 'F') {
    echo "Sexo valido";
  }
  echo "<br>";
  #++++++++++++++Operador de diferente y la negación+++++++++++
   echo "<hr>";
  $dato = 5;

  if ($dato != 10) {
    echo "es un dato diferente";
  }

  echo "<hr>";

  $dato2 = false;

  if (!$dato2) {
    echo " no es verdadero";
  } else {
    echo "Si es verdadero";
  }
  
?>