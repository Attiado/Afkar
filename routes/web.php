<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CommentController;

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

/*
Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);
*/
//Auth::routes();
//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('dashboard', 'App\Http\Controllers\UserController@dashboard')->middleware('auth');
Route::resource('posts', PostController::class);
Route::resource('questions', QuestionController::class);
Route::resource('categories', CategoryController::class);
Route::resource('users', UserController::class);
Route::resource('comments', CommentController::class);

Auth::routes();

//les routes du front
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/team', [App\Http\Controllers\PagesController::class, 'team'])->name('team');
Route::get('/sujets', [App\Http\Controllers\PagesController::class, 'sujets'])->name('sujets');
Route::get('/postuler', [App\Http\Controllers\PagesController::class, 'postuler'])->name('postuler');
Route::get('/aprepos', [App\Http\Controllers\PagesController::class, 'aprepos'])->name('aprepos');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/questionsrep', [App\Http\Controllers\PagesController::class, 'questionsrep'])->name('questionsrep');

Route::get('/commenter', [App\Http\Controllers\CommentController::class, 'commenter'])->name('commenter');

//les routes du dashboard
Route::get('/profile', [App\Http\Controllers\PagesController::class, 'profile'])->name('profile');
