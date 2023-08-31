# API PHP Test SISMA

API Project in php for SISMA.

Use Visual code for a better experience.

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

## Instalación

Instalar en un servidor php (Recomiendo Laragon) o seguir los siguientes pasos:

Clonar el repositorio

```bash
git clone https://github.com/your_username_/Project-Name.git
```

Ingresar a la carpeta del proyecto

```bash
cd my-project
```

Instalar dependencias

```bash
composer install
```

Ejecutar Servidor en consola

```bash
php -S localhost:8000 -t public
```

## API Reference

Todas las url responden a los requerimientos exigidos en el backend.

#### Registro de tareas.

POST http://localhost:8000/api/tasks

```bash
{
    "tarea": "Tarea 1",
    "completado": 1
}
```

#### Listar Tareas.

GET http://localhost:8000/api/tasks o
http://localhost:8000/

#### Buscar Tarea.

GET http://localhost:8000/api/tasks/:id

#### Editar Tarea.

PUT http://localhost:8000/api/tasks/:id

```bash
{
    "tarea": "Tarea 1",
    "completado": 1
}
```

#### Eliminar Tarea.

DELETE http://localhost:8000/api/tasks/:id

## Authors

-   [https://www.fgaviria.com](https://www.fgaviria.com)

-   [@gaviria](https://www.github.com/gaviria)

## Request Documentation

[Documentation](https://linktodocumentation)
