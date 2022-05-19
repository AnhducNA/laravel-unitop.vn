<?php

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', 'App\Http\Controllers\ProductController@show');

Route::get('/admin/post/add', 'App\Http\Controllers\AdminPostController@add');
Route::get('/admin/post/update/{id}', 'App\Http\Controllers\AdminPostController@update');
Route::get('/admin/post/delete/{id}', 'App\Http\Controllers\AdminPostController@delete');
Route::get('/admin/post/show', 'App\Http\Controllers\AdminPostController@show');

Route::get('/admin/products/add', 'App\Http\Controllers\AdminProductController@add');
Route::get('/admin/products/show', 'App\Http\Controllers\AdminProductController@show');
Route::get('/admin/products/update/{id}', 'App\Http\Controllers\AdminProductController@update');
Route::get('/admin/products/delete/{id}', 'App\Http\Controllers\AdminProductController@delete');

Route::get('/posts/add', 'App\Http\Controllers\PostController@add');
Route::post('/posts/store', 'App\Http\Controllers\PostController@store');
Route::get('/posts/show', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::get('/posts/update/{id}', 'App\Http\Controllers\PostController@update');
Route::get('/posts/delete/{id}', 'App\Http\Controllers\PostController@delete');
Route::get('/posts/read', 'App\Http\Controllers\PostController@read');
Route::get('/posts/restore/{id}', 'App\Http\Controllers\PostController@restore');
Route::get('/posts/forceDelete/{id}', 'App\Http\Controllers\PostController@forceDelete');

Route::get('product/show', 'App\Http\Controllers\ProductController@show');

Route::get('helper/url', 'App\Http\Controllers\HelperController@url');
Route::get('helper/string', 'App\Http\Controllers\HelperController@string');

Route::get('/images/read', 'App\Http\Controllers\FeaturedImagesController@read');

Route::get('/role/show', 'App\Http\Controllers\RoleController@show');

Route::get('/session/add', 'App\Http\Controllers\SessionController@add');
Route::get('/session/show', 'App\Http\Controllers\SessionController@show');
Route::get('/session/add_flash', 'App\Http\Controllers\SessionController@add_flash');
Route::get('/session/delete', 'App\Http\Controllers\SessionController@delete');

Route::get('/cookie/set', 'App\Http\Controllers\CookieController@set');
Route::get('/cookie/get', 'App\Http\Controllers\CookieController@get');

Route::get('/demo/sendmail', 'App\Http\Controllers\DemoController@sendmail');

Route::get('cart/show', 'App\Http\Controllers\CartController@show');
Route::get('cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');
Route::get('cart/remove/{rowId}', 'App\Http\Controllers\CartController@remove')->name('cart.remove');
Route::get('cart/destroy', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');
Route::post('cart/update', 'App\Http\Controllers\CartController@update')->name('cart.update');

Route::get('/user/reg', function () {
    return view('user/reg');
});

// Route::group(['prefix' => 'laravel-filemanager'], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });