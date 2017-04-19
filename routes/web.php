<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
      return "Lumen RESTful API: /";
});

// People
$app->group(['prefix' => 'api/v1'], function($app)
{
  $app->get('people','PeopleController@index');

  $app->get('people/deleted','PeopleController@getAllDeletedPeople');

  $app->get('people/deleted/{id}','PeopleController@getDeletedPeople');

  $app->get('people/{id}','PeopleController@getPeople');

  $app->post('people','PeopleController@createPeople');

  $app->put('people/{id}','PeopleController@updatePeople');

  $app->delete('people/{id}','PeopleController@deletePeople');
});
