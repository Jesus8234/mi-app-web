<?php
require_once 'config.php';

// Consulta: todas las incidencias con el nombre del aula (JOIN)
$sql = "SELECT i.id, a.nombre AS aula, i.descripcion, i.fecha, i.estado
        FROM incidencias i
        INNER JOIN aulas a ON i.id_aula = a.id
        ORDER BY i.fecha DESC";

$stmt = $pdo->query($sql);
$incidencias = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Mapa de estado → clase CSS del badge
$badgeClass = [
    'Pendiente'  => 'badge-warning',
    'En proceso' => 'badge-process',
    'Resuelta'   => 'badge-success',
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskBoard SMR - Inicio</title>
    <!-- Fuente Inter (estándar moderno) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Estilos de la aplicación -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Barra de Navegación -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="index.php">⚡ TaskBoard SMR</a>
        </div>
        <div class="nav-links">
            <a href="index.php" class="active">Inicio</a>
            <a href="nuevo.php">Nueva Incidencia</a>
        </div>
    </nav>

    <!-- Contenedor Principal -->
    <div class="container">
        
        <!-- Cabecera de la página -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Listado de Incidencias</h1>
                <p style="color: var(--text-muted); margin-top: 0.5rem; font-size: 0.95rem;">
                    Gestiona y supervisa las averías de los equipos del centro.
                </p>
            </div>
            <a href="nuevo.php" class="btn btn-primary">+ Añadir Incidencia</a>
        </div>

        <!-- Tabla (Card) -->
        <div class="card table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Aula</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($incidencias)): ?>
                        <tr>
                            <td colspan="5" style="text-align:center; color: var(--text-muted);">
                                No hay incidencias registradas.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($incidencias as $row): ?>
                            <?php
                                $estado = htmlspecialchars($row['estado']);
                                $clase  = $badgeClass[$row['estado']] ?? 'badge-warning';
                                $fecha  = date('d/m/Y', strtotime($row['fecha']));
                            ?>
                            <tr>
                                <td><strong>#<?= htmlspecialchars($row['id']) ?></strong></td>
                                <td><?= htmlspecialchars($row['aula']) ?></td>
                                <td><?= htmlspecialchars($row['descripcion']) ?></td>
                                <td><?= $fecha ?></td>
                                <td><span class="badge <?= $clase ?>"><?= $estado ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
