# Estructuras de control en PHP

Ejemplos de código del documento **«Estructuras de control en PHP»**, preparado para el módulo optativo *Introducción a la programación* de 2º ASIR (RA1, criterios f y g).

Cada fichero corresponde a un bloque numerado del documento: `codigo1.php` es el **Código 1**, `codigo2.php` el **Código 2**, y así sucesivamente. Los ejemplos están ambientados en tareas habituales de administración de sistemas.

## Requisitos

- PHP 8 (por ejemplo, el incluido en XAMPP 8.0). El código 8 usa `match`, que no existe en PHP 7.

## Cómo ejecutarlos

**En el navegador.** Copia la carpeta en `/opt/lampp/htdocs/` y abre, por ejemplo:

```
http://localhost/estructuras-control-php/codigo1.php
```

**En la terminal.** Desde la carpeta de los ejemplos:

```bash
/opt/lampp/bin/php codigo1.php
```

Cada fichero indica en su cabecera la salida esperada. Además, empieza con `header("Content-Type: text/plain; charset=utf-8");` para que los saltos de línea se vean correctamente en el navegador; en la terminal esa línea no tiene efecto.

## Índice de ejemplos

| Fichero | Estructura | Descripción |
| --- | --- | --- |
| [`codigo1.php`](codigo1.php) | Secuencial | Calcula el espacio libre y el porcentaje de uso de un disco ejecutando las instrucciones una tras otra. |
| [`codigo2.php`](codigo2.php) | `if` | Muestra una alerta solo si el uso del disco supera el 90 %. |
| [`codigo3.php`](codigo3.php) | `if...else` | Indica si el servicio Apache está activo o hay que iniciarlo. |
| [`codigo4.php`](codigo4.php) | `if...elseif...else` | Clasifica el uso de CPU en OK, AVISO o CRÍTICO; el orden de las condiciones importa. |
| [`codigo5.php`](codigo5.php) | `if` anidados | Decide si se permite el acceso según el usuario y si la conexión es remota. |
| [`codigo6.php`](codigo6.php) | `switch` | Muestra el significado de un código de estado HTTP, con `break` y `default`. |
| [`codigo7.php`](codigo7.php) | `switch` con casos agrupados | Elige copia de seguridad completa en fin de semana e incremental el resto de días. |
| [`codigo8.php`](codigo8.php) | `match` (PHP 8) | Versión compacta del ejemplo de códigos HTTP, con varios valores en una rama. |
| [`codigo9.php`](codigo9.php) | Operador ternario | Muestra un mensaje distinto según haya o no usuarios conectados. |
| [`codigo10.php`](codigo10.php) | `while` | Cuenta atrás antes de reiniciar un servidor. |
| [`codigo11.php`](codigo11.php) | `while` | Repite intentos de conexión hasta que uno tiene éxito. |
| [`codigo12.php`](codigo12.php) | `do...while` | Compara `while` y `do...while` con una condición falsa: solo el segundo se ejecuta una vez. |
| [`codigo13.php`](codigo13.php) | `for` | Genera un rango de direcciones IP. |
| [`codigo14.php`](codigo14.php) | `for` con acumulador | Suma el tamaño de varios ficheros de log recorriendo un array con `count()`. |
| [`codigo15.php`](codigo15.php) | `foreach` | Recorre un array indexado de servidores y un array asociativo de cuotas de usuario. |
| [`codigo16.php`](codigo16.php) | Bucles anidados | Genera los nombres de los puestos de un aula de 3 filas por 4 puestos. |
| [`codigo17.php`](codigo17.php) | `break` | Busca el primer puerto libre y deja de recorrer la lista al encontrarlo. |
| [`codigo18.php`](codigo18.php) | `continue` | Lee un fichero de configuración saltando las líneas vacías y los comentarios. |
| [`codigo19.php`](codigo19.php) | Programa completo | Avisa de los usuarios que superan la cuota y calcula el total usado, combinando `foreach`, `if`, acumulador y contador. |
| [`codigo20.php`](codigo20.php) | Errores frecuentes | Muestra el efecto de un punto y coma de más después de un `if` y de un `for`: no da error, pero no hace lo que parece. |

## Para practicar

- Cambia los datos de entrada de cada ejemplo y comprueba si la salida es la que esperabas.
- En `codigo4.php`, prueba los valores límite 69, 70, 89 y 90, e invierte el orden de las condiciones para ver qué falla.
- En `codigo6.php`, quita un `break` y observa qué ocurre.
- En `codigo14.php`, pon un punto de interrupción con Xdebug dentro del bucle y sigue cómo cambian `$i` y `$total` en cada iteración.
