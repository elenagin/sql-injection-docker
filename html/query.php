<html>
    <head>
    <title>Bien hecho lo lograste bro</title>
    <head>
    <body>
<?php
 $nombre = $_POST ['uname'];
 $contra = $_POST ['psw'];
 $conexion = new mysqli("mysql", "root", "blindinglights", "SG");
 $cadenaSQL = "Select * FROM s_user WHERE email LIKE '".$nombre."' AND pass LIKE '".$contra."'";
 echo $cadenaSQL;
 $resultado = $conexion->query($cadenaSQL);

while ($fila = $resultado->fetch_object()) {
  echo "<br>";
  echo $fila->firstname;
  echo "  ";
  echo $fila->lastname;
  echo "  ";
  echo $fila->email;
  echo "  ";
  echo $fila->pass;
  echo "  ";
  echo $fila->hash;
}

?>
    </body>
</html>
