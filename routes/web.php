<?php

use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/todos/store', function () {
    Todo::create([
        'user_id' => 1,
        'title' => request('data'),
    ]);
});
