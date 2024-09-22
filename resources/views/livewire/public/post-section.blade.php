<div class="grid grid-cols-3 gap-3">
    @forelse($posts as $post)
    <div class=" bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
        <!-- Post Image -->
        <img class="w-full h-48 object-cover" src="{{asset('storage/images/'.$post->featured_image)}} " alt="Post Image">

        <!-- Post Content -->
        <div class="p-6">
            <!-- Post Title -->
            <h2 class="text-2xl font-bold text-gray-800 mb-2">
              {{$post->title}}
            </h2>

            <!-- Post Description -->
            <p class="text-gray-600 text-sm mb-4">
                {{$post->content}}
            </p>

            <!-- Read More Button -->
            <a href="{{route('post.show', 234543)}}" class="inline-block px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-500">
                Read More
            </a>
        </div>
    </div>

    @empty
    <p>Post not found</p>
    @endforelse

</div>