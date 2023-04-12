<?php

require_once('./models/Alimento.php');
require_once('./models/Utensilio.php');

class Compra {
  private $alimentos;
  private $utensilios;
  
  public function __construct($alimentos, $utensilios) {
    $this->alimentos = $alimentos;
    $this->utensilios = $utensilios;
  }
  
  public function calcularTotal() : float {
    $total = 0;
    foreach ($this->alimentos as $alimento) {
      $total += $alimento->getPrecio();
    }
    foreach ($this->utensilios as $utensilio) {
      $total += $utensilio->getPrecio();
    }
    return $total;
  }
  
  public function imprimirTicket() {
    echo "Compra total: <br>";
    echo "-------------<br>";
    foreach ($this->alimentos as $alimento) {
      echo $alimento->getNombre() . " - " . $alimento->getPrecio() . "€ <br>";
    }
    foreach ($this->utensilios as $utensilio) {
      echo $utensilio->getNombre() . " - " . $utensilio->getPrecio() . "€ <br>";
    }
    echo "-------------<br>";
    echo "Total: " . $this->calcularTotal() . "€ <br>";
  }
}


// XURXO:

// class Compra {
//   private array $productos;
//   function __construct(Alimento|Utensilio ...$productos)
//   {
//     $this->productos = $productos;
//   }
// }

// $productos = new Compra(new Alimento ('tomate', 3.40), new Utensilio('cuchara', 4.75));
