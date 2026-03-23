<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Incidencia - TaskBoard SMR</title>
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
            <a href="index.php">Inicio</a>
            <a href="nuevo.php" class="active">Nueva Incidencia</a>
        </div>
    </nav>

    <!-- Contenedor Principal -->
    <div class="container">
        
        <!-- Cabecera de la página -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Registrar Nueva Incidencia</h1>
                <p style="color: var(--text-muted); margin-top: 0.5rem; font-size: 0.95rem;">
                    Rellena el formulario con los detalles del problema técnico.
                </p>
            </div>
            <a href="index.php" class="btn btn-outline">Volver al listado</a>
        </div>

        <!-- Formulario (Centrado) -->
        <div class="card" style="max-width: 650px; margin: 0 auto;">
            <!-- El atributo action debe apuntar al script PHP que procesará el registro -->
            <form action="guardar_incidencia.php" method="POST">
                
                <!-- SELECT DINÁMICO (Aulas) -->
                <div class="form-group">
                    <label for="id_aula" class="form-label">Aula Afectada</label>
                    <select name="id_aula" id="id_aula" class="form-control" required>
                        <option value="" disabled selected>-- Selecciona un Aula disponible --</option>
                        
                        <!-- NOTA: En la integración con PHP, aquí utilizarías un bucle para obtener las Aulas 
                             desde la base de datos e inyectarlas aquí. Ejemplo:
                             <option value="<?= $aula['id'] ?>"><?= $aula['nombre'] ?></option>
                        -->
                        
                        <!-- Ejemplo visual estático -->
                        <option value="1">Aula 101 (Teoría)</option>
                        <option value="2">Aula 102 (Teoría)</option>
                        <option value="3">Aula de Informática 1</option>
                        <option value="4">Aula de Informática 2</option>
                        <option value="5">Biblioteca</option>
                    </select>
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="form-group">
                    <label for="descripcion" class="form-label">Descripción del Problema</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Explica detalladamente cuál es la avería, el equipo afectado o los síntomas..." required></textarea>
                </div>

                <!-- FECHA -->
                <div class="form-group">
                    <label for="fecha" class="form-label">Fecha del Reporte</label>
                    <!-- Al integrar con PHP, puedes usar un value="date('Y-m-d')" o usar DATETIME -->
                    <input type="date" name="fecha" id="fecha" class="form-control" required>
                </div>

                <!-- ESTADO -->
                <div class="form-group">
                    <label for="estado" class="form-label">Estado Inicial</label>
                    <select name="estado" id="estado" class="form-control" required>
                        <!-- Forzamos los valores del ENUM exactos de la tabla -->
                        <option value="Pendiente" selected>Pendiente</option>
                        <option value="En proceso">En proceso</option>
                        <option value="Resuelta">Resuelta</option>
                    </select>
                </div>

                <!-- BOTÓN SUBMIT -->
                <div style="margin-top: 2rem; display: flex; justify-content: flex-end;">
                    <button type="submit" class="btn btn-primary">
                        Guardar Incidencia
                    </button>
                </div>

            </form>
        </div>

    </div>

</body>
</html>
