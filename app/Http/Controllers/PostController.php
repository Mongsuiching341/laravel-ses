<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    public function index(Category $category)
    {

        return  view('posts', [
            'posts' => $category->posts,
        ]);
    }

    public function destroy(string $id)
    {
        $post = Post::find($id);

        // return $post;
        $deleted =   $post->delete();

        if ($deleted) {
            return response('Post deleted');
        }
    }
}
