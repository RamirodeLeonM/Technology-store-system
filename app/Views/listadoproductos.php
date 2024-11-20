<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/listado.css'); ?>">
   
    
    
    <title>Productos</title>
</head>
<body>


<nav>
  <a href="<?=base_url("/public/principal") ?>">Inicio</a>
  <a href="<?=base_url("/public/formularioproductos") ?>">Nuevo producto</a>
  <a href="<?=base_url("/public/listadoproductos") ?>">Listado de productos</a>
  <a href="<?=base_url("/public/listadousuarios") ?>">Usuarios</a>
  <a href="<?=base_url("/public/salir") ?>">Cerrar sesion</a>
</nav>
<header>
<img src="../style/img/logotecnohoy2.jpg" alt="Laptop" style="width: 500px; height: 200px;">
</header> 


<main>
    <section>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Marca</th>
            <th>Categoria</th>
            <th>Precio costo</th>
            <th>Precio unitario</th>
            <th>Cantidad</th>
            <th>Fecha de compra</th>
            <th>Borrar</th>
            <th>Editar</th>
        </tr>
        </thead>
        <?php foreach ($productos as $productos): ?>
            <tr>
                <td><?=$productos["idproducto"]?></td>
                <td><?=$productos["nombre"]?></td>
                <td><?=$productos["descripcion"]?></td>
                <td><?=$productos["marca"]?></td>
                <td><?=$productos["categoria"]?></td>
                <td><?=$productos["preciocosto"]?></td>
                <td><?=$productos["preciounitario"]?></td>
                <td><?=$productos["cantidad"]?></td>
                <td><?=$productos["fechacompra"]?></td>
                
                <td><a href="<?=base_url("/public/borrarproducto/{$productos["idproducto"]}")  ?> "><img src="../style/img/borrar.png" alt="Borrar" style="width: 35px; height: 30px;"></td>
                <td><a href=" <?=base_url("/public/editarproducto/{$productos["idproducto"]}")  ?>  "><img src="../style/img/editar.jpg" alt="Borrar" style="width: 33px; height: 33px;"></td>
            </tr>
        
        <?php endforeach ?>
    </table>
        </main>
        </section>
<footer>
  <h2>Control de inventario</h2>
  <h3>Ramiro de Leon</h3>  
</footer>

</body>
</html>