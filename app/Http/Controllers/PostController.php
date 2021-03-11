<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        return $this->post->index();
    }

    public function show($slug)
    {
        return $this->post->getBySlug($slug);
    }
}
