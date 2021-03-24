<!-- // Es una estructura de control que te perimite validar multiple casos a la vez -->
<?php
  
  $edad = 20;

  if ($edad == 5 ) {
    echo "<h1 style = 'text-align: center;'>Eres un niño</h1>";
    echo "<hr>";
    echo "<img src='https://static.vecteezy.com/system/resources/previews/001/206/123/non_2x/children-png.png' alt'niño' width='600px' height='350px'>";
  } elseif ($edad == 15) {
    echo "<h1 style = 'text-align: center;'>Eres un adolesente</h1>";
    echo "<hr>";
    echo "<img src='https://www.psicoemocionat.com/wp-content/uploads/psicologo-adolescentes-barcelona_psicoemocionat-adolescentes.png' alt'adolecente' width='600px' height='450px'>";
  } elseif ($edad == 20){
    echo "<h1 style = 'text-align: center;'>Eres un adulto joven</h1>";
    echo "<hr>";
    echo "<img src='https://cdn.pixabay.com/photo/2018/04/29/11/14/portrait-3359641_960_720.png' alt'adulto' width='500px' height='550px'>";
  }else {
    echo "<h1 style = 'text-align: center;'>No se que eres</h1>";
    echo "<hr>";
    echo "<img src='https://media.tenor.com/images/8e4c9c61d4e83985187ed47f269881b2/tenor.gif' alt'adulto' width='800px' height='550px'>";
  }
  

  
?>