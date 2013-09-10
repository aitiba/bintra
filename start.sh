#Tener en cuenta que los campos created_at y updated_at los mete el.

Cargar grupos: php artisan generate:scaffold groups --fields="name:string" && php artisan migrate
Cargar proyectos:  php artisan generate:scaffold projects --fields="name:string,description:text,inicio:datetime,cost:float" && php artisan migrate