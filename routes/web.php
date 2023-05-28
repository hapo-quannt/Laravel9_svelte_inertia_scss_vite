<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoAppController;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::prefix('todo-app')->group(static function () {
    Route::get('', [TodoAppController::class, 'index'])->name("todo-app");
    Route::post('create', [TodoAppController::class, 'create'])->name("create-todo");
    Route::get('test', [TodoAppController::class, 'test'])->name("todo-app-test");
});

require __DIR__ . '/auth.php';
