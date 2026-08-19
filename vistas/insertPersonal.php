
<?php 


require_once("../modelos/mdb.php");
require_once("../modelos/mconexion.php");



// $idGrupo_Sanguineo = $consultas->listarGruposSanguineos();
// $idTipo_Documento = $consultas->listarTipoDocumento();
// $codSexo = $consultas->listarsexo();

$consultas = new Consultas();
$idRestaurante = $consultas->listarRestaurantes();
$idTipo_Documento= $consultas->listarTipoDocumento();
$idGrupo_Sanguineo = $consultas->listarGruposSanguineos();
$codSexo= $consultas->listarSexo();
$codRH = $consultas->listarRH();
// $estado          = $consultas->listarEstado();
$cargo = $consultas->listarCargo();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personal || Chrono</title>
    <link rel="stylesheet" href="../publico/css/style.css">
    <link rel="stylesheet" href="../publico/css/insertarpersonal.css">

</head>

<body>
    <main class="add concesionaria">
        <header>
            <h2>Registrar Personal</h2>
            <a href="ConVehiculos.php" class="back"></a>
            <a href="index.php" class="close"></a>
        </header>
        <form action="../controladores/insertPersonalControllers.php" method="POST" enctype="multipart/form-data">


            <div class="select">
                <select name="idRestaurante" required>
                    <option value="" disabled selected hidden>Restaurante</option>
                            <?php foreach ($idRestaurante as $r):?>
                        <option value="<?=$r['id_restaurante']?>">
                            <?= $r['nombre_Comercial']; ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>



            <input type="text" name="nombres" placeholder="nombres..." required>
             <input type="text" name="apellidos" placeholder="apellidos..." required>
              <input type="number" name="nDocumento" placeholder="número de documento..." required>

<!--             <div class="select">
                <select name="idTipo_Documento" required>
                    <option value="" disabled selected hidden>Tipo Documento</option>
                    <option value="tarjeta_identidad">Tarjeta de identidad</option>
                    <option value="cedula_ciudadania">cedula de ciudadania</option>
                    <option value="nit">NIT</option>
                </select>
            </div> -->



            <div class="select">
                <select name="idTipo_Documento" required>
                    <option value="" disabled selected hidden>Tipo Documento</option>
                    <?php foreach ($idTipo_Documento as $t): ?>
                        <option value="<?= $t['idTipo_Documento'] ?>">
                            <?= htmlspecialchars($t['nombreDocumento']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="number" name="celular" placeholder="celular..." required>

            <input type="number" name="indicadores" placeholder="indicadores...">
            <input type="text" name="direccion" placeholder="direccion" required>

<!--             <div class="select">
                <select name="idGrupo_Sanguineo" required>
                    <option value="" disabled selected hidden>Grupo Sanguineo</option>
                    <option value="O">O</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                </select>
            </div> -->

                        <div class="select">
                <select name="idGrupo_Sanguineo" required>
                    <option value="" disabled selected hidden>Grupo Sanguineo</option>
                    <?php foreach ($idGrupo_Sanguineo as $g): ?>
                        <option value="<?= $g['idGrupo_Sanguineo'] ?>"><!-- AJUSTAR -->
                            <?= htmlspecialchars($g['nombreGrupo_Sanguineo']) ?><!-- AJUSTAR -->
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>


                        <div class="select">
                <select name="codRH" required>
                    <option value="" disabled selected hidden>RH</option>
                    <?php foreach ($codRH as $rh): ?>
                        <option value="<?= $rh['codRH'] ?>">
                            <?= htmlspecialchars($rh['tipoRH']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

<!--              <div class="select">
                <select name="codSexo" required>
                    <option value="" disabled selected hidden>Sexo</option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
            </div>
 -->
                        <div class="select">
                <select name="codSexo" required>
                    <option value="" disabled selected hidden>Sexo</option>
                    <?php foreach ($codSexo as $s): ?>
                        <option value="<?= $s['codSexo'] ?>">
                            <?= htmlspecialchars($s['nombreSexo']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="email" name="email" placeholder="Email..." required>

<!--             <div class="select">
                <select name="cargo" required>
                    <option value="" disabled selected hidden>cargo</option>
                    <option value="cliente">cliente</option>
                    <option value="administrador">administrador</option>
                    <option value="mesero">mesero</option>
                    <option value="jefe_cocina">jefe de cocina</option>
                </select>
            </div> -->

                        <div class="select">
                <select name="cargo" required>
                    <option value="" disabled selected hidden>Cargo</option>
                    <?php foreach ($cargo as $c): ?>
                        <option value="<?= $c['idCargo'] ?>">
                            <?= htmlspecialchars($c['nombreCargo']) ?><!-- AJUSTAR -->
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <label for="fecha">Fecha de contratacion:</label>
            <input type="date" id="fecha_Contratacion" name="fecha_Contratacion" required>



             <div class="select">
                <select name="estado" required>
                    <option value="" disabled selected hidden>Estado</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>


            
            <button type="submit" class="btn-home">Guardar</button>
        </form>
    </main>
</body>

</html>