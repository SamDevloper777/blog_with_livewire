<div class="grid grid-cols-1 gap-3">
    @forelse($posts as $post)
    <a href="{{route('post.show', $post->id)}}" class=" bg-white border flex border-gray-200 rounded-lg shadow-md overflow-hidden  ">


        <!-- Post Image -->
        <div class="flex w-full gap-2">
            <div class="w-3/12 flex items-center justify-center">
                <img class="w-full h-48 object-cover object-top" src="{{asset('/storage/public/images/'.$post->featured_image)}} " alt="Post Image">
            </div>
            <!-- Post Content -->
            <div class="px-3 py-3 flex flex-col w-9/12">
                <!-- Post Title -->
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    {{$post->title}}
                </h2>

                <!-- Post Description -->
                <p class="text-gray-600 line-clamp-5  text-sm mb-4 text-balance">
                    {{$post->content}}
                </p>


            </div>
        </div>

    </a>

    @empty
    <p>Post not found</p>
    @endforelse

</div>