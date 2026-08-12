<?php

//     echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;

require_once("../modelos/mdb.php");
require_once("../modelos/mconexion.php");


if ($_POST) {

    $idRestaurante= $_POST['idRestaurante'];
    $nombre= $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $nDocumento= $_POST['nDocumento'];
    $idTipo_Documento = $_POST['idTipo_Documento'];
    $celular= $_POST['celular'];
    $indicadores= $_POST['indicadores'];
    $direccion= $_POST['direccion'];
    $idGrupo_Sanguineo   = $_POST['idGrupo_Sanguineo'];
    $codRH= $_POST['codRH'];
    $codSexo = $_POST['codSexo'];
    $email= $_POST['email'];
    $cargo= $_POST['cargo'];
    $fecha_Contratacion=$_POST['fecha_Contratacion'];
//     var_dump(isset($_POST['fecha_Contratacion']));
// var_dump($_POST['fecha_Contratacion'] ?? null);
// exit;
    $estado = $_POST['estado'];

    if (strlen($idRestaurante) > 0 && strlen($nombre) > 0 && strlen($apellidos) > 0 && strlen($nDocumento) > 0 && strlen($idTipo_Documento) > 0 && strlen($celular) > 0 && strlen($direccion) > 0 && strlen($idGrupo_Sanguineo) > 0 && strlen($codRH) > 0 && strlen($codSexo) > 0 && strlen($email) > 0 && strlen($cargo) > 0 && strlen($fecha_Contratacion) > 0 && strlen($estado) > 0) {

        $consultas = new Consultas();

        $mensaje = $consultas->savePersonal($idRestaurante,$nombre,$apellidos,$nDocumento,$idTipo_Documento,$celular,$indicadores,$direccion,$idGrupo_Sanguineo,$codRH,$codSexo,$email,$cargo,$fecha_Contratacion,$estado);

        echo "

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'>

        <div class='container mt-5'>

            <div class='alert alert-success text-center'>

                <h4>✔ Personal registrado correctamente</h4>

            </div>

            <a href='../vistas/insertPersonal.php' class='btn btn-success'>
                Registrar otro
            </a>

            <a href='../vistas/seepersonal.php' class='btn btn-primary'>
                Ver Personal
            </a>

        </div>

        ";

    } else {

        echo "

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'>

        <div class='container mt-5'>

            <div class='alert alert-danger text-center'>

                Debe completar todos los campos obligatorios.

            </div>

            <a href='../vistas/insertPersonal.php' class='btn btn-danger'>

                Regresar

            </a>

        </div>

        ";

    }

}
?>