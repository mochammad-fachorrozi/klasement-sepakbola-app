<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DashboardController::class, 'index']);
Route::get('/add', [DashboardController::class, 'add']);
Route::post('/add', [DashboardController::class, 'store']);
Route::get('/add-goal', [DashboardController::class, 'addGoal']);
Route::post('/add-goal', [DashboardController::class, 'storeGoal']);
