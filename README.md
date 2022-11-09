<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

##LANDING PAGE Y FORMULARIO DE CONTACTO

1. Landingpage

- Crear ruta y vista "landingpage"
- Agregar "template" gratuito y agregar css y js en /public
- Implementar template en landingpage

2. Contacto

- Crear ruta y vista "contacto"
- Crear un formulario con inputs: nombre, correo, comentario
- No se requiere implementar template
- Agregar un parámetro opcional llamado codigo
- Si se recibe el código 1234, se deberá pre-llenar el input para nombre y correo con valores (de prueba, es decir falsos).

Pistas:
- Desde dentro de la función tipo closure en web.php se puede verificar cuando se reciba o no el código.
- Si se recibe y es igual a 1234, entonces se pueden asignar las variables para nombre y correo
- Si no se recibe, se asignan dichas variables como cadena vacia
- Se pasan las variables a la vista
- Para simplificar el mostrar o no el valor de la variable, es puede utilizar la expresión: {{ $nombre ?? ' ' }}
  Lo que hace, es que, si $nombre tiene un valor, lo mostrará, si no, pondrá una cadena vacía.


3. Controlador

- Crear controlador SitioController
- Implementar rutas landingpage y contacto en controlador

4. Recepción, validación

5. Creación de tabla y guardar registros

6. Creación de Tests
