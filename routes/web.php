<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/food', [PostsController::class, 'index']);






//-----------------------------------------------------------------------------
// Route::get('products', [
//     ProductsController::class,
//     'index'
// ]);

// Route::get('products', [
//     ProductsController::class,
//     'index'
// ])->name('products');

// Route::get('products/{id}', [
//     ProductsController::class,
//     'detail'
// ])->where('id', '[0-9]+');

// Route::get('products/{productName}', [
//     ProductsController::class,
//     'detail'
// ]);

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

//response a view
// Route::get('/', function () {
//     return view('home');
//     // return env('MY_NAME');
// });
//đây là response a string
// Route::get('/user', function () {
//     return 'Đây là page dành cho user';
// });
// //response an array
// Route::get('/food', function () {
//     return ['cá', 'tôm', 'thịt lợn'];
// });

// //response an object
// Route::get('/aboutme', function () {
//     return response()->json([
//         'name'=> 'Bui Van Duy',
//         'email' => 'duybui207@gmail.com'
//     ]);
// });

// Route::get('/something', function () {
//     return redirect('/food'); // redirect to root
// });