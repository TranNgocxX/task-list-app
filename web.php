<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; //phải thêm cùng với dòng cuối

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);