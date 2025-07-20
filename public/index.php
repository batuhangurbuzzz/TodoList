<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();



use App\Core\Route;

Route::add('/', 'Front\HomeController@index');
Route::add('example', 'Front\ExampleController@index');
Route::add('task', 'Front\TaskController@index');
Route::add('create/task', 'Front\TaskController@create');
Route::add('update/task/{id}', 'Front\TaskController@update');
Route::add('delete/task/{id}', 'Front\TaskController@delete');







// Route Oluşturma
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if($uri === ''){
    $uri = '/';
}

Route::dispatch($uri);

















?>