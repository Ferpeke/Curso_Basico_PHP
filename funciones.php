 <?php
   

   //funcion normal de php
   function miFuncion () {
      //mostrara un numbre
      return 'Esto es un nombre';
   }

   miFuncion();
   

   //funciones escalares 

   function mifuncion2($valorA, $valorB, $opcion){
    switch ($opcion) {
      case 'suma':
        echo $valorA + $valorB;
        break;
      case 'resta':
        echo $valorA - $valorB;
        break;

      case 'multiplicación':
        echo $valorA * $valorB;
        break;
      
      case 'division':
        echo $valorA / $valorB;
        break;
      default:
      echo $opcion.' <--- es incorrecto';
        break;
     
    }
   }

   echo mifuncion2(5, 10, 'sumas');
 ?>