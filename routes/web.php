<?php

use App\Http\Controllers\FighterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [HomeController::class, 'index'])->name('home');
//Route:: get('/fighters', [FighterController::class, 'index'])->name('fighters.index');
//Route::get('/fighters/{fighter}', [FighterController::class, 'show'])->name('fighters.show');
//Route::post('/fighters/{fighter}/buy', [FighterController::class, 'buy'])->middleware('auth')->name('fighters.buy');
Route::resource('fighters', FighterController::class)->only(['index', 'show']);
Route::middleware('auth')->group(function () {
    Route::post('/fighters/{fighter}/buy', [FighterController::class, 'store'])->name('fighters.buy');
    Route::delete('/fighters/{fighter}/sell', [FighterController::class, 'destroy'])->name('fighters.destroy');
    Route::middleware(\App\Http\Middleware\Admin::class)->group(function () {
        Route::get('/admin/fighters', [FighterController::class, 'adminIndex'])->name('admin.fighters.index');
        Route::get('/admin/fighters/{fighter}/edit', [FighterController::class, 'edit'])->name('admin.fighters.edit');
        Route::put('/admin/fighters/{fighter}', [FighterController::class, 'update'])->name('admin.fighters.update');
        Route::delete('/admin/fighters/{fighter}', [FighterController::class, 'adminDestroy'])->name('admin.fighters.destroy');
        Route::post('/admin/run-season', [FighterController::class, 'runSeason'])->name('admin.run-season');
    });

});
Route::delete('/fighters/{fighter}/sell', [FighterController::class, 'destroy'])->middleware('auth')->name('fighters.destroy');
Route::get('/profile', [UserController::class, 'show'])->middleware('auth')->name('profile');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
