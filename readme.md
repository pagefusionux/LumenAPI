LumenAPI

Creating a migrations database schema:
- `$ php artisan make:migration create_books_table --create=books`
- This will create a migration file under database/migrations
- This will create the CreateBooksTable class where you add your schema information:
  ~~~~
  Schema::create('books', function(Blueprint $table) {
    $table->increments('id');
    $table->string('first_name');
    $table->string('last_name');
    $table->string('birthdate');
    $table->timestamps(); // created_at, updated_at
    $table->softDeletes(); // deleted_at
    
  });
  ~~~~
- Now, run the artisan migrate command:
  - `$ php artisan migrate`

Field types:
- See https://laravel.com/docs/5.0/schema#adding-columns

Creating a Model:
- Create file 'app/People.php'
- Add the following:
  ~~~~
  <?php namespace App;
    
  use Illuminate\Database\Eloquent\Model;
    
  class People extends Model {
       
       protected $fillable = ['first_name', 'last_name', 'birthdate'];
       
  }
  ?>
  ~~~~
  
Creating a Controller:
- Create file '/app/Http/Controllers/PeopleController.php'
  ~~~~
  (See file for example CRUD functions.)
  ~~~~
---
Tutorial: 
RESTful API in Lumen, A Laravel Micro Framework
https://coderexample.com/restful-api-in-lumen-a-laravel-micro-framework/
