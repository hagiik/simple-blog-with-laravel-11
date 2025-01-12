@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h2 class="text-xl font-bold mb-4">All Categories</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($categories as $category)
            <div class="p-4 bg-white shadow rounded">
                <h3 class="text-lg font-bold">
                    <a href="{{ route('blog.category', $category->slug) }}" class="text-blue-500 hover:underline">
                        {{ $category->name }}
                    </a>
                </h3>
                <p class="text-sm text-gray-600">
                    {{ $category->posts_count }} posts
                </p>
            </div>
        @endforeach
    </div>
@endsection
