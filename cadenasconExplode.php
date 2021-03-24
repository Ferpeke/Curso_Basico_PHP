<?php
  
  $var = "pedro jimenez lopez";
  $fecha = "01-05-2017";


  $datos= explode(" ", $var);
  echo "<pre>";
  print_r($datos);
  echo "</pre>";


  $f = explode("-", $fecha);

  echo "El año de la fecha es: ".$f[2];
  // $paterno = $datos[1];
  // $materno = $datos[2];
  // $nombre = $datos [0];
  
?>