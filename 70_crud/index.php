<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php 
  include("conexion.php");

  $registro = $base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ); 

  if (isset($_POST["cr"]))
  {
    $nom = $_POST["Nom"];
    $ape = $_POST["Ape"];
    $dir = $_POST["Dir"];

    $sql = "INSERT INTO datos_usuarios (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)";

    $resultado = $base->prepare($sql);

    $resultado->execute(array(":nom"=>$nom, ":ape"=>$ape, ":dir"=>$dir));

    header("Location:index.php");
  }

?>

  <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr >
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Dirección</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr> 
     
  		
     	
  <?php foreach ($registro as $persona):?>
    <tr>
      <td><?php echo $persona->Id; ?></td>
      <td><?php echo $persona->Nombre; ?></td>
      <td><?php echo $persona->Apellido; ?></td>
      <td><?php echo $persona->Direccion; ?></td>
      
      <td class="bot"><a href="borrar.php?Id=<?php echo $persona->Id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?Id=<?php echo $persona->Id ?> & nombre=<?php echo $persona->Nombre ?> & apellido=<?php echo $persona->Apellido ?> & direccion=<?php echo $persona->Direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr> 
  <?php endforeach; ?>


  	<tr>
  	<td></td>
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Ape' size='10' class='centrado'></td>
        <td><input type='text' name='Dir' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
    </table>
  </form>
<p>&nbsp;</p>
</body>
</html>