<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;

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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController'); //->middleware('auth');

Route::get('/mensagem-teste', function () {
    // return new MensagemTesteMail();
    Mail::to('mateusdayrell7@gmail.com')->send(new MensagemTesteMail());
    return 'Email eniado com sucesso';
});