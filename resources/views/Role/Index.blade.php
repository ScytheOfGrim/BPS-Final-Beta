@extends('Template.Main')

@section('content')
    <div class="bg-white rounded-lg">
        <div class="p-8">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-700 hover:text-gray-600">
                    Roles</h2>
            </div>
            <div class="flex justify-between">
                @can(App\Constants\Permissions::CREATE_ROLE)
                    <a href="{{ route('users.role.create') }}" role="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah
                        Role</a>
                @endcan
                {{-- <div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5"
                            placeholder="Search for items" name="search">
                    </div>
                </div> --}}
            </div>
            @if (session('status'))
                <div
                    class="w-full mb-2 select-none border-l-4 border-green-400 bg-green-100 p-4 font-medium hover:border-green-500">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="pl-2">{{ session('status') }}</span>
                    </div>
                </div>
            @endif
            @if (session('delete'))
                <div
                    class="hover:red-yellow-500 w-full mb-2 select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="pl-2">{{ session('delete') }}</span>
                    </div>
                </div>
            @endif
            <div class="overflow-x-auto">
                <table class="table w-full border-red-300">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        @can(App\Constants\Permissions::UPDATE_ROLE)
                                            <a href="{{ route('users.role.edit', ['id' => $role->id]) }}" role="button"
                                                class="btn btn-primary text-white"><i class="fa-solid fa-pencil"></i></a>
                                        @endcan
                                        @can(App\Constants\Permissions::DELETE_ROLE)
                                            <form action="{{ route('users.role.destroy', ['id' => $role->id]) }}" method="post"
                                                onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-error text-white"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
