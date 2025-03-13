<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Redirect home to tasks
Route::get('/', function () {
    return redirect('/tasks');
});

// Resourceful routes
Route::resource('tasks', TaskController::class);
