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

    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/main.css'); ?>">
   
    
    
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
  
<form id="form" method="get" action="<?=base_url("/public/buscador") ?>">
     <input type="text" id="query" name="query" class="input-search" placeholder="Search here...">
     <input type="submit" id="buscar" value="Buscar">
</form>

  <aside>
  
    <h2>Articulos de redes</h2>
    <img src="../style/img/p1.jpg" alt="Repetidor" style="width: 200px; height: 200px;">
    <h3>Nebula300Plus Router Inalámbrico-N 300Mbps</h3>
    <img src="../style/img/p2.png" alt="Repetidor" style="width: 200px; height: 200px;">
    <h3>Nexxt AC3600 Sistema Extensor Inalámbrico Mesh</h3>
    <br>
    <h2>Perifericos</h2>
    <img src="../style/img/p6.jpg" alt="Repetidor" style="width: 200px; height: 200px;">
    <h3>Impresora Canon G1110 de Sistema Continuo</h3>
  </aside>

  <section>
 
  <h2>Audio y video</h2>
  <img src="../style/img/p3.png" alt="Bocina" style="width: 300px; height: 200px;">
  <h3>Bose SoundLink Flex Altavoz portátil Bluetooth, altavoz impermeable inalámbrico</h3>
  <img src="../style/img/p4.jpg" alt="Bocina" style="width: 220px; height: 220px;">
  <h3>Bocina portátil JBL Charge 4</h3>
    <br>
  <h2>Componentes PC</h2>
  <img src="../style/img/p5.jpg" alt="Componente" style="width: 300px; height: 200px;">
  <h3>ZOTAC Tarjeta de Video GeForce RTX 3090 Trinity OC 24GB Gaming GDDR6X</h3>
  </section>
</main>



<footer>
  <h2>Control de inventario</h2>
  <h3>Ramiro de Leon</h3>
  
</footer>

</body>
</html>