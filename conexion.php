<?php

class conexion{
    function recuperarDatos(){
        $host = "localhost";
        $user = "root";
        $pw   = "";
        $db   = "mensajeros";

        $con = mysqli_connect($host, $user, $pw) or die("No se puede conectar a la base de datos ");
        mysqli_select_db($con, $db) or die("Nose encontro la base de datos");
        $query = "SELECT * FROM empleados";
        $resultado = mysqli_query($con, $query);

        
                    
            echo '<table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Ap_P</th>
                  <th>Ap_M</th>
                  <th>Celular</th>
                  <th>Activo</th>
                </tr>
                </thead>
                <tbody>';
                while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr>
                  <td>$fila[id]</td>
                  <td>$fila[nombre]</td>
                  <td>$fila[apellido_p]</td>
                  <td>$fila[apellido_m]</td>
                  <td>$fila[celular]</td>
                  <td>$fila[activo]</td>
                </tr>";
        }
        echo "</tbody>
        </table>";

    }
}

?>