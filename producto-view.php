<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <title>Productos</title>
</head>

<body>
  <h1 class="title">PRODUCTOS</h1>
  <form action="" id="form">
    <div class="field">
      <label for="nombre">Nombre</label>
      <input type="text">
    </div>
    <div class="field">
      <label for="precio">Precio</label>
      <input type="number">
    </div>
    <div class="field">
      <label for="tipo">Tipo</label>
      <select name="tipo" id="tipo">
        <option value="tipo">Alimento</option>
        <option value="tipo">Utensilio</option>
      </select>
    </div>
    <button>AÑADIR</button>
  </form>
  <table id="tabla">
    <thead>
      <tr>
        <td><strong>ID</strong></td>
        <td><strong>Nombre</strong></td>
        <td><strong>Precio</strong></td>
        <td><strong>Precio con descuento</strong></td>
        <!-- <td><strong>Caducidad</strong></td> -->
        <td><strong>Tipo (caducidad)</strong></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $p->getId() ?></td>
        <td><?= $p->getNombre() ?></td>
        <td><?= $p->getPrecio() ?>€</td>
        <td><?= $p->aplicarDescuento25($p->getPrecio()) ?>€</td>
        <!-- <td>?=$p->dimeCaducidad()?></td> -->
        <td><?= $p->dimeTipo() ?></td>
      </tr>
      <tr>
        <td><?= $p2->getId() ?></td>
        <td><?= $p2->getNombre() ?></td>
        <td><?= $p2->getPrecio() ?>€</td>
        <td><?= $p2->aplicarDescuento25($p2->getPrecio()) ?>€</td>
        <!-- <td>?=$p2->dimeCaducidad()?></td> -->
        <td><?= $p2->dimeTipo() ?></td>
      </tr>
      <tr>
        <td><?= $p3->getId() ?></td>
        <td><?= $p3->getNombre() ?></td>
        <td><?= $p3->getPrecio() ?>€</td>
        <td><?= $p3->aplicarDescuento25($p3->getPrecio()) ?>€</td>
        <!-- <td>?=$p3->dimeCaducidad()?></td> -->
        <td><?= $p3->dimeTipo() ?></td>
      </tr>
    </tbody>
  </table>

  <hr>
  <div class="ticket-container">
    <div class="ticket">
      <h3><strong>TICKET</strong></h3>
      <?= $compra->imprimirTicket(); ?>
    </div>
  </div>
</body>
</html>