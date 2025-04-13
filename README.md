<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## 📌 Descripción del Proyecto

Este repositorio es un proyecto basado en el framework **Laravel**. En él se utilizan modelos como `User` y `Post`, incluyendo sus relaciones, migraciones y uso de Tinker para manipular datos desde consola.

---

## ⚙️ Requisitos del Sistema

- PHP >= 8.1
- Composer
- MySQL o MariaDB
- Node.js y npm (opcional para compilar assets)
- Laravel 10.x o superior

---

## 🚀 Instalación del Proyecto

```bash
# 1. Clona el repositorio
git clone https://github.com/Perezcortes/proyecto-laravel-9.git
cd nombre-del-proyecto

# 2. Instala las dependencias PHP
composer install

# 3. Copia el archivo de entorno
cp .env.example .env

# 4. Genera la clave de la aplicación
php artisan key:generate

# 5. Configura la base de datos en el archivo .env

# 6. Ejecuta las migraciones
php artisan migrate

# 7. Inicia el servidor de desarrollo
php artisan serve
```

---

## 🛠 Comandos Útiles

| Comando                                | Descripción                                    |
|----------------------------------------|------------------------------------------------|
| `php artisan route:list`              | Muestra todas las rutas registradas           |
| `php artisan make:model Post -mcr`    | Crea un modelo con migración, controlador y recurso |
| `php artisan migrate`                 | Ejecuta las migraciones                       |
| `php artisan migrate:fresh`           | Elimina y vuelve a crear todas las tablas     |
| `php artisan db:seed`                 | Ejecuta las clases Seeder registradas         |
| `php artisan tinker`                  | Inicia consola interactiva de Laravel         |
| `php artisan make:factory`           | Crea una fábrica para generar datos de prueba |
| `php artisan make:seeder`            | Crea un Seeder para poblar tablas             |

---

## 🔄 Relaciones de Modelos

Relación uno a muchos entre `User` y `Post`.

```php
// En User.php
public function posts() {
    return $this->hasMany(Post::class);
}

// En Post.php
public function user() {
    return $this->belongsTo(User::class);
}
```

---

## 🧪 Datos de Prueba con Tinker

```bash
php artisan tinker
```

```php
// Crear un usuario
$user = \App\Models\User::factory()->create();

// Crear un post relacionado
$post = \App\Models\Post::create([
  'title' => 'Mi primer post',
  'content' => 'Este es el contenido del post',
  'user_id' => $user->id,
]);

// Verificar relación
$user->posts;
$post->user;
```

---

## 🧯 Errores Comunes y Soluciones

| Error                                                                  | Solución                                                                 |
|------------------------------------------------------------------------|--------------------------------------------------------------------------|
| `SQLSTATE[HY000] [1045] Access denied for user`                        | Verifica usuario y contraseña en el archivo `.env`                      |
| `Target class [XController] does not exist`                            | Asegúrate de tener el controlador creado y con el namespace correcto   |
| `php artisan migrate` no crea las tablas                              | Usa `php artisan migrate:fresh` o revisa la conexión a la base de datos |
| Error al iniciar Laravel (`APP_KEY missing`)                          | Ejecuta `php artisan key:generate`                                      |
| `.env no encontrado`                                                  | Copia `.env.example` como `.env`                                        |

---

## 📚 Documentación Oficial

- [Documentación de Laravel](https://laravel.com/docs)
- [Laracasts](https://laracasts.com) — Más de 2000 videos sobre Laravel y tecnologías modernas

---

## 🙋‍♂️ Autor

- **Usuario:** [@Perezcortes](https://github.com/Perezcortes)
- **Correo electrónico:** 9531447499a@gmail.com

---

## 📝 Licencia

El framework Laravel es open-sourced y está licenciado bajo la [MIT License](https://opensource.org/licenses/MIT).

---

## 🎁 Créditos del Framework

Laravel is a web application framework with expressive, elegant syntax...
