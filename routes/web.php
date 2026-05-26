<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatchController;

Route::get('/', [
    BatchController::class,
    'index'
]);

Route::get('/batch/create', [
    BatchController::class,
    'create'
]);

Route::post('/batch/store', [
    BatchController::class,
    'store'
]);

Route::get('/batch/{id}', [
    BatchController::class,
    'show'
]);

Route::get('/batch/edit/{id}', [
    BatchController::class,
    'edit'
])->name('batch.edit');

Route::put('/batch/update/{id}', [
    BatchController::class,
    'update'
])->name('batch.update');

Route::delete('/batch/delete/{id}', [
    BatchController::class,
    'destroy'
])->name('batch.destroy');

Route::post('/batch/{id}/volunteer', [
    BatchController::class,
    'storeVolunteer'
]);

Route::get('/volunteer/edit/{id}', [
    BatchController::class,
    'editVolunteer'
])->name('volunteer.edit');

Route::put('/volunteer/update/{id}', [
    BatchController::class,
    'updateVolunteer'
])->name('volunteer.update');

Route::delete('/volunteer/delete/{id}', [
    BatchController::class,
    'deleteVolunteer'
])->name('volunteer.delete');