<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()
            ->with(['category', 'author', 'tags'])
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        $categories = BlogCategory::withCount('posts')
            ->orderBy('name')
            ->get();

        $tags = BlogTag::whereHas('posts')
            ->orderBy('name')
            ->get();

        return view('blog.index', compact('posts', 'categories', 'tags'));
    }

    public function show($slug)
    {
        $post = BlogPost::published()
            ->with(['category', 'author', 'tags'])
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->where('category_id', $post->category_id)
            ->with(['category', 'author'])
            ->orderBy('published_at', 'desc')
            ->take(4)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }

    public function category($category)
    {
        $categoryModel = BlogCategory::where('slug', $category)->firstOrFail();

        $posts = BlogPost::published()
            ->with(['category', 'author', 'tags'])
            ->where('category_id', $categoryModel->id)
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        $categories = BlogCategory::withCount('posts')
            ->orderBy('name')
            ->get();

        $tags = BlogTag::whereHas('posts')
            ->orderBy('name')
            ->get();

        return view('blog.index', compact('posts', 'categories', 'tags'));
    }

    public function tag($tag)
    {
        $tagModel = BlogTag::where('slug', $tag)->firstOrFail();

        $posts = $tagModel->posts()
            ->published()
            ->with(['category', 'author', 'tags'])
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        $categories = BlogCategory::withCount('posts')
            ->orderBy('name')
            ->get();

        $tags = BlogTag::whereHas('posts')
            ->orderBy('name')
            ->get();

        return view('blog.index', compact('posts', 'categories', 'tags'));
    }

    public function comment($slug, Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        return back()->with('success', 'Thank you for your comment! It will be reviewed before being published.');
    }
}
