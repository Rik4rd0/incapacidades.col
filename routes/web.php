
<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Incapacidades;
use App\Http\Livewire\Cartera;
use App\Http\Livewire\Saldos;
use App\Http\Livewire\Analisis;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use Illuminate\Http\Request;

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

Route::get('/', function() {
    return redirect('/dashboard');
});


// Rutas principales (fuera del middleware de autenticación)
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/incapacidades', Incapacidades::class)->name('incapacidades');
Route::get('/cartera', Cartera::class)->name('cartera');
Route::get('/saldos', Saldos::class)->name('saldos');
Route::get('/analisis', Analisis::class)->name('analisis');
