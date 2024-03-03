<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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
    
    Route::get('/threads', [PageController::class, 'index'])->name('page.index');
    Route::get('/threads/{thread:id}', [PageController::class, 'thread'])->name('page.thread');

    Route::post('/threads/{thread:id}', [CommentController::class, 'store'])->name('comment.store');
    Route::patch('/threads/{thread:id}/comments/{comment:id}', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/threads/{thread:id}/comments/{comment:id}', [CommentController::class, 'destroy'])->name('comment.destroy');
});

require __DIR__.'/auth.php';
