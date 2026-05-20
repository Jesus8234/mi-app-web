<?php
// ==========================================
// ARCHIVO DE CONFIGURACIÓN DE EJEMPLO
// ==========================================
// Instrucciones:
// 1. Renombra este archivo a 'config.php'
// 2. Sustituye los valores ficticios por tus credenciales reales.
// ¡NUNCA subas tu 'config.php' real con contraseñas a un repositorio público!

$host     = 'localhost';                  // El servidor de base de datos (suele ser localhost)
$dbname   = 'nombre_de_tu_base_de_datos'; // El nombre de la base de datos de la aplicación
$username = 'tu_usuario';                 // Tu usuario de MySQL
$password = 'tu_contraseña_secreta';      // Tu contraseña de MySQL

try {
    // Establecemos la conexión utilizando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configurar PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
