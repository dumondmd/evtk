<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/paciente', 'PacienteController@showAll')->name("paciente.showAll");
Route::get('/paciente/{id}', 'PacienteController@show')->name("paciente.show");
Route::post('/paciente', 'PacienteController@store')->name("paciente.store");
Route::put('/paciente/{id}', 'PacienteController@update')->name("paciente.update");
Route::delete('/paciente/{id}', 'PacienteController@destroy');

