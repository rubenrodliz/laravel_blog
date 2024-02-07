# Laravel Blog

Este proyecto consiste en una plataforma de mensajería donde los distintios usuarios pueden postear y entre ellos realizar comentarios. 
La plataforma tienen distintos roles que ofrecen distintos privilegios.
Los posts son administrables por los usuarios: crear, eliminar y editar.

## Requisitos Previos

Antes de comenzar, deberías asegurarte de tener instalado lo siguiente:
-   PHP => 8.2.
-   Composer
-   MySQL
-   NPM
-   Node

## Instalación

Para poder ejecutar el proyecto, sigue los siguientes pasos:

1. Clonar el repositorio

Primero, debemos obtener el repositorio en local. Para ello, podemos ejecutar el siguiente comando en la terminal:
`git clone https://github.com/rubenrodliz/laravel_blog.git`

2. Instalar las dependencias de Composer

Nos ubicaremos dentro del proyecto e instalaremos las dependencias. Para ello, podemos ejecutar el siguiente comando en la terminal:
`composer install`

3. Configurar el entorno

Copiaremos el fichero `.env.example` y lo renombraremos como `.env` y, actualizaremos los datos según nuestro sistema. **Importante tener introducidos los datos de la base de datos.**

4. Generar la clave de la aplicación

Debemos generar una clave única para que el proyecto funcione. Para ello, podemos ejecutar el sigueinte comando en la terminal:

`php artisan key:generate`

5. Migraciones y Seeders de la Base de Datos

Ahora, falta obtener las tablas y rellenarla de datos para poder trabajar con la aplicación:

`php artisan migrate`<br>
`php artisan db:seed`

## Ejecución del proyecto

Para ejecutar el proyecto en local, utilizaremos el servidor intergrado de Laravel. Para ello, podemos ejecutar el sigueinte comando en la terminal:

`php artisan serve`

*Esto iniciará un servidor web en `http://localhost:8000` por defecto, donde podrás acceder a la aplicación.*

Por último, debido a que la aplicación utiliza la herramienta **Tailwind**, debemos ejecutar el compilador **npm** para que los estilos se vean reflejados. Para ello, podemos ejecutar el sigueinte comando en la terminal:

`npm run dev`