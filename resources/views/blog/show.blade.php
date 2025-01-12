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
<div class="mt-10">
    <h3 class="text-xl font-bold mb-4">Related Articles</h3>
    <div class="grid gap-8 lg:grid-cols-3 ">
        @forelse ($relatedPosts as $related)
        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            @if ($related->thumbnail)
                  <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}" class="w-full h-48 object-cover mt-2 rounded">
            @endif
            <div class="flex justify-between items-center mt-4 mb-4 text-gray-500">
                  <a href="{{ route('blog.category', $related->category->slug) }}">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                        {{ $related->category->name }}
                    </span>
                  </a>
                    <span class="text-sm">{{ $related->created_at ? $related->created_at->diffForHumans() : 'Unknown' }}</span>
                </div>
          <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="{{ route('blog.show', $related->slug) }}">{{Str::limit (strip_tags($related->title),50) }}</a></h2>
          <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit(strip_tags($related->content), 100) }}</p>
          <div class="flex justify-between items-center">
              <div class="flex justify-between items-center mt-auto">
                  <span class="font-medium dark:text-white capitalize">
                    {{ $related->user->name ?? 'Anonymous' }}
                  </span>
              </div>
              <a href="{{ route('blog.show', $related->slug) }}" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                  Read more
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
          </div>
      </article>
        @empty
            <p>No related articles found.</p>
        @endforelse
    </div>
</div>


    
@endsection
