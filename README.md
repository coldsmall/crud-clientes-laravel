# 🧾 CRUD de Clientes - Laravel 11

Sistema web básico para la gestión de clientes que permite crear, consultar, editar y eliminar registros utilizando Laravel 11.

---

## 🚀 Características

* CRUD completo de clientes
* Paginación de registros
* Validación de datos con Form Request
* Soft Delete (eliminación lógica)
* Papelera (ver, restaurar y eliminar definitivamente)
* Interfaz con Bootstrap
* Confirmaciones con SweetAlert

---

## 🧱 Requisitos

Antes de instalar el proyecto, asegúrate de tener:

* PHP >= 8.1
* Composer
* MySQL o MariaDB
* Node.js (opcional para assets)

---

## ⚙️ Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/coldsmall/crud-clientes-laravel.git
cd CRUD-Clientes-Laravel11
```

---

### 2. Instalar dependencias

```bash
composer install
```

---

### 3. Configurar entorno

Copiar el archivo `.env`:

```bash
cp .env.example .env
```

Editar las credenciales de base de datos en `.env`:

```env
DB_DATABASE=nombre_db
DB_USERNAME=root
DB_PASSWORD=
```

---

### 4. Generar clave de aplicación

```bash
php artisan key:generate
```

---

### 5. Ejecutar migraciones y seeders

```bash
php artisan migrate --seed
```

Esto creará las tablas y generará datos de prueba.

---

### 6. Ejecutar el servidor

```bash
php artisan serve
```

Abrir en navegador:

```
http://127.0.0.1:8000
```

---

## 🧠 Estructura del proyecto

* `app/Models/Cliente.php` → Modelo con SoftDeletes
* `app/Http/Controllers/ClienteController.php` → Lógica CRUD
* `app/Http/Requests/` → Validaciones
* `resources/views/clientes/` → Vistas Blade
* `routes/web.php` → Rutas del sistema

---

## 🔄 Funcionalidades

### Clientes

* Listado con paginación
* Crear cliente
* Editar cliente
* Eliminar cliente (soft delete)

### Papelera

* Ver clientes eliminados
* Restaurar cliente
* Eliminar definitivamente

---

## ⚠️ Problemas comunes

* **Error 404 en rutas personalizadas**

  * Verificar orden de rutas en `web.php`

* **Error columna `deleted_at`**

  * Ejecutar:

  ```bash
  php artisan migrate:fresh
  ```

* **Botón eliminar no funciona**

  * Verificar carga de SweetAlert en layout

---

## 🧪 Comandos útiles

```bash
php artisan route:list
php artisan migrate:fresh --seed
php artisan route:clear
php artisan cache:clear
```

---

## 📦 Tecnologías utilizadas

* Laravel 11
* Bootstrap 5
* SweetAlert2
* MySQL

---

## 📌 Notas

Este proyecto fue desarrollado con fines educativos para demostrar el uso de Laravel en un CRUD básico con buenas prácticas.

---

## 👤 Autor

Emanuel Mendez 
GitHub: https://github.com/coldsmall
