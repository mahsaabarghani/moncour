<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\AdminUserController;

//Route::get('/', function () {
//    return view('index');
//})->name('index');


//////////////////////MAIN PAGE
Route::get('/', [\App\Http\Controllers\MainPageController::class, 'index'])->name('main.index');


/////////////////////WITH AUTH
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logout', function () {
    Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    /////////////////////ADMIN PAGE
    Route::get('/admin', [\App\Http\Controllers\AdminUserController::class, 'index'])->name('admin.index');

/////////////////////AdminUserController
    Route::get('/createUser', [AdminUserController::class, 'create'])->name('user.create');
    Route::post('/storeUser', [AdminUserController::class, 'store'])->name('user.store');
    Route::get('/destroyUser/{id}', [AdminUserController::class, 'destroy'])->name('user.destroy');
    Route::get('/restoreUser/{id}', [AdminUserController::class, 'restore'])->name('user.restore');

/////////////////////AdminMessageController
    Route::get('/createMessage', [AdminMessageController::class, 'index'])->name('adminCreateMessage.index');
    Route::post('/saveCreatedMessage', [AdminMessageController::class, 'store'])->name('adminStoreMessage.index');
    Route::get('/destroyMessage/{id}', [AdminMessageController::class, 'destroy'])->name('adminDestroyMessage.destroy');
    Route::get('/restoreMessage/{id}', [AdminMessageController::class, 'restore'])->name('adminRestoreMessage.restore');
});


//////////////////////contact us section
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');


/////////////////////PRODUCT PAGE
//Route::get('/product', [ProductPageController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductPageController::class, 'show'])->name('product.show');


require __DIR__ . '/auth.php';
