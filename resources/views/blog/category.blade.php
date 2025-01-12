@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="grid grid-cols-4 gap-6">
        <!-- Sidebar -->
        <aside class="col-span-1 bg-white p-4 shadow rounded">
            <h3 class="text-lg font-bold mb-4">Categories</h3>
            <ul>
                <li class="mb-2">
                    <a href="{{ route('blog.categoryIndex') }}" class="text-blue-500 hover:underline">
                        All Categories
                    </a>
                </li>
                @foreach ($categories as $category)
                    <li class="mb-2">
                        <a href="{{ route('blog.category', $category->slug) }}" class="text-blue-500 hover:underline">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>
        

        <!-- Main Content -->
        <div class="col-span-3">
            <h2 class="text-xl font-bold mb-4">Posts in {{ $category->name }}</h2>
            @foreach ($posts as $post)
                <div class="mb-6 p-4 bg-white shadow rounded">
                    <h3 class="text-lg font-bold">
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-500 hover:underline">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="text-sm text-gray-600">
                        {{ $post->created_at->format('M d, Y') }} | 
                        <a href="{{ route('blog.category', $post->category->slug) }}" class="text-blue-400 hover:underline">
                            {{ $post->category->name }}
                        </a>
                    </p>
                    @if ($post->thumbnail)
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover mt-2 rounded">
                    @endif
                    <p class="text-gray-800 mt-4">{{ Str::limit(strip_tags($post->content), 150) }}</p>
                </div>
            @endforeach

            <div class="mt-6">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
