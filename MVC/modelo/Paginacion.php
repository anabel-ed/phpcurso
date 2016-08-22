<?php
require_once("Conectar.php");

$base=Conectar::Conexion();
$tamanio_paginas = 3;

  if (isset($_GET["pagina"]))
  {
    if ($_GET["pagina"] == 1)
    {
      header("Location:index.php");
    }else{
      $pagina = $_GET["pagina"];
    }
  }else{
    $pagina = 1;
  }

  $empezar_desde = ($pagina - 1) * $tamanio_paginas;

  $sql = "SELECT * FROM datos_usuarios";

  $resultado = $base->prepare($sql);

  $resultado->execute(array());

  $num_fila = $resultado->rowCount();

  $total_paginas = ceil($num_fila / $tamanio_paginas);

?>
