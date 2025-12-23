<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.welcome');
})->name('welcome');

// this is where the dashboard redirection happens with role-based access

Route::get('/dashboard', function (Request $request) {
    $user = $request->user();

    if ($user->hasRole('super-admin')) {
        return redirect()->route('super-admin.dashboard');
    } elseif ($user->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('no-role');
    }

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/no-role', function () {
    return view('public.no-role');
})->middleware(['auth', 'verified'])->name('no-role');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/super-admin.php';
