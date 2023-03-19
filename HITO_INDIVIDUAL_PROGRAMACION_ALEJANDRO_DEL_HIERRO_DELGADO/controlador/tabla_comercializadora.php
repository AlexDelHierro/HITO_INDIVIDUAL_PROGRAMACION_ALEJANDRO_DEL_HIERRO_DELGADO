<?php

$recordset = getTodos($link);


while($fila = mysqli_fetch_array($recordset)){
    echo "<tr>";
    echo "<td>".$fila['idusuario']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['apellidos']."</td>";
    echo "<td>".$fila['contraseña']."</td>";
    echo '<td><a class="btn btn-primary" href="editar_comercializadora.php?idusuario='.$fila["idusuario"].'" role="button" aria-expanded="false">
    Editar</a></td>';
    echo '<td><a class="btn btn-danger" href="eliminar_comercializadora.php?idusuario='.$fila["idusuario"].'" role="button" aria-expanded="false">
    Borrar</a></td>';
    echo "</tr>";
}


?>

</table>
</div>