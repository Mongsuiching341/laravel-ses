<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
// use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {


    return view('posts', [
        'posts' =>  Post::with('category')->get(),
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
        'post' => $post,
    ]);
});




Route::get('category/{id}', function ($id) {

    return Post::total($id);
});


Route::get('/posts/{id}/delete', [PostController::class, 'destroy']);

Route::get('/deleted-posts', function () {
    return Post::getAllDeletedPosts();
});


Route::get('/categories/{category}/posts', [PostController::class, 'index']);
