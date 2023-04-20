<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//agregamos los controladores

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComisionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CobroController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\FiduciarioController;
use App\Http\Controllers\HipotecarioController;
use App\Http\Controllers\MypimeController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PrendarioController;

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
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('comisiones', ComisionController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('prestamos', PrestamoController::class);
    Route::resource('empleados', EmpleadoController::class);
    Route::resource('cobros', CobroController::class);
    Route::resource('fiduciarios', FiduciarioController::class);
    Route::resource('hipotecarios', HipotecarioController::class);
    Route::resource('mypimes', MypimeController::class);
    Route::resource('prendarios', PrendarioController::class);
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/lista', [HomeController::class, 'operations']);
});

