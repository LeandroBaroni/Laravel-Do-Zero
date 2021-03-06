<?php

use Illuminate\Support\Facades\Route;

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
Route::namespace('\App\Http\Controllers\Site')->group(function(){
    Route::get('/', 'HomeController')->name('site.home');
    Route::get('/cms-home', 'HomeController@showCmsHome')->name('home.cms');

    Route::get('produtos', 'CategoryController@index')->name('site.products');
//    o metodo de baixo puxa pelo ID
//    Route::get('produtos/{category}', 'CategoryController@show')->name('site.products.category');
    Route::get('produtos/{category:slug}', 'CategoryController@show')->name('site.products.category');

    Route::get('blog', 'BlogController')->name('site.blog');
    Route::get('edit-post', 'BlogController@editPost')->name('site.edit_blog');
    Route::get('new-post', 'BlogController@newPost')->name('site.new_blog');

    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', 'ContactController@index')->name('site.contact');
    Route::post('contato', 'ContactController@form')->name('site.contact.form');
    Route::get('send', [ContactController::class, "form"]);


    Route::get('new-category', 'CategoryController@newCategory')->name('site.category.new_category');
    Route::post('new-category', 'CategoryController@form')->name('site.category.form');
    Route::get('edit-category', 'CategoryController@editCategory')->name('category.edit_category');
    Route::get('new-product', 'ProductController@newProduct')->name('category.new_product');
    Route::get('edit-product', 'ProductController@editProduct')->name('category.edit_product');
});
