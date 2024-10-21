@extends('layout')

@section('content')
<div class="container mx-auto px-[5%] py-8">
  <div class="flex  md:flex-row">

    <!-- Filtered Results Section -->
    <div class="w-full flex gap-10">


      <aside class="flex flex-col ">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Filter by</h2>
        <livewire:public.sidebar />
      </aside>

      <div class="flex flex-1 flex-col">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Results found {{$topic->topic_name}}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
          @forelse($topic->posts as $post)
          <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-48 object-cover object-top" src="{{asset('storage/public/images/'.$post->featured_image)}}" alt="Result 1">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">{{$post->title}}</h3>
              <p class="text-gray-600 mb-4 line-clamp-3">{{$post->content}}</p>
              <a href="{{route('post.show',$post->id)}}" class="text-blue-600 hover:underline">Read More</a>
            </div>
          </div>
          @empty
          <p class="text-2xl">not found Any Post try with any Post</p>
          @endforelse
          <!-- Add more result cards here -->
        </div>

      </div>
    </div>
  </div>
</div>

@endsection