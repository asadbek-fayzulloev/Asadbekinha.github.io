<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;

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
Route::get('/', [Controller::class, 'index']);
Route::get('/cv', [Controller::class, 'cvPage']);

Route::get('/projects', [Controller::class, 'projectsPage']);
Route::get('/hireme', [Controller::class, 'hirePage']);
Route::get('/contact', [Controller::class, 'contactPage']);
Route::get('/myblog', [Controller::class, 'blogPage']);


Route::get('/admin', [AdminController::class, 'index']);

