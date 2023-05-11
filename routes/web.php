<?php

use Illuminate\Support\Facades\Route;

if (App::environment('production')) {
    URL::forceScheme('https');
}

// User Section
Route::get('/', function () {
    return redirect()->route('product.index');
})->name('index');

Route::get('locale/{locale}', [App\Http\Controllers\HomeController::class, 'setLocale'])->name('setLang');
Route::get('privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy-policy.index');
Route::get('terms-and-condition', [App\Http\Controllers\HomeController::class, 'terms_and_condition'])->name('terms.index');

Route::resource('ecommerce/product', App\Http\Controllers\Ecommerce\ProductController::class);


Route::middleware('auth')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('index');
    Route::resource('/my-profile', App\Http\Controllers\ProfileController::class);

    Route::prefix('ecommerce')->middleware('auth')->group(function () {
        Route::get('product/view/{id}', [App\Http\Controllers\Ecommerce\ProductController::class, 'details'])->name('product.details');
        Route::resource('cart', App\Http\Controllers\Ecommerce\CartController::class);
        // Route::resource('order', App\Http\Controllers\Ecommerce\OrderController::class);
    });
    
    Route::get('blogs', [App\Http\Controllers\Blog\PostController::class, 'blog'])->name('blogs.index');
    Route::resource('blog', App\Http\Controllers\Blog\PostController::class);

    Route::resource('chat', App\Http\Controllers\ChatController::class);
    
    Route::resource('order-history', App\Http\Controllers\HistoryController::class);
    
    Route::prefix('dashboard')->group(function () {
        Route::view('default', 'admin.dashboard.default')->name('dashboard.index');
    });
    
    Route::get('/user/profile', function () {
        return redirect()->route('my-profile.index');
    })->name('profile.show');
});

// Admin
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect(route('product.index'));
})->name('dashboard');

// @include_once('admin_web.php');

Route::get('test', App\Http\Livewire\Test::class);