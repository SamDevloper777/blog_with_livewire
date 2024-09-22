<div class="w-5/12 mx-auto p-4 bg-white shadow-md rounded-md">
    @if (session()->has('message'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        {{ session('message') }}
    </div>
    @endif

    <form wire:submit.prevent="store" class="w-full p-5" enctype="multipart/form-data">
        <!-- Title -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="title" wire:model="title" class="mt-1 border block w-full rounded-md px-3 py-2 border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Content -->
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea id="content" wire:model="content" class="mt-1 block resize-none w-full border rounded-md px-3 py-2 border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
            @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>



        <!-- Topic ID -->
        <div class="mb-4">
            <select for="topic_id" wire:model="topic_id" class=" mb-3 px-3 py-2 border text-sm font-medium w-full text-gray-700">Topic
                <option value="">select a topic</option>
                @foreach ($topics as $topic )
                <option value="{{$topic->id}}">{{$topic->topic_name}}</option>
                @endforeach
            </select>
            @error('topic_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Featured Image -->
        <div class="mb-4 ">
            <label for="featured_image" class="block text-sm font-medium text-gray-700">Featured Image</label>
            <input type="file" id="featured_image" wire:model="featured_image" class="mt-1 px-3 py-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer focus:outline-none">
            @error('featured_image') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
       @if ($featured_image)
       <img src="{{$featured_image->temporaryUrl()}}" alt="">
       
       @endif


        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Submit
            </button>
        </div>
    </form>
</div>