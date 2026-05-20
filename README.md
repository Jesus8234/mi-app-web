# TaskBoard SMR

**TaskBoard SMR** es una aplicación web diseñada para facilitar la gestión de incidencias y averías de los equipos informáticos dentro de un centro educativo. Permite a profesores y técnicos registrar, visualizar y hacer seguimiento del estado de las averías en distintas aulas, manteniendo un registro centralizado y organizado para optimizar el mantenimiento del centro.

Enlace de entrada al frontend de TaskBoard SMR: https://alumno6.dwes.site/

## 🛠️ Tecnologías Utilizadas

Este proyecto ha sido desarrollado utilizando las siguientes tecnologías:

* **Frontend:** HTML5, CSS3 (estilos puros para diseño moderno y responsive) y Google Fonts (Inter).
* **Backend:** PHP.
* **Base de Datos:** MySQL / MariaDB (acceso mediante PDO y consultas preparadas para máxima seguridad).

## 🚀 Instalación y Configuración

Si deseas instalar y ejecutar este proyecto en tu propio entorno local (por ejemplo, usando XAMPP o un servidor web equivalente), sigue estos pasos:

1. **Preparar los archivos:**
   Descarga o clona los archivos del proyecto y colócalos en el directorio público de tu servidor local (como `htdocs` o `www`).

2. **Configurar la Base de Datos:**
   * Crea una nueva base de datos en tu servidor MySQL (por ejemplo, `taskboard_smr`).
   * Crea las tablas necesarias (`aulas` e `incidencias`) e inserta algunos datos de ejemplo en la tabla `aulas`.

3. **Configurar la conexión a la Base de Datos:**
   * En la raíz del proyecto, haz una copia del archivo `config.example.php` y renómbralo a `config.php`.
   * Abre `config.php` y ajusta las variables `$host`, `$dbname`, `$username` y `$password` para que coincidan con tus credenciales.

4. **Ejecutar la aplicación:**
   Abre tu navegador web y accede a `http://localhost/tu_carpeta_del_proyecto`.

---

# 📖 Manual de Usuario

## 1. Introducción al uso

¡Bienvenido! El objetivo principal de esta herramienta de cara al usuario final es mantener un registro organizado de qué equipos fallan, dónde se encuentran y cuál es el estado de la reparación. De este modo, los profesores y técnicos pueden coordinarse de forma eficiente, asegurando que ninguna avería pase desapercibida.

## 2. Pantalla Principal (Listado de Incidencias)
Al entrar a la aplicación, la primera pantalla que verás es el **Listado de Incidencias**. Este panel es el corazón del sistema, ya que muestra, en una tabla muy visual, todas las averías registradas hasta la fecha.

En esta tabla podrás consultar rápidamente la siguiente información para cada caso:
* **Descripción:** Los detalles de la avería o los síntomas del equipo afectado.
* **Fecha:** El día exacto en que se reportó el problema.
* **Aula:** La ubicación (por ejemplo, el Aula 101 o la Biblioteca) donde se encuentra el equipo con problemas.
* **Estado:** Un indicador claro sobre el progreso de la solución. Encontrarás tres estados posibles:
  * *Pendiente:* El problema ha sido reportado pero aún no se ha empezado a trabajar en él.
  * *En proceso:* Un técnico o profesor ya lo está revisando y tratando de solucionarlo.
  * *Resuelta:* El equipo ya ha sido reparado y funciona con total normalidad.

Desde esta misma pantalla cuentas con un botón de acceso directo («+ Añadir Incidencia») para registrar un nuevo problema.

## 3. Reportar una nueva incidencia
Si en tu clase detectas un ordenador, proyector o equipo que no funciona correctamente, registrarlo es muy sencillo. Haz clic en el botón para añadir una nueva incidencia y completa el formulario que aparecerá en pantalla.

Sigue estos sencillos pasos:
1. **Aula Afectada:** Abre el menú desplegable y selecciona el aula exacta donde está el problema. (Esta lista se actualiza automáticamente).
2. **Descripción del Problema:** Escribe con el mayor grado de detalle posible cuál es el fallo. Intenta especificar a qué dispositivo te refieres (ejemplo: "El segundo ordenador de la fila de la ventana de la izquierda no enciende").
3. **Fecha del Reporte:** Selecciona el día en que estás informando del problema.
4. **Estado Inicial:** Por defecto, al crear una nueva avería, selecciona siempre el estado *Pendiente*.
5. Por último, haz clic en el botón **Guardar Incidencia** para que quede registrada para todos los usuarios.

## 4. Consejos de uso
Para que esta herramienta sea realmente efectiva y mantengamos el tablón ordenado, te recomendamos seguir siempre estas buenas prácticas:
* **Evita duplicados:** Antes de registrar un nuevo problema, dale un breve vistazo a la lista de la pantalla principal para comprobar si otro compañero que usó el aula antes ya lo había reportado.
* **La precisión es clave:** Cuantos más detalles des en la descripción (posición del ordenador, mensajes de error en pantalla, etc.), más rápido podrá el equipo técnico encontrar y solucionar el problema.
* **Cierra el ciclo (Actualiza estados):** Es muy importante mantener la información al día. Si reparas una avería leve tú mismo, o si el centro informa que ya no hay fallo, asegúrate de cambiar el estado a *Resuelta*. De este modo todos sabrán qué equipos están listos para usarse.
