<?php
require_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Servicio</title>
</head>
<body>

  <div class="container">

    <table class="table">

      <tr>
        <th>ID</th>
        <th>Fecha</th>
      </tr>
      <?php
      $sql = "SELECT * FROM tabla_descargas";
      $res = mysql_query($sql,$con);
      while ($reg = mysql_fetch_array($res)) {
        ?>
        <tr>
          <td><?php echo $reg['id']; ?></td>
          <td><?php echo $reg['hora_descarga']; ?></td>
        </tr>
        <?php } ?>
      </table>

    </div>
  </body>
  </html>
