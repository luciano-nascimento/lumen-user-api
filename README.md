# To Create 
composer create-project  --prefer-dist laravel/lumen lumen-api
php -S localhost:8000 -t public

# Problems to run artisan
change env to CACHE_DRIVER=array

# Artisan
only create migrations and seeders

# Eloquent
activate on bootstrap/app.php, uncoment $app->withEloquent();
