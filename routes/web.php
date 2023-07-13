<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GrlController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\Php;

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



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'loginAction'])->name('login.action');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});




    Route::get('dashboard/admin',[GrlController::class,'index'
    ])->name('dashboard')->middleware('restrict-admin');

    Route::get('dashboard/community',[GrlController::class,'indAdmin'
    ])->name('/dashboard/community');

    Route::get('dashboard/coordinador', [GrlController::class, 'indexCoor'
    ])->name('/dashboard/coordinador');






    Route::post('nota/save', [GrlController::class, 'guardarNota'])->name('notaSave');
    Route::post('/search', [GrlController::class, 'search'])->name('notes.search');

    //Administardores

    Route::get('administradores', [GrlController::class, 'administradores'
    ])->name('administradores')->middleware('restrict-admin');

    Route::get('/crear-administradores', [GrlController::class, 'crearadministradores'
    ])->name('administradores.crear');

    Route::post('/administradores', [GrlController::class, 'guardaradministradores'])->name('administradores.guardar');

    Route::delete('/administradores/{id}', [GrlController::class, 'eliminaradministradores'])->name('administradores.eliminar');
    //Actualizar
    Route::get('/administradores/{id}/actualizar', [GrlController::class, 'actualizaradministradores'])->name('administradores.actualizar');
    Route::put('/administradores/{id}', [GrlController::class, 'updateadministradores'])->name('administradores.update');


    //Cordinadores
    Route::get('cordinadores', [GrlController::class,'cordinators'
    ])->name('cordinador')->middleware('restrict-admin');

    Route::get('/community/cordinadores', [GrlController::class,'cordinators'
    ])->name('/community/cordinador')->middleware('restrict-admin');
    //Crear
    Route::get('/crear-coordinador', [GrlController::class, 'crear'])->name('coordinador.crear');
    Route::post('/cordinadores', [GrlController::class, 'guardar'])->name('coordinador.guardar');
    //Actualizar
    Route::get('/coordinador/{id}/actualizar', [GrlController::class, 'actualizar'])->name('coordinador.actualizar');
    Route::put('/coordinador/{id}', [GrlController::class, 'update'])->name('coordinador.update');
    //Eliminar
    Route::delete('/coordinador/{id}', [GrlController::class, 'eliminar'])->name('coordinador.eliminar');


    //Communitys
    Route::get('communitys', [GrlController::class, 'communitys'])->name('communitys');

    Route::get('/crear-communitys', [GrlController::class, 'crearC'])->name('communitys.crear');
    Route::post('/communitys', [GrlController::class, 'guardarC'])->name('communitys.guardar');

    Route::get('/communitys/{id}/actualizar', [GrlController::class, 'actualizarC'])->name('communitys.actualizar');
    Route::put('/communitys/{id}', [GrlController::class, 'updateC'])->name('communitys.update');

    Route::delete('/communitys/{id}', [GrlController::class, 'eliminarC'])->name('communitys.eliminar');



    //clientes

    Route::get('/clientes', [GrlController::class, 'clientes'])->name('clientes');
    Route::get('/crear-clientes', [GrlController::class, 'crearClientes'])->name('clientes.crear');
    Route::post('/clientes', [GrlController::class, 'guardarClientes'])->name('clientes.guardar');
    Route::get('/clientes/{id}/actualizar', [GrlController::class, 'actualizarClientes'])->name('clientes.actualizar');
    Route::put('/clientes/{id}', [GrlController::class, 'updateClientes'])->name('clientes.update');




    Route::get('product', function () {
        return view('layouts.product');
    })->name('product');


