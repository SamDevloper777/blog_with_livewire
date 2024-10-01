<aside class="w-64 h-full ">
    <h2 class="text-xl font-bold text-gray-700 mb-4">Categories</h2>
    @foreach ($topics as $topic )
    <ul class="space-y-2 mb-3">
        <li>
            <a wire:navigate href="{{route('filter',$topic->id)}}" class="flex items-center rounded-sm hover:bg-slate-50 ">
                <span class=" text-lg font-semibold flex justify-between flex-1 p-3 items-center">{{$topic->topic_name}} {{$topic->posts->count() > 0 ? "(".$topic->posts->count().")" : ""}}
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4" />
                    </svg>

                </span>
            </a>
        </li>

    </ul>

    @endforeach
</aside>