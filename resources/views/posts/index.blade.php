<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">All Posts</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full mx-auto bg-white dark:bg-gray-800 border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 dark:border-gray-600 text-left leading-4 text-gray-800 dark:text-gray-200 tracking-wider">Title</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 dark:border-gray-600 text-left leading-4 text-gray-800 dark:text-gray-200 tracking-wider">Author</th>
                                    @if(auth()->check() && auth()->user()->is_admin)
                                        <th class="px-4 py-2 border-b-2 border-gray-300 dark:border-gray-600"></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer" onclick="window.location='{{ route('posts.show', $post->id) }}'">
                                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-600 text-center">{{ $post->title }}</td>
                                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-600 text-center">{{ $post->user->name }}</td>
                                        @if(auth()->check() && auth()->user()->is_admin)
                                            <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-600 text-center">
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 dark:text-red-400">Delete</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
