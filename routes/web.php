<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/layout', function () {
    return view('adminlte.layout');
})->name('dashboard');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/posts/store', [ForumController::class, 'storePost'])->name('posts.store');
    Route::get('/posts/create', function () {
        return view('posts.create');
    })->name('posts.create');
});

Route::get('/forum', [ForumController::class, 'list'])->name('forum');
Route::get('/posts/{post}', [ForumController::class, 'showPost'])->name('posts.show');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/profile/edit', [UserController::class, 'edit'])->name('edit');
Route::post('/profile/update', [UserController::class, 'update'])->name('update');


Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [UserController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');
