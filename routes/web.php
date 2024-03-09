<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    // Dashboard Routes 
    Route::get('/dashboard', [DashboardsController::class, 'index'])->name('dashboards.index');
    Route::resource('/dashboard/categories',CategoryController::class);

    //Frontend Routes
    Route::resource('/blogs', BlogController::class);
    Route::resource('/profile', ProfileController::class);
    Route::post('/{blog:id}/comment/store', [CommentController::class, 'store']);
});

require __DIR__ . '/auth.php';


// git merge origin master 

// git branch -d master 
// git fetch 
// git checkout master 
// git pull origin master