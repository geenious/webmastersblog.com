<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinksController;

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
    return view('index');
});

Route::get('/admin/create-post', function() {
    return view('admin/create-post');
});

Route::post('/post/create', [CreatePost::class]);

Route::get('links', [LinksController::class, 'show']);