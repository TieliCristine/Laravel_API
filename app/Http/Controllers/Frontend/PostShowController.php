<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post): Post
    {
        return $post;
    }
}
