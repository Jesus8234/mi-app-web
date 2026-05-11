<?php
require_once 'config.php';

// Solo procesar si la petición viene por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Recoger y sanear los datos del formulario
$descripcion = trim($_POST['descripcion'] ?? '');
$fecha = trim($_POST['fecha'] ?? '');
$estado = trim($_POST['estado'] ?? '');
$id_aula = (int) ($_POST['id_aula'] ?? 0);

// Validación básica: ningún campo puede estar vacío / fuera de rango
if ($descripcion === '' || $fecha === '' || $estado === '' || $id_aula <= 0) {
    // En un proyecto real podrías redirigir con un mensaje de error
    die('Error: todos los campos son obligatorios.');
}

// INSERT con consulta preparada (evita inyección SQL)
$sql = "INSERT INTO incidencias (descripcion, fecha, estado, id_aula)
        VALUES (:descripcion, :fecha, :estado, :id_aula)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':descripcion' => $descripcion,
    ':fecha' => $fecha,
    ':estado' => $estado,
    ':id_aula' => $id_aula,
]);

// Redirigir al listado tras la inserción exitosa
header('Location: index.php');
exit;
