<?php

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
    return view('home');
});
Route::middleware([])->group(function () {
    Route::resource('horarios', 'App\Http\Controllers\agendamento\HorariosController');
    Route::get('/agendamento/create', 'App\Http\Controllers\agendamento\AgendaController@index')->name('agenda.create');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
