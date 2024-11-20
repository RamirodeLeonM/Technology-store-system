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

    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/formulario.css'); ?>">
   

    
    <title>Pagina principal</title>
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
<img src="/controlinv/style/img/logotecnohoy2.jpg" alt="Logoss" style="width: 500px; height: 200px;">
</header>
<main>
    <section>


<?php foreach ($productos as $productos): ?>
    <form name="producto" method="post" action="<?=base_url("/public/actualizarproducto/{$productos["idproducto"]}") ?>">

        <legend>Modificar registros de productos</legend>

    <label>Nombre:</label>
        <input class="form-control" type ="text" id="nombre" name ="nombre" maxlength="100" placeholder="Ingrese Nombre" value="<?=$productos["nombre"] ?>" required><br>

    <label>Descripcion:</label>
        <input class="form-control" type="text" id="descripcion" name = "descripcion" maxlength="100" placeholder="Descripcion" value="<?=$productos["descripcion"] ?>" required><br>
    
    <label>Marca:</label>
        <input class="form-control" type="text" id="marca" name = "marca" maxlength="100" placeholder="Ingrese Marca" value="<?=$productos["marca"] ?>" required><br>
    
    <label>Categoria:</label>
        <input class="form-control" type="text" id="categoria" name = "categoria" maxlength="100" placeholder="Ingrese Categoria" value="<?=$productos["categoria"] ?>" required><br>

    <label>Precio costo:</label>
        <input class="form-control" type="number" id="preciocosto" name = "preciocosto" maxlength="100" placeholder="Ingrese precio costo" value="<?=$productos["preciocosto"] ?>" required><br>

    <label>Precio unitario:</label>
        <input class="form-control" type="number" id="preciounitario" name = "preciounitario" maxlength="100" placeholder="Ingrese precio unitario" value="<?=$productos["preciounitario"] ?>" required><br>
        
    <label>Cantidad:</label>
        <input class="form-control" type="number" id="cantidad" name = "cantidad" maxlength="100" placeholder="Ingrese la cantidad" value="<?=$productos["cantidad"] ?>" required><br>
    
    <label>Fecha de compra:</label>
        <input class="form-control" type="text" id="fechacompra" name = "fechacompra" maxlength="100" placeholder="Ingrese la fecha de compra" value="<?=$productos["fechacompra"] ?>" required><br>

    <button class="btn btn-primary" type="submit">Guardar</button>

    </form>
    <?php endforeach ?>

    </section>
</main>
<footer>
  <h2>Control de inventario</h2>
  <h3>Ramiro de Leon</h3>
  
</footer>
</body>
</html>