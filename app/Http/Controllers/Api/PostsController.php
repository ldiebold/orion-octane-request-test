<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Orion\Http\Controllers\Controller;

class PostsController extends Controller
{
  /**
   * Fully-qualified model class name
   */
  protected $model = Post::class; // or "App\Models\Post"
}
