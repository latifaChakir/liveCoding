<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index']);
Route::get('/ajouter', [StudentController::class, 'ajouter']);
Route::post('/insertStudent', [StudentController::class, 'insertStudent']);
Route::delete('/delete/{id}', [StudentController::class, 'supprimerStudent'])->name('delete.student');
Route::get('/update/{id}', [StudentController::class, 'modifier']);

Route::put('/updatestudent/{id}', [StudentController::class, 'modifierStudent'])->name('update.student');




