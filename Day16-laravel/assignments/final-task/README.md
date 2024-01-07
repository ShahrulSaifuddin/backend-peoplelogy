1. configure database
    1. go to .env file and configure below:
       DB_CONNECTION=mysql
       DB_HOST=127.0.0.1
       DB_PORT=3306
       DB_DATABASE=laravel
       DB_USERNAME=root
       DB_PASSWORD=
2. create model
    1. php artisan make:model Book -m
    2. make sure the model name is singular
    3. it will auto create table with plural name
3. create schema
    1. go to App\database\migrations
    2. configure column for the tables
4. save changes
    1. php artisan migrate
5. create factory to query data and seed data
    1. php artisan make:factory BookFactory --model=Book
6. seed data
    1. go to database\factories
    2. configure the data
    3. go to database\seeders
    4. add '\App\Models\Book::factory(20)->create();' inside run function
7. save seed changes
    1. php artisan migrate:refresh --seed
    2. commenting out this line '\App\Models\Book::factory(20)->create();' to avoid recreate fake data
