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

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'home']);
Route::get('/selection', [PageController::class, 'selection']);
Route::get('/login', [PageController::class, 'login']);

Route::get('/signup', [UserController::class, 'signup']);
Route::post('/userstore', [UserController::class, 'userstore']);

Route::get('/updatepassword', [UserController::class, 'updatepage']);
Route::post('/userupdated', [UserController::class, 'userupdated']);

Route::get('/deleteuser', [UserController::class, 'deletepage']);
Route::post('/userdeleted', [UserController::class, 'userdeleted']);

Route::get('/usercreated', function () {
    return view('users/userlist');
});

Route::get('/userupdated', function () {
    return view('users/userlist');
});

Route::get('/userdeleted', function () {
    return view('users/userlist');
});

Route::get('/userlist', function () {
    return view('users/userlist');
});


Route::get('/addproduct', [ProductController::class, 'addproductform']);
Route::post('/productstore', [ProductController::class, 'productstore']);

Route::get('/updateproduct', [ProductController::class, 'updatepage']);
Route::post('/productupdated', [ProductController::class, 'productupdated']);

Route::get('/deleteproduct', [ProductController::class, 'deletepage']);
Route::post('/productdeleted', [ProductController::class, 'productdeleted']);

Route::get('/productcreated', function () {
    return view('products/selection');
});

Route::get('/productupdated', function () {
    return view('products/selection');
});

Route::get('/productdeleted', function () {
    return view('products/selection');
});

Route::get('/productlist', function () {
    return view('products/productindex');
});
