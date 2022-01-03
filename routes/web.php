<?php

use App\Http\Controllers\CustomAuthController;
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

Route::get('/forum', function () {
    return view('forum.forum');
})->name('forum');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::post('/posts/{post}', [ForumController::class, 'showPost'])->name('posts.show');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/posts/store', [ForumController::class, 'storePost'])->name('posts.store');
    Route::get('/posts/create', function () {
        return view('posts.create');
    })->name('posts.create');
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
