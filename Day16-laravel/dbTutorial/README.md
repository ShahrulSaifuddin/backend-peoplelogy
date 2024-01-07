1. to create table
   => php artisan make:migration create_students_table

2. to configure schema
   => configure columns on migration

3. to configure database
   => configure .env

4. to save database changes
   => php artisan migrate

5. check status
   => php artisan migrate:status

6. to delete everything in database
   => php artisan migrate:reset

7. Rollback
   => php artisan migrate:rollback

8. Refresh (rollback and migrate again)
   => php artisan migrate:refresh

9. update table
   => php artisan make:migration update_students_table --table=students
   => $table->renameColumn('name', 'user')
   => $table->dropColumn('email');
