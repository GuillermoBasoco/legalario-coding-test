<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
                    <p class="mb-4">{{ $post->body }}</p>
                    <p class="text-gray-600 dark:text-gray-400">Author: {{ $post->user->name }}</p>
                    <a href="{{ route('posts.index') }}" class="text-blue-500 dark:text-blue-300 hover:underline">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
