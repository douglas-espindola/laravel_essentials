<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\TagResource;
use App\Http\Resources\PostResource;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->get();
        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::with('tags')->findOrFail($id);
        return new PostResource($post);
    }

    public function tagIndex()
    {
        $tags = Tag::with('posts')->get();
        return TagResource::collection($tags);
    }

    public function tagShow($id)
    {
        $tag = Tag::with('posts')->findOrFail($id);

        return new TagResource($tag);
    }
}
