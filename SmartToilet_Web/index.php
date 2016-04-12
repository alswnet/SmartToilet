<?php
require_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>SmartToilet</title>
</head>
<body>

  <div class="container">

    <table class="table">

      <tr>
        <th>ID</th>
        <th>Fecha</th>
      </tr>
      <?php
      $Sql = "SELECT * FROM tabla_descargas";
      $Res = mysql_query($sql,$Con);
      while ($reg = mysql_fetch_array($res)) {
        ?>
        <tr>
          <td><?php echo $Reg['id']; ?></td>
          <td><?php echo $Reg['hora_descarga']; ?></td>
        </tr>
        <?php } ?>
      </table>

    </div>
  </body>
  </html>
