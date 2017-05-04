<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
 <head>
 	<title>Edit your Tour</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 </head>
 <body>
	<form name="editar" action="<?php echo base_url(); ?>jacamar/modificar_datos" method="POST">
     <table>
       <tr>
        <td>Nombre: </td><td><input name="txtNombre" value="<?=$tour[0]->name?>" type="text"/></td>
       </tr>
       <tr>
        <td>Descripcion: </td><td><input name="txtDescripcion" value="<?=$tour[0]->description?>" type="text"/></td>
       </tr>
       <tr>
        <td>Precio: </td><td><input name="txtPrecio" value="<?=$tour[0]->price?>" type="text"/></td>
       </tr>
     </table>
     <input type="hidden" name="id" value="<?=$data[0]->idTour?>"/>
     <input type="submit" value="Editar" />
   </form>

 </body>
</html>