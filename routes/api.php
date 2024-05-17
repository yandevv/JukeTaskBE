<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks/{uuid}', function (string $uuid) {
    return app(TaskController::class)->list($uuid);
});

Route::post('/task/create', function (Request $request) {
    return app(TaskController::class)->create($request);
});

Route::patch('/task/update/{uuid}', function (Request $request, string $uuid) {
    return app(TaskController::class)->update($request, $uuid);
});

Route::delete('/task/delete/{uuid}', function (string $uuid) {
    return response(app(TaskController::class)->delete($uuid) . ' tasks were deleted.', 200)
                    ->header('Content-Type', 'text/plain');
});