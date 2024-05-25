## Notas de Desarrollo

1. Laravel API

Para habilitarla, se usó: php artisan install:api

2. Laravel Breeze: 
Template de autenticación sencillo con todas las características auth de Laravel

3. Configuración con Supabase (POSGRES)
Se cambió de sqlite (default) por Supabase

4. Configuración de Database Seeders
Se configuraron seeders para los modelos Post y User para popular fácilmente la BD

5. Separar Controllers para Web y Api respectivamente, para tener más orden y flexibilidad

6. AdminMiddleware para gestión de roles (Admin)

7. Since Laravel 11, there is no more Http Kernel file in Http folder




