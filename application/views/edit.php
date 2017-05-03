<html>
 <head>
 <title><?=$page_title?></title>
 </head>
 <body>
 <form name="editar" action="http://localhost/crud/index.php/mantenimiento/editar" method="POST">
 <table>
 <tr>
 <td>Nombre: </td><td><input name="txtNombre" value="<?=$usuario[0]->Nombre?>" type="text"/></td>
 </tr>
 <tr>
 <td>Email: </td><td><input name="txtEmail" value="<?=$usuario[0]->Email?>" type="text"/></td>
 </tr>
 <tr>
 <td>Telefono: </td><td><input name="txtTelefono" value="<?=$usuario[0]->Telefono?>" type="text"/></td>
 </tr>
 <tr>
 <td>Direccion: </td><td><input name="txtDireccion" value="<?=$usuario[0]->Direccion?>" type="text"/></td>
 </tr>
 </table>
 <input type="hidden" name="id" value="<?=$usuario[0]->idContacto?>"/>
 <input type="submit" value="Editar" />
 </form>
 </body>
</html>