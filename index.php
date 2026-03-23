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
                    <!-- NOTA: Esto es código HTML estático para que veas el diseño.
                         En PHP, este bloque <tr> se generará dentro de un bucle foreach/while iterando sobre los resultados MySQL -->
                    
                    <tr>
                        <td><strong>#1</strong></td>
                        <td>Aula 101</td>
                        <td>El proyector no enciende, parpadea luz roja al intentarlo arrancar.</td>
                        <td>20/03/2026</td>
                        <td><span class="badge badge-warning">Pendiente</span></td>
                    </tr>
                    
                    <tr>
                        <td><strong>#2</strong></td>
                        <td>Aula de Informática 1</td>
                        <td>Falta el ratón en el equipo del profesor de la mesa central.</td>
                        <td>21/03/2026</td>
                        <td><span class="badge badge-process">En proceso</span></td>
                    </tr>
                    
                    <tr>
                        <td><strong>#3</strong></td>
                        <td>Aula de Informática 2</td>
                        <td>Pantalla azul (BSOD) al iniciar Windows en el alumno 5.</td>
                        <td>22/03/2026</td>
                        <td><span class="badge badge-warning">Pendiente</span></td>
                    </tr>
                    
                    <tr>
                        <td><strong>#4</strong></td>
                        <td>Aula 102</td>
                        <td>No hay conexión a internet en toda la fila de la derecha.</td>
                        <td>22/03/2026</td>
                        <td><span class="badge badge-success">Resuelta</span></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
