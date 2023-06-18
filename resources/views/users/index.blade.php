<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 text-gray-900 dark:text-gray-200 ">
                    <div class="min-w-full align=middle ">   
                    
                        <table class="overflow-hidden min-w-full divide-y divide-gray-200  rounded-lg">
                            <thead>
                            <tr >
                                <th class="px-6 py-3 bg-gray-800 text-left border-4 ">
                                    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-800 text-left border-4">
                                    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Lastname</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-800 text-left  border-4">
                                    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($users as $user)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 border-4">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 border-4">
                                        {{ $user->lastname }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 border-4" >
                                        {{ $user->email }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                    {{ $users->links() }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
