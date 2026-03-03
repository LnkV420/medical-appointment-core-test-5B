<?php

use Illuminate\Support\Facades\Route;


Route::redirect('/', '/admin');
//Route::get('/', function () {
//  return view('welcome');
//});

use App\Http\Controllers\TicketController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
            return view('dashboard');
        }
        )->name('dashboard');

        // Rutas para la funcionalidad de soporte técnico mediante tickets
        // Estas rutas permiten listar, crear y administrar los tickets de soporte
        Route::resource('admin/tickets', TicketController::class)->names('admin.tickets');    });
