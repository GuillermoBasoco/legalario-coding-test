<!-- In resources/views/admin/user_activity.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Activity') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">User Activity</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full mx-auto bg-white dark:bg-gray-800 border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 dark:border-gray-600 text-left leading-4 text-gray-800 dark:text-gray-200 tracking-wider">Name</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 dark:border-gray-600 text-left leading-4 text-gray-800 dark:text-gray-200 tracking-wider">Email</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 dark:border-gray-600 text-left leading-4 text-gray-800 dark:text-gray-200 tracking-wider">Last Login</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-600">{{ $user->name }}</td>
                                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-600">{{ $user->email }}</td>
                                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-600">{{ $user->last_login_at ? $user->last_login_at->format('Y-m-d H:i:s') : 'Never' }}</td>
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
