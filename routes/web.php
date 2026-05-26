<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatchController;

Route::get('/', [BatchController::class, 'index']);

Route::get('/batch/create', [BatchController::class, 'create']);

Route::post('/batch/store', [BatchController::class, 'store']);

Route::get('/batch/{id}', [BatchController::class, 'show']);

Route::post('/batch/{id}/volunteer', [BatchController::class, 'storeVolunteer']);

Route::delete('/volunteer/delete/{id}', [BatchController::class, 'deleteVolunteer'])
    ->name('volunteer.delete');

Route::delete('/batch/{id}',
[BatchController::class, 'destroy'])
->name('batch.destroy');