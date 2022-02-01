<?php

use App\Http\Controllers\CustomTournamentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Models\Post;
use App\Models\User;
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

Route::group(['middleware' => ['role']], function () {
    Route::get('/new', [CustomTournamentController::class, 'index'])->name('tournament.new');
    Route::post('/tournament/create', [CustomTournamentController::class, 'create'])->name('tournament.create');
});

Route::get('/', [ForumController::class, 'welcome'])->name('welcome');

Route::get('/forum', [ForumController::class, 'list'])->name('forum');
Route::get('/posts/{post}', [ForumController::class, 'showPost'])->name('posts.show');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/profile/edit', [UserController::class, 'edit'])->name('edit');
Route::get('/profile/{user}', [UserController::class, 'customProfile'])->name('customprofile');
Route::post('/profile/update', [UserController::class, 'update'])->name('update');
Route::post('/profile/change-avatar', [ UserController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [UserController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');

Route::get('/brackets', [CustomTournamentController::class, 'brackets'])->name('tournament.brackets');
Route::get('/tournament/{tournament}', [CustomTournamentController::class, 'showTournament'])->name('tournament.show');
Route::get('/tournament/{tournament}/register', [CustomTournamentController::class, 'registerPlayers'])->name('tournament.register');
Route::get('/tournament/{tournament}/createbrackets', [CustomTournamentController::class, 'createBrackets'])->name('tournament.createbrackets');
Route::get('/highscores', [UserController::class, 'showHighscores'])->name('highscores');

