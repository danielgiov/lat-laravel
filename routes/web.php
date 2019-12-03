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

Route::group(['prefix'=> 'admin','middleware' => 'auth'], function() {
    //Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home',['uses'=>'HomeController@index', 'as' => 'home']);

    Route:: get('/post/create', ['uses'=> 'PostController@create', 'as'=> 'post.create']);
    Route:: post('/post/store', ['uses'=> 'PostController@store', 'as'=> 'post.store']);

    //Add Create
    Route:: get('/category/store', ['uses'=> 'CategoriesController@create', 'as'=> 'category.create']);
    Route:: post('/category/store', ['uses'=> 'CategoriesController@store', 'as'=> 'category.store']);
    //list
    Route:: get('/categories', ['uses' => 'CategoriesController@index','as' => 'categories']); 
    //View Edit
    Route::get('/category/edit/{id}', ['uses' => 'CategoriesController@edit','as' => 'category.edit']);
    Route::get('/category/delete/{id}', ['uses' => 'CategoriesController@destroy','as' => 'category.delete']);
    //update
    Route::post('/category/update/{id}',['uses' => 'CategoriesController@update','as' => 'category.update']);

    //Add Company

    //list
    Route:: get('/companies', ['uses' => 'CompanyController@index','as' => 'companies']); 
    Route:: get('/company/store', ['uses'=> 'CompanyController@create', 'as'=> 'company.create']);
    Route:: post('/company/store', ['uses'=> 'CompanyController@store', 'as'=> 'company.store']);

     //View Edit
     Route::get('/company/edit/{id}', ['uses' => 'CompanyController@edit','as' => 'company.edit']);
     Route::get('/company/delete/{id}', ['uses' => 'CompanyController@destroy','as' => 'company.delete']);
    //update
    Route::post('/company/update/{id}',['uses' => 'CompanyController@update','as' => 'company.update']);

}

);

/*Route::get('/post/create', [ 'uses' => 'PostController@create','as' => 'post.create'
]);

Route::post('/post/store', [ 'uses' => 'PostController@store','as' => 'post.store'
]);*/



Auth::routes();

