<?php

function cargar(){

    $consultas = new Consultas();

    $filas = $consultas->cargarPersonale();

    if(!$filas){

        echo "<div class='alert alert-warning text-center'>
                No hay personal registrado.
              </div>";

        return;

    }

    echo "

    <div class='table-responsive'>

        <table class='table table-hover align-middle text-center tabla-personal'>

            <thead>

                <tr>

                    <th>Restaurante</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Documento</th>
                    <th>Tipo Doc.</th>
                    <th>Celular</th>
                    <th>Dirección</th>
                    <th>Grupo</th>
                    <th>Sexo</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th>Fecha Contratación</th>
                    <th>Estado</th>
                    <th colspan='2'>Acciones</th>

                </tr>

            </thead>

            <tbody>

    ";

    foreach($filas as $fila){

        echo "

        <tr>

            <td>".$fila['idRestaurante']."</td>
            <td>".$fila['nombres']."</td>
            <td>".$fila['apellidos']."</td>
            <td>".$fila['n_Documento']."</td>
            <td>".$fila['tipo_documento']."</td>
            <td>".$fila['celular']."</td>
            <td>".$fila['direccion']."</td>
            <td>".$fila['grupo_sanguineo']."</td>
            <td>".$fila['sexo']."</td>
            <td>".$fila['gmail']."</td>
            <td>".$fila['cargo']."</td>
            <td>".$fila['fecha_Contratacion']."</td>
            <td>".$fila['estado']."</td>

            <td>

                <a
                    href='modificarPersonal.php?id=".$fila['id']."'
                    class='btn btn-warning btn-sm'>

                    ✏ Editar

                </a>

            </td>

            <td>

                <a
                    href='../controladores/DeletePersonalController.php?id=".$fila['id']."'
                    class='btn btn-danger btn-sm'
                    onclick='return confirm(\"¿Desea eliminar este registro?\")'>

                    🗑 Eliminar

                </a>

            </td>

        </tr>

        ";

    }

    echo "

        </tbody>

        </table>

    </div>

    ";

}

function buscar($dato){

    $consultas = new Consultas();

    $filas = $consultas->buscarPersonal($dato);

    if(!$filas){

        echo "<div class='alert alert-danger text-center'>
                No se encontraron resultados.
              </div>";

        return;

    }

    echo "

    <div class='table-responsive'>

        <table class='table table-hover align-middle text-center tabla-personal'>

            <thead>

                <tr>

                    <th>Restaurante</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Documento</th>
                    <th>Tipo Doc.</th>
                    <th>Celular</th>
                    
                    <th>Dirección</th>
                    <th>Grupo</th>
                    
                    <th>Sexo</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th>Fecha Contratación</th>
                    <th>Estado</th>
                    <th colspan='2'>Acciones</th>

                </tr>

            </thead>

            <tbody>

    ";

    foreach($filas as $fila){

        echo "

        <tr>

                    <td>".$fila['idRestaurante']."</td>
                    <td>".$fila['nombres']."</td>
                    <td>".$fila['apellidos']."</td>
                    <td>".$fila['n_Documento']."</td>
                    <td>".$fila['tipo_documento']."</td>
                    <td>".$fila['celular']."</td>
                    <td>".$fila['direccion']."</td>
                    <td>".$fila['grupo_sanguineo']."</td>
                    <td>".$fila['sexo']."</td>
                    <td>".$fila['gmail']."</td>
                    <td>".$fila['cargo']."</td>
                    <td>".$fila['fecha_Contratacion']."</td>
                    <td>".$fila['estado']."</td>


                <a
                    href='modificarPersonal.php?id=".$fila['id']."'
                    class='btn btn-warning btn-sm'>

                    ✏ Editar

                </a>

            </td>

            <td>

                <a
                    href='../controladores/DeletePersonalController.php?id=".$fila['id']."'
                    class='btn btn-danger btn-sm'
                    onclick='return confirm(\"¿Desea eliminar este registro?\")'>

                    🗑 Eliminar

                </a>

            </td>

        </tr>

        ";

    }

    echo "

        </tbody>

        </table>

    </div>

    ";

}

?>
