<?php 

  $SERVER = "localhost";
  $user = "root";
  $pass ="";
  $bd="crud_teste";

  if($conn = mysqli_connect($SERVER,$user,$pass, $bd)):
    //

  else:
    echo "Erro!";
  endif;

  function mensagem($texto, $tipo){
    echo "<div class='alert alert-$tipo' role='alert'>
    $texto </div>";
  }

  

?>