
# Laravel Blog

El proyecto consiste en una plataforma de mensajería bajo persistencia donde los usuarios pueden crear hilos y publicar comentarios.



## Tecnologías

**Cliente:** HTML, TailwindCSS, Alpine.js

**Servidor:** PHP 8.3, Laravel 10, SQL, Node 21.7.1


## Ejecutarlo localmente

Clonar el proyecto

```bash
  git clone https://github.com/rubenrodliz/laravel_blog.git
```

Acceder al proyecto

```bash
  cd laravel_blog
```

Modificar el .env
```bash
  mv .env.example .env
```

Instalar dependencias

```bash
  composer install && npm install
```

Introducir clave

```bash
  php artisan key:generate
```

Ejecutar las migraciones

```bash
  php artisan migrate -seed  
```

Ejecutar el servidor

```bash
  php artisan serve
  npm run dev
```


## Características

- Autenticación
- Subir comentarios
- Editar información de usuario
- CRUD de comentarios e hilos


## Autor

- [@rubenrodliz](https://www.github.com/rubenrodliz)

