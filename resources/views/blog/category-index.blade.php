@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h2 class="text-xl font-bold mb-4">All Categories</h2>
   
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4">
            @foreach ($categories as $category)
                <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow p-6">
                    <div class="flex flex-col items-center justify-center text-center">
                        <a href="{{ route('blog.category', $category->slug) }}">
                            <h3 class="font-medium text-gray-900 mb-2 hover:text-red-600 transition-colors">
                                {{ $category->name }}
                            </h3>
                        </a>
                        
                        <p class="text-sm text-gray-500">
                            {{ $category->posts_count }} posts
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
