<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# TecnoFusion360

Repositorio del proyecto TecnoFusion360.

## Tabla de Contenidos
1. [Descripción](#descripción)
2. [Integrantes](#integrantes)
3. [Herramientas Utilizadas](#herramientas-utilizadas)
4. [Instalación](#instalación)
5. [Uso](#uso)
6. [Base de Datos](#base-de-datos)
7. [Licencia](#licencia)
8. [Contacto](#contacto)

## Descripción

TecnoFusion360 es un proyecto que [breve descripción del propósito y funcionalidades del proyecto].

## Integrantes

- **Darlin Mariela Ramos Gutiérrez** - SMSS172422
- **Marcela Nohemy Hernández Villatoro** - SMSS072922
- **Marcos Isaí Brioso Benavides** - SMSS137422
- **Anderson José Berrios Diaz** - SMSS100222
- **Erick David Munguía Zelaya** - SMSS020522
- **Saúl Salomón Soto Machuca** - SMSS057922

## Herramientas Utilizadas

- **XAMPP**: PHP 8.2.12
- **Laravel**: 2.7.7
- **Node.js**: v20.14.01

## Instalación

Para instalar y configurar este proyecto, sigue estos pasos:

1. Clonar el repositorio:
    ```sh
    git clone https://github.com/brioso22/TecnoFusion.git
    ```

2. Navegar al directorio del proyecto:
    ```sh
    cd TecnoFusion
    ```

3. Instalar dependencias de PHP:
    ```sh
    composer install
    ```

4. Instalar dependencias de Node.js:
    ```sh
    npm install
    ```

5. Configurar el archivo de entorno:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

## Uso

Para ejecutar el proyecto, utiliza los siguientes comandos:

1. Iniciar el servidor de Laravel:
    ```sh
    php artisan serve
    ```

2. Iniciar el entorno de desarrollo de Node.js:
    ```sh
    npm run dev
    ```

## Base de Datos

Si el proyecto incluye una base de datos, sigue estos pasos para configurarla:

1. Importar el dump de la base de datos:
    ```sh
    mysql -u [usuario] -p [nombre_base_datos] < database_dump.sql
    ```

2. Configurar la conexión a la base de datos en el archivo `.env`:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=[nombre_base_datos]
    DB_USERNAME=[usuario]
    DB_PASSWORD=[contraseña]
    ```

El dump de la base de datos se encuentra en el archivo `database_dump.sql`.

## Licencia

Este proyecto está licenciado bajo la [MIT License](https://opensource.org/licenses/MIT).

## Contacto

Para más información o preguntas, puedes contactarnos:

- **Darlin Mariela Ramos Gutiérrez** - SMSS172422
- **Marcela Nohemy Hernández Villatoro** - SMSS072922
- **Marcos Isaí Brioso Benavides** - SMSS137422
- **Anderson José Berrios Diaz** - SMSS100222
- **Erick David Munguía Zelaya** - SMSS020522
- **Saúl Salomón Soto Machuca** - SMSS057922

