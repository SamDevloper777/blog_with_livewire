<div class="flex flex-col md:flex-row px-10 py-2">
  <!-- Main Post Area -->
  <div class="w-full md:w-3/4 pr-0 md:pr-8">
    <!-- Post Image -->
    <img class="w-auto h-64 object-cover mb-6" src="{{asset('storage/public/images/'.$post->featured_image)}}" alt=" Post Image">

    <!-- Post Title -->
    <h1 class="text-4xl font-bold text-gray-800 mb-4">{{$post->title}}</h1>

    <!-- Post Metadata -->
    <div class="text-gray-600 mb-6">
      <span>Published on {{$post->created_at}}</span> |
      <span>Author:{{$post->user_id}}</span>
    </div>

    <!-- Post Body -->
    <div class="text-lg text-gray-700 leading-relaxed text-justify">
      <p>
        {{$post->content}}
      </p>
      <p class="mt-4">
        Whether you're just starting out or looking to improve your skills, this guide will help you become a better JavaScript developer. We will explore syntax, common patterns, and best practices.
      </p>
      <!-- Add more post content here -->
    </div>
  </div>

  <!-- Related Posts Sidebar -->
  <aside class="w-full md:w-1/4 mt-8 md:mt-0">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Related Posts</h2>
    <ul class="space-y-4">
      @foreach ($related_posts as $items )
      <li>
        <a href="#post1" class="flex items-start space-x-4 hover:bg-gray-100 p-3 rounded-lg">
          <img src="{{asset('storage/public/images/'.$items->featured_image)}}" alt="Related Post 1" class="w-20 h-20 object-cover rounded">
          <div>
            <h3 class="text-lg font-semibold text-gray-700">{{$items->title}}</h3>
            <p class="text-gray-600 text-sm">{{$items->content}}</p>
          </div>
        </a>
      </li>

      @endforeach
     
    </ul>
  </aside>
</div>