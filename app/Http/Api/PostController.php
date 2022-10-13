<?php

namespace App\Http\Api;

use App\Models\Post;
use Orion\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $model = Post::class;
}
