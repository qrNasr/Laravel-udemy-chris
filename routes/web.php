<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerA;

Route::get('/', function () {
    return view('welcome');
});

//create controller that renders view. The controller called ControllerA, the function called helloo.
Route::get('/Nasr', [ControllerA::class, 'hello']);
Route::get('/Mona', [ControllerA::class, 'hi']);
// Assuming you want to define a route for 'Omar', you need to create a corresponding method in ControllerA
Route::get('/Omar', [ControllerA::class, 'omar']); // Changed to 'omar' for consistency
Route::get('/Malak', [ControllerA::class, 'malak']);
Route::get('/Shahd', [ControllerA::class, 'shahd']);
Route::get('King',[ControllerA::class,'king']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
