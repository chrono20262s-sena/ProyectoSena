<?php

require_once("../modelos/mdb.php");
require_once("../modelos/mconexion.php");

$msj = null;

$consultas = new Consultas();

$id = $_POST['id'];

$idRestaurante      = $_POST['idRestaurante'];
$nombre             = $_POST['nombres'];
$apellidos          = $_POST['apellidos'];
$nDocumento         = $_POST['n_Documento'];
$idTipo_Documento   = $_POST['idTipo_Documento'];
$celular            = $_POST['celular'];
$indicadores        = $_POST['indicadores'];
$direccion          = $_POST['direccion'];
$idGrupo_Sanguineo  = $_POST['idGrupo_Sanguineo'];
$codRH              = $_POST['codRH'];
$codSexo             = $_POST['codSexo'];
$email              = $_POST['gmail'];
$cargo              = $_POST['cargo'];
$fechacontratacion  = $_POST['fecha_Contratacion'];
$estado             = $_POST['estado'];

if (

    strlen($idRestaurante) > 0 &&
    strlen($nombre) > 0 &&
    strlen($apellidos) > 0 &&
    strlen($nDocumento) > 0 &&
    strlen($idTipo_Documento) > 0 &&
    strlen($celular) > 0 &&
    strlen($direccion) > 0 &&
    strlen($idGrupo_Sanguineo) > 0 &&
    strlen($codRH) > 0 &&
    strlen($codSexo) > 0 &&
    strlen($email) > 0 &&
    strlen($cargo) > 0 &&
    strlen($fechacontratacion) > 0 &&
    strlen($estado) > 0

) {

    $msj = $consultas->modificarPersonal("idRestaurante", $idRestaurante, $id);
    $msj = $consultas->modificarPersonal("nombres", $nombre, $id);
    $msj = $consultas->modificarPersonal("apellidos", $apellidos, $id);
    $msj = $consultas->modificarPersonal("n_Documento", $nDocumento, $id);
    $msj = $consultas->modificarPersonal("idTipo_Documento", $idTipo_Documento, $id);
    $msj = $consultas->modificarPersonal("celular", $celular, $id);
    $msj = $consultas->modificarPersonal("indicadores", $indicadores, $id);
    $msj = $consultas->modificarPersonal("direccion", $direccion, $id);
    $msj = $consultas->modificarPersonal("idGrupo_Sanguineo", $idGrupo_Sanguineo, $id);
    $msj = $consultas->modificarPersonal("codRH", $codRH, $id);
    $msj = $consultas->modificarPersonal("codSexo", $codSexo, $id);
    $msj = $consultas->modificarPersonal("gmail", $email, $id);
    $msj = $consultas->modificarPersonal("cargo", $cargo, $id);
    $msj = $consultas->modificarPersonal("fecha_Contratacion", $fechacontratacion, $id);
    $msj = $consultas->modificarPersonal("estado", $estado, $id);

    echo $msj;
    echo "<div><a href='../vistas/seepersonal.php'>Ver Personal</a></div>";

} else {

    echo "Por favor rellene todos los campos obligatorios.";

}

?>