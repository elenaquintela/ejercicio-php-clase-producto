<?php
declare(strict_types=1);


// CARGAR VARIABLES/CONSTANTES GLOBALES DEL SISTEMA

require_once('./models/Producto.php');
require_once('./models/Alimento.php');
require_once('./models/Utensilio.php');
require_once('./models/Compra.php');


// LÓGICA

$p = new Alimento('Tomate', 3.50, false);
$p2 = new Alimento('Pepino', 6.5, false);
$p3 = new Alimento('Plátano', 2.80, true, new DateTime('2023-04-23'));

$alimentos = array(
  $p,
  $p2,
  $p3
);

$utensilios = array(
  new Utensilio('Cuchillo', 10.50),
  new Utensilio('Pala', 16.75),
  new Utensilio('Cucharilla', 4.20)
);

$compra = new Compra($alimentos, $utensilios);



//CARGAR VISTA

require_once('./producto-view.php');

