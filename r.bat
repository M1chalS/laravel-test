@ECHO OFF
ECHO Resetowanie migracji...
php artisan migrate:fresh -q
ECHO Restart zakonczony powodzeniem!
