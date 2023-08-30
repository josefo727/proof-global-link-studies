# Student Notes Manager

## Descripción

Este proyecto es una Single Page Application (SPA) construida con Laravel y Livewire para gestionar notas de estudiantes. Permite añadir, listar y eliminar estudiantes, cursos y resultados de exámenes. Incluye validaciones de edad y correo electrónico.

## Características Destacadas

- SPA con Laravel y Livewire
- Validaciones en tiempo real
- Interfaz intuitiva
- Barra de navegación para fácil acceso
- Laravel Sail para contenerización

## Requisitos

- Docker
- Composer

## Instalación con Laravel Sail

1. Clonar el repositorio
2. Navegar hasta el directorio del proyecto
3. Ejecutar el siguiente comando para instalar las dependencias:

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

4. Ejecutar migraciones y seeders para crear y llenar las tablas:

```bash
php artisan migrate --seed
```

## Acceso
Usuario: josefo727@gmail.com
Contraseña: password

Utiliza estas credenciales para ingresar al sistema después de llenar la base de datos.
