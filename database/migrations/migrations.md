

Creating a migrations database schema:
- `$ php artisan make:migration create_books_table --create=books`
- This will create a migration file under database/migrations
- This will create the CreateBooksTable class where you add your schema information:
  ~~~~
  Schema::create('books', function(Blueprint $table) {
    $table->increments('id');
    $table->string('title');
    $table->string('author');
    $table->string('isbn');
    $table->timestamps(); // created_at, updated_at
  });
  ~~~~
- Now, run the artisan migrate command:
  - `$ php artisan migrate`

The books table along with its fields are created:
- id
- title
- author
- isbn
- created_at
- updated_at

---
Tutorial: 
RESTful API in Lumen, A Laravel Micro Framework
https://coderexample.com/restful-api-in-lumen-a-laravel-micro-framework/
