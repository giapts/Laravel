<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::get('/products', [
    ProductsController::class,
    'index'
]);

Route::get('/products/{productName}', [
    ProductsController::class,
    'detail'
]);

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/users', function () {
//     return 'this is the user page';
// });
// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => 'John Doe',
//         'email' => 'nguyentronggiap317@gmail.com'
//     ]);
// });
// Route::get('/something', function () {
//     return redirect('/users');
// });
