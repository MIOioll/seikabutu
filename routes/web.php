<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;  
use App\Http\Controllers\CommentReturnController;  

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/', [CommentController::class, 'index']);
    Route::get('/comments/create', [CommentController::class, 'create'])->name('comments_create');
     Route::get('/comments/{comment}/return',[CommentReturnController::class,'creturn']);
    Route::get('/comments/{comment}', [CommentController::class ,'show']);
    Route::post('/comments', [CommentController::class, 'store']);
    
   
    Route::post('/comments/{comment}/return', [CommentReturnController::class, 'store2']);
    
    Route::delete('/comments/{comment}', [CommentController::class,'delete']);
    
});

require __DIR__.'/auth.php';
