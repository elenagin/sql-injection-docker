<?php
  $conexion = new mysqli("mysql", "root", "secret", "SG");

  $cadenaSQL = "select * from s_user";
  $resultado = $conexion->query($cadenaSQL);

  while ($fila = $resultado->fetch_object()) {
  echo "<tr><td> " .$fila->firstname . 
    "</td><td>" . $fila->lastname .
    "</td><td>" . $fila->email .
    "</td><td>" . $fila->pass .
    "</td><td>" . $fila->hash .
    "</td></tr>";
}