1. composer
2. composer global  require laravel install ====> installa el laravel en todo el equipo
3. laravel new (nombre projecto) ====> crea el nuevo  projecto en la carpeta elegida
4. php artisan make:model alumno ====> crea en la carpeta  model la nueva clase  
5. php artisan make:controller AlumnoController ====>  crea en la carpeta controller el nuevo controller
6. php artisan make:migration create_alumnos_table ====> crea en la carpeta migration la nueva migracion 
7. php artisan make:seeder AlumnoSeeder ====> crea en la carpeta seeder la nueva seeder
8. php artisan migrate ====> es la que se usa para migrar 
9. php artisan migrate:fresh --seed ====> para guardar los alumnos creados borra lo hecho ya y lo vuelve a poner actualizado
10.php artisan make:middleware (nombre de la carpeta ) ====>  crea en la carpeta middleware  la nueva middleware y luego eso lo pones en el kernel