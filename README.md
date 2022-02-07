
# Database configuration & migrations

### Migrations are like version control for your database



## Steps to connect Database to your app


 - Create a DB in phpmyadmin 
 -   (to clear cache and reconfig) ---php artisan config:Cache
- first migration    run ---  php artisan migrate


### Create table using migration 

- php artisan make:migration create_customers_table 
- then create table schema and run cmd ---php artisan migrate
- to roll back migrate --- php artisan migrate:rollback
- sometime reln is not establised among table so we run migarytion fresh , so it will refresh all --- php artisan migrate:refresh


### add column 
-php artisan make:migration add_column_to_custmers_table
