<div class="w-full overflow-auto px-[10%] py-10">
    @if (session('message'))
    <p class="text-xl text-red-600 font-semibold mb-5">{{session('message')}}</p>
    @endif
    <div class="flex flex-1 justify-between items-center my-3">
        <h2 class="text-xl">Manage Post({{count($posts)}})</h2>
        <input type="search" wire:model.live="searchTerm" class="border border-slate-500 px-3 py-2 rounded-full" placeholder="search here......">
    </div>
    <table class="w-full border">
        <thead>
            <tr>
                <th class="border p-3">Id</th>
                <th class="border p-3">Title</th>
                <th class="border p-3">Topic</th>
                <th class="border p-3">Content</th>
                <th class="border p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post )
            <tr>
                <td class="border p-3">{{$post->id}}</td>
                <td class="border p-3">{{$post->title}}</td>
                <td class="border p-3">{{$post->topic->topic_name}}</td>
                <td class="border p-3">{{$post->content }}</td>
                <td class="border p-3">
                    <button class="bg-green-500 text-white px-3 py-2 rounded-md">edit</button>
                    <button wi  re:click="deletePost({{$post->id }})" class="bg-red-500 text-white px-3 py-2 rounded-md">delete</button>
                </td>
            </tr>
            @empty
            <tr >
                <td class="p-5 flex justify-center items-center">post not found</td>
            </tr>

            @endforelse
        </tbody>
    </table>
</div>