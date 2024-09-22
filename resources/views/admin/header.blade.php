<header class="bg-gray-800 text-white">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <div class="text-lg font-semibold">
        <a href="/admin" class="hover:text-gray-300">Admin Dashboard</a>
      </div>
  
      <!-- Navigation -->
      <nav class="space-x-6">
        <a href="{{route('admin.dashboard')}}" class="hover:text-gray-300">Dashboard</a>
        <a href="{{route('admin.topics')}}" class="hover:text-gray-300">Topics</a>
        <a href="{{route('admin.posts')}}" class="hover:text-gray-300">Posts</a>
        <a href="{{route('admin.posts.create')}}" class="hover:text-gray-300">Insert Posts</a>
        <a href="/admin/users" class="hover:text-gray-300">Users</a>
        <a href="/admin/settings" class="hover:text-gray-300">Settings</a>
      </nav>
  
      <!-- Profile/Logout -->
      <div class="flex items-center space-x-4">
        <span class="text-sm">Welcome, Admin</span>
        <a href="/logout" class="text-sm hover:text-gray-300">Logout</a>
      </div>
    </div>
  </header>
  