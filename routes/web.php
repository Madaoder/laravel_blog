<?php

use App\Http\Controllers\BlogsController;
use App\Models\Blogs;
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

Route::get('/', function () {
    $blogs = Blogs::latest()->get();
    return view('home', compact('blogs'));
});

Route::get('/add/blog', [BlogsController::class, 'AddBlog']);
Route::post('/create/blog', [BlogsController::class, 'CreateBlog']);
Route::get('/show/blog/{id}', [BlogsController::class, 'ShowBlog']);
Route::get('/edit/blog/{id}', [BlogsController::class, 'EditBlog']);
Route::post('/edit/blog/{id}', [BlogsController::class, 'ChangeBlog']);
Route::get('/delete/blog/{id}', [BlogsController::class, 'DeleteBlog']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
