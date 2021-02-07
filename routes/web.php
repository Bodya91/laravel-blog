<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.index');
    Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['as' => 'admin']);
    Route::resource('/article', App\Http\Controllers\Admin\ArticleController::class, ['as' => 'admin']);
    // Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
    // Route::post('/category', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
    // Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
    // Route::get('/category/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin.category.show');
    // Route::put('/category/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
    // Route::delete('/category/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');
    // Route::get('/category/{category}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
});

Route::get('/', function () {
    return view('blog.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
