<!-- Navigation -->
<nav class="border-b py-4">
  <div class="container mx-auto px-4 flex items-center justify-between">
      <div class="flex items-center">
          <a href="{{route('blog.index')}}" class="text-xl font-bold">Your Logo</a>
          <div class="ml-10 space-x-6">
              <a href="{{route('blog.index')}}" class="relative group text-gray-600 hover:text-red-600">
                  Blog
                  <span class="absolute left-0 bottom-[-8px] w-0 h-1 bg-red-600 transition-all duration-300 group-hover:w-full"></span>
              </a>
              <a href="{{ route ('blog.categoryIndex') }}" class="relative group text-gray-600 hover:text-red-600">
                  Category
                  <span class="absolute left-0 bottom-[-8px] w-0 h-1 bg-red-600 transition-all duration-300 group-hover:w-full"></span>
              </a>
          </div>
        
        
      </div>
      <div class="flex items-center space-x-4">
          <a href="/admin" class="text-gray-600 hover:text-gray-900">Login</a>
      </div>
  </div>
</nav>