<?php

use App\Http\Controllers\PostApiController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/posts', [PostApiController::class, 'index'])->name('api.posts.index');
Route::get('/posts/{id}', [PostApiController::class, 'show'])->name('api.posts.show');

Route::get('/tags', [PostApiController::class, 'tagIndex'])->name('api.tags.index');
Route::get('/tags/{id}', [PostApiController::class, 'tagShow'])->name('api.tags.show');
