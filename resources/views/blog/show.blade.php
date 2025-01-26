@extends('layouts.app')

@section('title', $post->title . ' | ' . config('app.name'))

@section('meta_title', $post->title . ' | ' . config('app.name'))
@section('meta_author', $post->user->name)
@section('meta_keywords', $post->tags)
@section('meta_description', Str::limit(strip_tags($post->content), 150))
{{-- @section('meta_keywords', implode(', ', is_array($post->tags) ? $post->tags : [])) --}}


@section('og_title', $og_title)
@section('og_description', $og_description)
@section('og_image', $og_image)

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded">
        <h2 class="text-3xl font-bold mb-4">{{ $post->title }}</h2>
        <p class="text-sm text-gray-600 mb-4">
            {{ $post->created_at->format('M d, Y') }} | 
            <a href="{{ route('blog.category', $post->category->slug) }}" class="text-blue-400 hover:underline">
                {{ $post->category->name }}
            </a> | 
            {{ $post->views }} views
        </p>
        @if ($post->thumbnail)
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-auto object-cover mb-6 rounded">
        @endif
        <article class="prose lg:prose-xl max-w-none">
            {!! str($post->content)->sanitizeHtml() !!}
            {{-- {!! html_entity_decode($post->content) !!} --}}
        </article>
        <div class="mt-6">
            <h3 class="text-lg font-bold mb-4">Share this article</h3>
            <div class="flex space-x-4">
                <!-- Facebook -->
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                   target="_blank" 
                   class="text-blue-600 hover:underline">
                    <i class="fab fa-facebook-square text-2xl"></i> Facebook
                </a>
                
                <!-- Twitter -->
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" 
                   target="_blank" 
                   class="text-blue-400 hover:underline">
                    <i class="fab fa-twitter-square text-2xl"></i> Twitter
                </a>
    
                <!-- WhatsApp -->
                <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . url()->current()) }}" 
                   target="_blank" 
                   class="text-green-500 hover:underline">
                    <i class="fab fa-whatsapp-square text-2xl"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Related Articles -->

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @forelse ($relatedPosts as $related)
        <div class="group rounded-lg p-6 transition-all hover:shadow-lg">
            @if ($related->thumbnail)
                <a href="{{ route('blog.show', $post->slug) }}" class="block aspect-video overflow-hidden rounded-lg mb-4">
                    <img 
                        src="{{ asset('storage/' . $related->thumbnail) }}" 
                        alt="{{ $post->title }}" 
                        class="w-full h-full object-cover transition-transform group-hover:scale-105"
                    >
                </a>
            @endif
            
            <div class="space-y-3">
                <h3 class="font-medium">
                    <a href="{{ route('blog.show', $related->slug) }}" 
                        class="hover:text-blue-600 transition-colors">
                        {{Str::limit (strip_tags($related->title),50) }}
                    </a>
                </h3>
                
                <p class="text-sm text-gray-600 line-clamp-3">
                    {{ Str::limit(strip_tags($related->content), 100) }}
                </p>
                
                <div class="flex items-center justify-between pt-4">
                    <span class="text-xs text-gray-500">
                        {{ $post->created_at->format('M d, Y') }}
                    </span>
                    <a href="{{ route('blog.show', $related->slug) }}" 
                        class="text-sm font-medium text-blue-600 hover:text-blue-700">
                        Read more →
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection
