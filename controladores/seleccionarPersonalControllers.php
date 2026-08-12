<?php

function seleccionar(){

    if(isset($_GET['id'])){

        $consultas = new Consultas();
        $id = $_GET['id'];

        $fila = $consultas->cargarPersonal($id);

        if($fila){

            echo '

            <div class="container mt-5">

                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-7">

                        <div class="card shadow">

                            <div class="card-body">

                                <h3 class="text-center mb-4">Modificar Personal</h3>

                                <form action="../controladores/modificarPersonalController.php" method="POST">

                                    <table class="table table-borderless">

                                        <tr>
                                            <td>Restaurante:</td>
                                            <td>
                                                <select name="idRestaurante" class="form-select" required>
                                                    <option value="1" '.($fila['idRestaurante']==1?'selected':'').'>Chrono Bogotá</option>
                                                    <option value="2" '.($fila['idRestaurante']==2?'selected':'').'>Chrono Medellín</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Nombre:</td>
                                            <td>
                                                <input type="text" name="nombres" class="form-control" value="'.$fila['nombres'].'" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Apellidos:</td>
                                            <td>
                                                <input type="text" name="apellidos" class="form-control" value="'.$fila['apellidos'].'" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Número Documento:</td>
                                            <td>
                                                <input type="number" name="n_Documento" class="form-control" value="'.$fila['n_Documento'].'" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Tipo Documento:</td>
                                            <td>
                                                <select name="idTipo_Documento" class="form-select" required>

                                                    <option value="tarjeta_identidad" '.($fila['idTipo_Documento']=="tarjeta_identidad"?'selected':'').'>
                                                        Tarjeta de Identidad
                                                    </option>

                                                    <option value="cedula_ciudadania" '.($fila['idTipo_Documento']=="cedula_ciudadania"?'selected':'').'>
                                                        Cédula de Ciudadanía
                                                    </option>

                                                    <option value="nit" '.($fila['idTipo_Documento']=="nit"?'selected':'').'>
                                                        NIT
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Celular:</td>
                                            <td>
                                                <input type="number" name="celular" class="form-control" value="'.$fila['celular'].'" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Indicadores:</td>
                                            <td>
                                                <input type="number" name="indicadores" class="form-control" value="'.$fila['indicadores'].'">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Dirección:</td>
                                            <td>
                                                <input type="text" name="direccion" class="form-control" value="'.$fila['direccion'].'" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Grupo Sanguíneo:</td>
                                            <td>
                                                <select name="idGrupo_Sanguineo" class="form-select" required>

                                                    <option value="O" '.($fila['idGrupo_Sanguineo']=="O"?'selected':'').'>O</option>
                                                    <option value="A" '.($fila['idGrupo_Sanguineo']=="A"?'selected':'').'>A</option>
                                                    <option value="B" '.($fila['idGrupo_Sanguineo']=="B"?'selected':'').'>B</option>
                                                    <option value="AB" '.($fila['idGrupo_Sanguineo']=="AB"?'selected':'').'>AB</option>

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>RH:</td>
                                            <td>
                                                <select name="codRH" class="form-select" required>

                                                    <option value="positivo" '.($fila['codRH']=="positivo"?'selected':'').'>
                                                        Positivo
                                                    </option>

                                                    <option value="negativo" '.($fila['codRH']=="negativo"?'selected':'').'>
                                                        Negativo
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Sexo:</td>
                                            <td>
                                                <select name="codSexo" class="form-select" required>

                                                    <option value="F" '.($fila['codSexo']=="F"?'selected':'').'>
                                                        Femenino
                                                    </option>

                                                    <option value="M" '.($fila['codSexo']=="M"?'selected':'').'>
                                                        Masculino
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Email:</td>
                                            <td>
                                                <input type="email" name="gmail" class="form-control" value="'.$fila['gmail'].'" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Cargo:</td>
                                            <td>
                                                <select name="cargo" class="form-select" required>

                                                    <option value="cliente" '.($fila['cargo']=="cliente"?'selected':'').'>
                                                        Cliente
                                                    </option>

                                                    <option value="administrador" '.($fila['cargo']=="administrador"?'selected':'').'>
                                                        Administrador
                                                    </option>

                                                    <option value="mesero" '.($fila['cargo']=="mesero"?'selected':'').'>
                                                        Mesero
                                                    </option>

                                                    <option value="jefe_cocina" '.($fila['cargo']=="jefe_cocina"?'selected':'').'>
                                                        Jefe de Cocina
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Fecha de Contratación:</td>
                                            <td>
                                                <input type="date" name="fecha_Contratacion" class="form-control" value="'.$fila['fecha_Contratacion'].'" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Estado:</td>
                                            <td>
                                                <select name="estado" class="form-select" required>

                                                    <option value="A" '.($fila['estado']=="A"?'selected':'').'>
                                                        Activo
                                                    </option>

                                                    <option value="I" '.($fila['estado']=="I"?'selected':'').'>
                                                        Inactivo
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <input type="hidden" name="id" value="'.$fila['id'].'">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary">
                                                    Modificar Personal
                                                </button>
                                            </td>
                                        </tr>

                                    </table>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            ';

        }else{

            echo '<div class="alert alert-danger">Personal no encontrado.</div>';

        }

    }

}
?>