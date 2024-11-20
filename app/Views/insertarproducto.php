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
<img src="../style/img/logotecnohoy2.jpg" alt="Laptop" style="width: 500px; height: 200px;">
</header>
<main>
    <section>
<form name="producto" method="post" action="<?=base_url("/public/insertarproductos") ?>">

    <legend>Ingresar productos</legend>
    
    <label>Nombre:</label>
        <input class="form-control" type ="text" id="nombre" name ="nombre" maxlength="100" placeholder="Ingrese Nombre" required><br>

    <label>Descripcion:</label>
        <input class="form-control" type="text" id="descripcion" name = "descripcion" maxlength="100" placeholder="Descripcion" required><br>
    
    <label>Marca:</label>
        <input class="form-control" type="text" id="marca" name = "marca" maxlength="100" placeholder="Ingrese Marca" required><br>

    <label>Categoria:</label>
        <select class="form-control" name="categoria" required>
            <option value="" selected disabled>Seleccione la categoria</option>
            <option value="1">Componenetes PC</option>
            <option value="2">Computadoras</option>
            <option value="3">Audio y video</option>
            <option value="4">Perifericos</option>
            <option value="5">Software</option>
            <option value="6">Redes</option>
        </select>   <br> 
    
    <label>Precio costo:</label>
        <input class="form-control" type="number" id="preciocosto" name = "preciocosto" maxlength="100" placeholder="Ingrese precio costo" required><br>

    <label>Precio unitario:</label>
        <input class="form-control" type="number" id="preciounitario" name = "preciounitario" maxlength="100" placeholder="Ingrese precio unitario" required><br>
        
    <label>Cantidad:</label>
        <input class="form-control" type="number" id="cantidad" name = "cantidad" maxlength="100" placeholder="Ingrese la cantidad" required><br>
    
    <label>Fecha de compra:</label>
        <input class="form-control" type="date" id="fechacompra" name = "fechacompra" maxlength="100" placeholder="Ingrese la fecha de compra" required><br>

    <button class="btn btn-primary" type="submit">Guardar</button><br>

</form>
</section>
</main>
<footer>
  <h2>Control de inventario</h2>
  <h3>Ramiro de Leon</h3>
  
</footer>
</body>
</html>