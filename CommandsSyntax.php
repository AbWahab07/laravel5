php artisan serve / Starts local development server

php artisan -V / Returns version of the Laravel

composer require laravelcollective/html / Adds HTML require to the composer.json file
Schema::defaultStringLength(191); / Add this to AppServiceProvider.php boot() function to remove Specified key was too long error

php artisan help make:controller / Returns help info regarding make the controller command.
php artisan make:controller $controllername  --plain / Creates an empty controller. --plain is a flag which is optional
php artisan make:controller $controllername / Creates a controller with all methods.

php artisan make:migration create_$name_table --create $name / Creates a migration with table $name
php artisan migrate / Creates tables in the database based on migrations
php artisan migrate:rollback / Drop all the tables from the database

php artisan tinker / Opens shell command to interact with the database


php artisan route:list / List all registered routes

php arisan make:request Create$nameRequest / Used to define validation rules when you're adding new records.


