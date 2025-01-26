@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Featured Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        @if ($latestPost)
            <div class="rounded-lg p-8 shadow-md">
                <img src="{{ asset('storage/' . $latestPost->thumbnail) }}" alt="Illustration" class="mb-4">
                <a href="{{ route('blog.show', $latestPost->slug) }} class="text-2xl font-bold mb-2">
                    {{ $latestPost->title }}
                </a>
            </div>
        @else
            <p>Tidak ada postingan terbaru.</p>
        @endif
    
        
        <div class="space-y-6">
            <div class="flex items-center mb-4">
                <span class="text-yellow-400 mr-2">★</span>
                <h3 class="text-lg font-medium">Popular Posts</h3>
            </div>
            <div class="space-y-4">
                @foreach ($popularPosts as $popularPost)
                    <a href="{{ route('blog.show', $popularPost->slug) }}" class="block hover-effect p-2 rounded">
                        <h4 class="font-medium text-gray-500">{{ $popularPost->title }}</h4>
                    </a>
                @endforeach
            </div>
        </div>
        
    </div>

    <!-- Tabs -->
    <div class="border-b mb-8">
        {{-- <nav class="flex space-x-8">
            <a href="#" class="border-b-2 border-black pb-2 font-medium">Most Popular</a>
            <a href="#" class="text-gray-500 hover:text-gray-900 pb-2">Enterprise</a>
            <a href="#" class="text-gray-500 hover:text-gray-900 pb-2">Product</a>
            <a href="#" class="text-gray-500 hover:text-gray-900 pb-2">Sales</a>
            <a href="#" class="text-gray-500 hover:text-gray-900 pb-2">Customer Service</a>
            <a href="#" class="text-gray-500 hover:text-gray-900 pb-2">Talent</a>
        </nav> --}}
    </div>

    <!-- Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @foreach ($posts as $post)
        <div class="group rounded-lg p-6 transition-all hover:shadow-lg flex flex-col h-full">
            @if ($post->thumbnail)
                <a href="{{ route('blog.show', $post->slug) }}" class="block aspect-video overflow-hidden rounded-lg mb-4">
                    <img 
                        src="{{ asset('storage/' . $post->thumbnail) }}" 
                        alt="{{ $post->title }}" 
                        class="w-full h-full object-cover transition-transform group-hover:scale-105"
                    >
                </a>
            @endif
            
            <div class="flex flex-col flex-grow">
                <h3 class="font-medium mb-3">
                    <a href="{{ route('blog.show', $post->slug) }}" 
                        class="hover:text-red-600 transition-colors">
                        {{ $post->title }}
                    </a>
                </h3>
                
                <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                    {{ Str::limit(strip_tags($post->content), 100) }}
                </p>
                
                <div class="flex justify-between items-center mt-auto pt-4 ">
                    <span class="text-xs text-gray-500">
                        {{ $post->created_at->format('M d, Y') }}
                    </span>
                    <a href="{{ route('blog.show', $post->slug) }}" 
                        class="text-sm font-medium text-red-600 hover:text-red-700">
                        Read more
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@if ($posts->isEmpty())
    <div class="text-center py-12">
        <p class="text-lg text-gray-500 dark:text-gray-400">
            No published articles available or all articles are still in draft status.
        </p>
    </div>
@endif
    
@endsection