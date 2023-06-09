<?php

use Illuminate\Support\Facades\Route;
use Marshmallow\Maintenance\Http\Controllers\ToolController;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('status', [ToolController::class, 'status']);
Route::post('up', [ToolController::class, 'up']);
Route::post('down', [ToolController::class, 'down']);
Route::get('config', [ToolController::class, 'config']);
