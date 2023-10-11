<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProcuctController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\VendorProductController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index2');
})->middleware(['auth'])->name('dashboard');

// Admin All Route
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');

    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
});


require __DIR__ . '/auth.php';

// Admin All Route

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'adminDashboard'])
        ->name('admin.dashboard');

    Route::post('/store/profile', [AdminController::class, 'StoreProfile'])
        ->name('store.profile');

    Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('admin.change.password');
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('admin.update.password');
});




// Route::get('/login', [FrontendController::class, 'login'])
//     ->name('login');


Route::middleware(['auth', 'role:user'])->prefix('admin')->group(function () {

   Route::get('/about',[AboutController::class,'index'])
   ->name('about.index');

   Route::get('/about/data',[AboutController::class,'aboutData'])
   ->name('about.store');

   Route::post('/about/store', [AboutController::class,'store'])
    ->name('about.store');

});



// Product Controller



