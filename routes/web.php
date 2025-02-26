<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Jobsheet Penjelasan

// Route::get('/hello', function () {
//    return 'Hello World';
// });

// Route::get('/hello', [WelcomeController::class,'hello']);

// Jobsheet Langkah-langkah

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/', function () {
//     return ('Selamat Datang');
// });

// Route::get('/about', function () {
//     return ('NIM    : 2341760030<br>Nama  : M. Zidna Billah Faza');
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' . $id;
// });

// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama saya ' . $name;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });

// Controller

// Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

// // Resource Controller

// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

// // View

// Route::get('/greeting', function () {
// 	return view('hello', ['name' => 'Faza']);
// });

// // View dalam direktori

// Route::get('/greeting', function () {
// 	return view('blog.hello', ['name' => 'Zidnafaz']);
// });

// View dari Controller

Route::get('/greeting', [WelcomeController::class, 'greeting']);
