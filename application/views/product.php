<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Jacamar Guides</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> 
	<style type="text/css">
   p {
    font: Helvetica;
    font-size: 14px;
    font-color: blue;
   } 
  </style>
</head>
<body>
 	<div class="container">  
        <br /><br /><br />  
           <form method="post" action="<?php echo base_url(); ?>Jacamar/recibir_datos">  
                <div class="form-group">  
                   <label>Enter Name of Tour</label>  
                   <input type="text" name="name" class="form-control" />  
                   <span class="text-danger"><?php echo form_error('name'); ?></span>                 
                </div>  
                <div class="form-group">  
                   <label>Enter Tour Description</label>  
                   <input type="text" name="description" class="form-control" />  
                   <span class="text-danger"><?php echo form_error('description'); ?></span>  
                </div>  
                <div class="form-group">  
                   <label>Enter Tour Price</label>  
                   <input type="text" name="price" class="form-control" />  
                   <span class="text-danger"><?php echo form_error('price'); ?></span>  
                </div> 
                <div class="form-group">  
                   <input type="submit" name="insert" value="Save" class="btn btn-info" />  
                   <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';?>  
                </div>  
                <div class="form-group">  
                   <input type="submit" name="exit" value="Exit" class="btn btn-info" onclick="<?php echo base_url().'login/logout'?>" />  
                   

                </div>
                <div class="form-group">  
                  
                   <input type="button" onclick="history.back()" name="Back" value="Back"> 
           </form>  
    </div>  
    <br>
    <br>
    <p>Delete Tour</p>
     <form name="borrar" action="<?php echo base_url(); ?>Jacamar/borrar_datos" method="POST">
       <table>
         <tr>
         <td>Tour Name: </td><td><input name="txtNombre" type="text"/></td>
         </tr>
       </table>
       <input type="submit" value="Delete" />
      </form>
      <br>


</body>
</html>    