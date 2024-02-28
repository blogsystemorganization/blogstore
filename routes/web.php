<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilesController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardsController::class, 'index'])->name('dashboards.index');

    // :: breeze profile controller 
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/homepages', HomepageController::class);
    Route::resource('/blogs', BlogController::class);
    // Route::resource('/blogs/{blog:id}', BlogController::class);

    // Route::get("/blogs/{id}",[BlogController::class,"detail"])->name("blog.detail");
    // Route::delete("/blogs/{id}",[BlogController::class,"destory"])->name("blog.destory");
    Route::resource('/profile', ProfileController::class);

    Route::post('/{blog:id}/comment/store', [CommentController::class, 'store']);
});

require __DIR__ . '/auth.php';


// git merge origin master 

// git branch -d master 
// git fetch 
// git checkout master 
// git pull origin master