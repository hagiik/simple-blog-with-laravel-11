<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    public function index()
    {
        // Ambil postingan yang di-publish
        $posts = BlogPost::with('category', 'user')
            ->published() // Hanya tampilkan artikel dengan status 'published'
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // Ambil postingan terbaru (misalnya 5 postingan terakhir)
        $latestPost = BlogPost::with('category', 'user')
            ->published() // Hanya artikel yang dipublikasikan
            ->orderBy('created_at', 'desc')
            ->first();

        // Ambil 5 postingan dengan views terbanyak
        $popularPosts = BlogPost::with('category', 'user')
        ->published() // Hanya artikel yang dipublikasikan
        ->orderBy('views', 'desc') // Urutkan berdasarkan views
        ->limit(5)
        ->get();

        // Ambil semua kategori
        $categories = Category::all();

        return view('blog.index', compact('posts', 'latestPost',  'popularPosts', 'categories'));
        
    }


    public function categoryIndex()
    {
    $categories = Category::withCount(['posts' => function ($query) {
                $query->where('status', 'published');
    }])->get();

    return view('blog.category-index', compact('categories'));
    }


    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = BlogPost::with('category', 'user')
            ->where('category_id', $category->id)
            ->published() // Hanya tampilkan artikel 'published'
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $categories = Category::all();

        return view('blog.category', compact('category', 'posts', 'categories'));
    }


    public function show($slug)
    {
        $post = BlogPost::with('category', 'user')
            ->where('slug', $slug)
            ->where('status', 'published') // Pastikan hanya artikel yang dipublikasikan
            ->firstOrFail();

        // Increment views
        $post->increment('views');

        // Meta keywords
        $meta_keywords = implode(', ', is_array($post->tags) ? $post->tags : []);

        // Open Graph data
        $og_title = $post->title;
        $og_description = Str::limit(strip_tags($post->content), 150);
        $og_image = $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('path/to/default-thumbnail.jpg');

        // Related posts
        $relatedPosts = BlogPost::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id) // Kecualikan artikel saat ini
            ->where('status', 'published') // Hanya artikel yang dipublikasikan
            ->limit(4)
            ->get();

        return view('blog.show', compact('post', 'meta_keywords', 'og_title', 'og_description', 'og_image', 'relatedPosts'));
    }


}
