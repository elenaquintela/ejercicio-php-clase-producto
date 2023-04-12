<?php

abstract class Producto
{
  private string $id;
  private string $nombreProducto;
  private float $precio;

  public int $orden;
  private static int $serie = 0;


  function __construct(string $nombre, float $precio)
  {
    $this->orden = ++Producto::$serie;
    $this->nombreProducto = $nombre;
    $this->precio = $precio;
    $this->id = strlen($nombre) > 1
      ? strtoupper(substr($nombre, 0, 2)) . '-' . $this->orden
      : '##' . $this->orden;
  }

  function getId(): string
  {
    return $this->id;
  }

  function getNombre(): string
  {
    return $this->nombreProducto;
  }

  function getPrecio(): float
  {
    return $this->precio;
  }

  function setNombre(string $nombre): void
  {
    $this->nombreProducto = $nombre;
  }

  function setPrecio(float $precio): void
  {
    $this->precio = $precio;
  }

  static function aplicarDescuento25(float $precio): float
  {
    return $precio * 0.75;
  }

  abstract function dimeTipo(): string;

  function __toString() : string
  {
    return join(',', [$this->id, $this->nombreProducto, $this->precio. ' €']);
  }

}
