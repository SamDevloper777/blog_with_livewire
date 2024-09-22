<aside class="w-64 bg-gray-100 h-full p-6">
    <h2 class="text-xl font-bold text-gray-700 mb-4">Categories</h2>
 @foreach ($topics as $topic )
 <ul class="space-y-2 mb-3">
        <li>
            <a href="#programming" class="flex items-center p-3 bg-white rounded-lg shadow hover:bg-blue-100 transition">
                <span class="text-blue-600 text-lg font-semibold">{{$topic->topic_name}}</span>
            </a>
        </li>

    </ul>
 
 @endforeach
</aside>