<?php

use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('tasks', TaskController::class)->names([
    'index'   => 'api.tasks.index',
    'store'   => 'api.tasks.store',
    'show'    => 'api.tasks.show',
    'update'  => 'api.tasks.update',
    'destroy' => 'api.tasks.destroy',
]);
