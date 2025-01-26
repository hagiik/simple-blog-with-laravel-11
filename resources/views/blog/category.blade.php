@extends('layouts.app')

@section('title', $category->name)

@section('content')
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
