<?php
  
  $arreglo = array();
  $arreglo[0] = "juan";
  $arreglo[1] = 10;
  $arreglo[2] = 'ferpeke :)';
  $arreglo[3] = 'YamiPeke';
  

  echo $arreglo[2];
  echo "<br>";
  echo count($arreglo);
  echo "<br>";
  echo "<hr>";
  for ($i=0; $i < count($arreglo) ; $i++) { 
    
    echo $arreglo[$i];
    echo "<br>";

    if ($arreglo[$i] == "ferpeke :)") {
      echo "te encontre!!";
      echo "<br>";
    }
  }

?>