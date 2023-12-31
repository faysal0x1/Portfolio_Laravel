<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\FrontEnd\FrontendController;
use App\Http\Controllers\NewsletterController;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('frontend.index');
});



Route::controller(FrontendController::class)->prefix('web')->group(function () {

    Route::get('/get/hero', 'getHeroData')
        ->name('get.hero');
    Route::get('/get/services', 'getServices')
        ->name('get.services');
    Route::get('/get/skills', 'getSkills')
        ->name('get.skills');

    Route::get('/blogs', 'blogsPage')
        ->name('blogs.page');

    Route::get('/blog/{id}', 'blogDetails')
        ->name('blog.single');
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

    Route::get('/about', [AboutController::class, 'index'])
        ->name('about.index');

    Route::get('/about/data', [AboutController::class, 'aboutData'])
        ->name('about.store');

    Route::post('/about/store', [AboutController::class, 'store'])
        ->name('about.store');


    Route::resource('/skills', SkillController::class);

    Route::get('/skill/list', [SkillController::class, 'skillList'])
        ->name('skills.list');

    Route::resource('/services', ServiceController::class);

    Route::post('/services/update', [ServiceController::class, 'update'])->name('services.update');

    Route::get('/service/list', [ServiceController::class, 'serviceList'])
        ->name('services.list');

    Route::resource('/testimonials', TestimonialController::class);

    Route::get('/testimonial/list', [TestimonialController::class, 'testimonialList'])
        ->name('testimonial.list');

    Route::resource('/projects', ProjectController::class);

    Route::get('/project/list', [ProjectController::class, 'projectList'])
        ->name('project.list');

    Route::get('/newsletter/list', [NewsletterController::class, 'index'])->name('newsletter.index');

    Route::get('/newsletter/lists', [NewsletterController::class, 'newsletterList'])->name('newsletter.list');




    // ALl BlogCategoryController Routes
    Route::controller(BlogCategoryController::class)->group(function () {
        Route::get('/all/blog/category', 'blogCategory')->name('all.blog.category');

        Route::get('/add/blog/category', 'addBlogCategory')->name('add.blog.category');

        Route::post('/store/blog/category', 'storeBlogCategory')->name('store.blog.category');

        Route::get('/edit/blog/category/{id}', 'editBlogCategory')->name('edit.blog.category');
        Route::post('/update/blog/category', 'updateBlogCategory')->name('update.blog.category');
        Route::get('/delete/blog/category/{id}', 'deleteBlogCategory')->name('delete.blog.category');
    });


    // All Blog Controller
    Route::controller(BlogController::class)->group(function () {
        Route::get('/all/blog', 'allBlog')->name('all.blog');
        Route::get('/add/blog', 'addBlog')->name('add.blog');

        Route::post('/store/blog', 'storeBlog')->name('store.blog');
        Route::get('/edit/blog/{id}', 'editBlog')->name('edit.blog');
        Route::post('/update/blog', 'updateBlog')->name('update.blog');
        Route::get('/delete/blog/{id}', 'deleteBlog')->name('delete.blog');

        Route::get('/blog/details/{id}', 'blogDetails')->name('blog.details');
    });

    Route::resource('/education', EducationController::class);

    Route::get('/get/education', [EducationController::class, 'getEducation'])
        ->name('get.education');
});

Route::get('/get/blogs', [FrontendController::class, 'getBlogs']);
Route::post('/admin/newsletter/store', [NewsletterController::class, 'newsletterStore'])->name('store.newsletter');

// Product Controller
