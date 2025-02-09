<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Post::all());
    }
}
