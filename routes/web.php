<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaobabController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BauxController;
use App\Http\Controllers\PartiesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PrivilegesController;
use App\Http\Controllers\ArticleController;
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

Route::get('/home', function () { return view('auth.login');});
Route::get('/lock', [App\Http\Controllers\HomeController::class, 'lock'])->name('lock');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\BauxController::class, 'index'])->name('baux');
    Route::get('/baux/ajout', [App\Http\Controllers\BauxController::class, 'add'])->name('baux/ajout');
    Route::get('/baux', [App\Http\Controllers\BauxController::class, 'index'])->name('baux');
    Route::get('/privileges', [App\Http\Controllers\PrivilegeController::class, 'index'])->name('privileges');
    Route::get('/privileges/ajout', [App\Http\Controllers\PrivilegeController::class, 'add'])->name('privileges/ajout');

    // Route::resource('parties', PartiesController::class);
    Route::resource('articles', ArticleController::class);
    Route::get('articles/create/{id}', [ArticleController::class, 'create'])->name('articles.add');
    Route::get('articles/delete/{id}', [ArticleController::class, 'delete'])->name('articles.delete');

    Route::resource('baobab', BaobabController::class);
    Route::resource('settings', SettingsController::class);
    Route::resource('baux', BauxController::class);
    Route::get('baux/delete/{id}', [BauxController::class, 'delete'])->name('baux.delete');


    Route::resource('privileges', PrivilegesController::class);
    Route::resource('parties', PartiesController::class);
    Route::get('parties_delete/{id}', [PartiesController::class, 'delete'])->name('parties.delete');
    
    Route::resource('user', UserController::class);

    Route::put('user_active/{id}', [ UserController::class, 'active'])->name('user.active');
    Route::put('user_desactive/{id}', [ UserController::class, 'desactive'])->name('user.desactive');
    Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

});

