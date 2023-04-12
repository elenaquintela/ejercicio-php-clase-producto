<?php

if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'Producto.php'))
  require_once(__DIR__ . DIRECTORY_SEPARATOR . 'Producto.php');
else
  die('Falta el fichero Producto.php');


class Alimento extends Producto
{
  private bool $tieneCaducidad;
  private ?DateTime $fechaCaducidad;


  function __construct(string $nombre, float $precio, ?bool $tieneCaducidad = null, ?DateTime $fechaCaducidad = null)
  {
    parent::__construct($nombre, $precio);
    $this->tieneCaducidad = $tieneCaducidad ?? false;  // se é null o valor é false
    $this->fechaCaducidad = $fechaCaducidad;
  }

  function getTieneCaducidad()
  {
    return $this->tieneCaducidad;
  }
  function getFechaCaducidad()
  {
    return $this->fechaCaducidad;
  }

  function setTieneCaducidad(bool $si = true)
  {
    $this->tieneCaducidad = $si;
  }

  function dimeCaducidad(): string
  {
    return $this->tieneCaducidad ? 'Sí' : 'No';
  }

  function dimeTipo(): string
  {
    $dias = '';
    if ($this->tieneCaducidad) {
      $hoy = new DateTime();
      $intervalo = date_diff($this->fechaCaducidad, $hoy);
      $dias = $intervalo->format('%r%a días');
      return $dias;
    }
    $caducidad = $this->tieneCaducidad ? 'Tiene caducidad' : 'No tiene caducidad';
    return $caducidad;

    // if ($this->fechaCaducidad) {
    //   $hoy = new DateTime();
    //   $intervalo = date_diff($this->fechaCaducidad, $hoy);
    //   echo $intervalo->format('%R%a días');
    // } 
    // $caducidad = $this->tieneCaducidad ? 'Tiene caducidad' : 'No tiene caducidad';
    // return $caducidad;
  }
}
