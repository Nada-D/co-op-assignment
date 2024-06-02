<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

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

Route::get('/', [NotesController::class, 'index']);
Route::get('note/{note:slug}', [NotesController::class, 'show']);
Route::get('/notes/create', [NotesController::class, 'create']);
Route::post('/notes', [NotesController::class, 'store']);
Route::get('note/{note:slug}/edit', [NotesController::class, 'edit']);
Route::patch('/note/{note}', [NotesController::class, 'update']);
Route::delete('/notes/{note}', [NotesController::class, 'destroy']);