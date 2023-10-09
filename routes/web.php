<?php

use App\Http\Controllers\AdminController;
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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'adminDashboard'])
        ->name('admin.dashboard');

    Route::post('/store/profile', [AdminController::class, 'StoreProfile'])
        ->name('store.profile');

    Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('admin.change.password');
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('admin.update.password');
});


// UserControlller

// FrontEndCotroller

// Route::get('/login', [FrontendController::class, 'login'])
//     ->name('login');

// Brand

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/all/brand', [BrandController::class, 'allBrand'])
        ->name('all.brand');

    Route::get('/add/brand', [BrandController::class, 'addBrand'])
        ->name('add.brand');

    Route::post('/store/brand', [BrandController::class, 'storeBrand'])
        ->name('store.brand');

    Route::get('/edit/brand/{id}', [BrandController::class, 'editBrand'])
        ->name('edit.brand');

    Route::post('/update/brand', [BrandController::class, 'updateBrand'])
        ->name('update.brand');

    Route::get('/delete/brand/{id}', [BrandController::class, 'deleteBrand'])
        ->name('delete.brand');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/all/category', [CategoryController::class, 'allCategory'])
        ->name('all.category');

    Route::get('/add/category', [CategoryController::class, 'addcategory'])
        ->name('add.category');

    Route::post('/store/category', [CategoryController::class, 'storeCategory'])
        ->name('store.category');

    Route::get('/edit/category/{id}', [CategoryController::class, 'editCategory'])
        ->name('edit.category');

    Route::post('/update/category', [CategoryController::class, 'updateCategory'])
        ->name('update.category');

    Route::get('/delete/category/{id}', [CategoryController::class, 'deleteCategory'])
        ->name('delete.category');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    // Category All Route
    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/all/subcategory', 'AllSubCategory')->name('all.subcategory');
        Route::get('/add/subcategory', 'AddSubCategory')->name('add.subcategory');
        Route::post('/store/subcategory', 'StoreSubCategory')->name('store.subcategory');
        Route::get('/edit/subcategory/{id}', 'EditSubCategory')->name('edit.subcategory');
        Route::post('/update/subcategory', 'UpdateSubCategory')->name('update.subcategory');
        Route::get('/delete/subcategory/{id}', 'DeleteSubCategory')->name('delete.subcategory');

        Route::get('/subcategory/ajax/{category_id}', 'GetSubCategory');
    });
});

// Product Controller

Route::middleware(['auth', 'role:vendor'])->group(function () {

    Route::controller(VendorProductController::class)->group(function () {
        Route::get('/vendor/all/product', 'VendorAllProduct')->name('vendor.all.product');
        Route::get('/vendor/add/product', 'VendorAddProduct')->name('vendor.add.product');

        Route::post('/vendor/store/product', 'VendorStoreProduct')->name('vendor.store.product');
        Route::get('/vendor/edit/product/{id}', 'VendorEditProduct')->name('vendor.edit.product');

        Route::post('/vendor/update/product', 'VendorUpdateProduct')->name('vendor.update.product');
        Route::post('/vendor/update/product/thambnail', 'VendorUpdateProductThabnail')->name('vendor.update.product.thambnail');

        Route::post('/vendor/update/product/multiimage', 'VendorUpdateProductmultiImage')->name('vendor.update.product.multiimage');

        Route::get('/vendor/product/multiimg/delete/{id}', 'VendorMultiimgDelete')->name('vendor.product.multiimg.delete');

        Route::get('/vendor/product/inactive/{id}', 'VendorProductInactive')->name('vendor.product.inactive');
        Route::get('/vendor/product/active/{id}', 'VendorProductActive')->name('vendor.product.active');

        Route::get('/vendor/delete/product/{id}', 'VendorProductDelete')->name('vendor.delete.product');

        Route::get('/vendor/subcategory/ajax/{category_id}', 'VendorGetSubCategory');
    });
});


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(ProcuctController::class)->group(function () {

        Route::get('/all/product', 'allProduct')
            ->name('all.product');

        Route::get('/add/product', 'addProduct')
            ->name('add.product');

        Route::post('/store/product', 'storeProduct')
            ->name('store.product');

        Route::get('/edit/product/{id}', 'editProduct')
            ->name('edit.product');

        Route::post('/update/product', 'updateProduct')
            ->name('update.category');

        Route::get('/delete/product/{id}', 'deleteProduct')
            ->name('delete.product');


        Route::get('/product/inactive/{id}', 'ProductInactive')->name('product.inactive');
        Route::get('/product/active/{id}', 'ProductActive')->name('product.active');

        Route::post('/update/product', 'UpdateProduct')->name('update.product');

        Route::post('/update/product/thambnail', 'UpdateProductThambnail')->name('update.product.thambnail');
        Route::post('/update/product/multiimage', 'UpdateProductMultiimage')->name('update.product.multiimage');
        Route::get('/product/multiimg/delete/{id}', 'MulitImageDelelte')->name('product.multiimg.delete');
    });
});
