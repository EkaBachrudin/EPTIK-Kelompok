<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();


Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::get('/all-posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/all-posts/{user:id}/specific', [App\Http\Controllers\UserController::class, 'post']);
Route::get('/show-post/{post:slug}', [App\Http\Controllers\PostController::class, 'show']);

Route::get('/about', [App\Http\Controllers\UserController::class, 'about'])->name('about');
Route::get('/members', [App\Http\Controllers\UserController::class, 'member'])->name('member');
Route::get('/members/{user:id}/detail', [App\Http\Controllers\UserController::class, 'memberDetail']);



//ADMIN---------------------------------------------------------------------
Route::group([
    'middleware' => ['auth', 'admin']
], function () {
    //INDEX SUPER ADMIN
    Route::get('/super-woofer-admin', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('super-woofer-admin');

    //POST AREA
    Route::get('/super-woofer-admin/posts', [App\Http\Controllers\SuperAdminController::class, 'posts'])->name('super-woofer-admin.posts');

    //AUTHOR AREA
    Route::get('/super-woofer-admin/author', [App\Http\Controllers\SuperAdminController::class, 'author'])->name('super-woofer-admin.author');
    Route::get('/super-woofer-admin/author/{user:id}', [App\Http\Controllers\SuperAdminController::class, 'edit']);
    Route::patch('/super-woofer-admin/author/{user:id}/update', [App\Http\Controllers\SuperAdminController::class, 'updateAuthor']);
    Route::patch('/super-woofer-admin/author/{user:id}/updatePass', [App\Http\Controllers\SuperAdminController::class, 'updatePassword']);

});

//USER---------------------------------------------------------------------
Route::group([
    'middleware' => ['auth']
], function () {
    //User Admin
    Route::get('/user-admin', [App\Http\Controllers\UserAdminController::class, 'index']);

    Route::get('/user-admin/post', [App\Http\Controllers\UserAdminController::class, 'post'])->name('user-admin.post');
    Route::get('/user-admin/post/create', [App\Http\Controllers\UserAdminController::class, 'create']);
    Route::post('/user-admin/post/store', [App\Http\Controllers\UserAdminController::class, 'store']);
    Route::get('/user-admin/post/{post:slug}', [App\Http\Controllers\UserAdminController::class, 'show']);
    Route::get('/user-admin/post/{post:id}/delete', [App\Http\Controllers\UserAdminController::class, 'delete']);


    Route::get('/user-admin/profile', [App\Http\Controllers\UserAdminController::class, 'profile']);
    Route::get('/user-admin/profile/edit', [App\Http\Controllers\UserAdminController::class, 'editProfile']);
    Route::patch('/user-admin/profile/{user:id}/update', [App\Http\Controllers\UserAdminController::class, 'updateProfile']);
    Route::patch('/user-admin/profile/{user:id}/update-password', [App\Http\Controllers\UserAdminController::class, 'updatePassword']);
});