<?php

use App\Http\Controllers\BlogsController;
use App\Models\Blogs;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/my', function () {
    $user_id = Auth::user()->id;
    $blogs = Blogs::where('user_id', $user_id)->latest()->get();
    return view('home', compact('blogs'));
});

//post route
Route::get('/add/blog', [BlogsController::class, 'AddBlog'])->middleware('auth');
Route::post('/create/blog', [BlogsController::class, 'CreateBlog'])->middleware('auth');
Route::get('/show/blog/{id}', [BlogsController::class, 'ShowBlog']);
Route::get('/edit/blog/{id}', [BlogsController::class, 'EditBlog'])->middleware('auth');
Route::post('/edit/blog/{id}', [BlogsController::class, 'ChangeBlog'])->middleware('auth');
Route::get('/delete/blog/{id}', [BlogsController::class, 'DeleteBlog'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
