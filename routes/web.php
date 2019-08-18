<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route::get('/application', 'PagesController@application');


Route::resource('students', 'StudentsController');
// Route::get('/students', 'StudentsController@index'); 

// Route::get('/students/create', 'StudentsController@create');

// Route::get('/students/{student}', 'StudentsController@show');

// Route::post('/students', 'StudentsController@store');

// Route::get('/students/{student}/edit', 'StudentsController@edit');

// Route::patch('/students/{student}/', 'StudentsController@update');

// Route::delete('/students/{student}', 'StudentsController@destroy');


/*
Route::get('/students/create', 'StudentsController@create');
^^^^^When the user makes a get request to slash projects and a commmon convention is this form (/create).
When I visit this endpoint (('/projects/create')) we should load an action called create(@create).  
This action is respondible for displaying a view to create a new project.
/*


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
