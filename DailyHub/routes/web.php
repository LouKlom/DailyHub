<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionTypesController;
use App\Models\Transaction;
use App\Models\TransactionTypes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/testing', function () {
    return view('/testing');
    })->name('testing');


/**
 * TASKS ROUTES
 */
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/create', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/show/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/tasks/update/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::put('/tasks/{task}/finish', [TaskController::class, 'finish'])->name('tasks.finish');
Route::put('/tasks/{task}/delete', [TaskController::class, 'destroy'])->name('tasks.destroy');



/**
 * TRANSACTIONS TYPES ROUTES
 */
Route::get('/finance/types', [TransactionTypesController::class, 'index'])->name('transtype.index');
Route::get('/finance/types/create', [TransactionTypesController::class, 'create'])->name('transtype.create');
Route::post('/finance/types/store', [TransactionTypesController::class, 'store'])->name('transtype.store');



/**
 * FINANCIAL ROUTES
 */
Route::get('/finance', [TransactionController::class, 'index'])->name('financial.index');