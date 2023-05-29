<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageFirstController;

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
    return redirect('/home');
});

Route::get('/', [PageFirstController::class, 'pageindex'])->name('welcome');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('LoginPage.login', ['tittle' => 'Login Page']);
    })->name('LoginPage');
    Route::post('/postlogin', [LoginController::class, 'login'])->name('login');
    Route::post('/postregister', [RegisterController::class, 'store'])->name('register');
    Route::get('/register', [RegisterController::class, 'index'])->name('RegisterPage');
});

Route::middleware(['auth', 'cekLevel:admin'])->group(function () {
    Route::get('/homeAdmin', [AdminController::class, 'index'])->name('HomePageAdmin');
    Route::get('/profileAdmin', [AdminController::class, 'profile'])->name('ProfilePageAdmin');
    Route::post('/postProfileAdmin', [AdminController::class, 'updateDataAdmin'])->name('PostProfileAdmin');
    Route::get('/contactAdmin', [AdminController::class, 'contact'])->name('ContactAdminPage');
    Route::post('/changePassword', [AdminController::class, 'updateDataPassword'])->name('ChangePasswordAdmin');
});
