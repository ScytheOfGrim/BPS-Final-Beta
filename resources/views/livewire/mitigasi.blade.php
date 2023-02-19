<div>
    <div class="bg-white rounded-lg">
        <div class="p-8">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-700 hover:text-gray-600">
                    Data Mitigasi</h2>
            </div>
            <div class="flex justify-between">
                @can(App\Constants\Permissions::CREATE_MITIGASI)
                    <a href="{{ route('mitigasi.create') }}" role="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Buat Mitigasi</a>
                @endcan
                <div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" wire:model.debounce.500ms="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5"
                            placeholder="Search for items" name="search">
                            <div wire:loading.block wire:target="search">Mencari....</div>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div
                    class="w-full mb-2 select-none border-l-4 border-green-400 bg-green-100 p-4 font-medium hover:border-green-500">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                            fill="none" viewBox="0 0 24 24">
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                            fill="none" viewBox="0 0 24 24">
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
                            <th>Nama Kegiatan</th>
                            <th>Fungsi</th>
                            <th>Pembuat</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th></th>
                            <th>Verifikasi By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($mitigasis as $mitigasi)
                            <tr>
                                <td>{{ $mitigasi->kegiatan }}</td>
                                <td>{{ $mitigasi->fungsi->name }}</td>
                                <td>{{ $mitigasi->user->name }}</td>
                                <td>{{ $mitigasi->created_at }}</td>
                                <td>{{ $mitigasi->is_verif ? 'Sudah Verifikasi' : 'Belum Verifikasi' }}</td>
                                {{-- <td>{{ $mitigasi->kegiatan }}</td> --}}
                                <td>
                                    <div class="flex gap-2">
                                        @can(App\Constants\Permissions::READ_MITIGASI)
                                            <a href="{{ route('mitigasi.view', ['id' => $mitigasi->id]) }}" target="_blank"
                                                rel="noopener noreferrer" role="button"
                                                class="btn btn-primary text-white"><i class="fa-solid fa-eye"></i></a>
                                        @endcan
                                        @can(App\Constants\Permissions::UPDATE_MITIGASI)
                                            <a href="{{ route('mitigasi.edit', ['id' => $mitigasi->id]) }}" role="button"
                                                class="btn btn-warning text-white"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        @endcan
                                        @can(App\Constants\Permissions::PRINT_MITIGASI)
                                            @if ($mitigasi->is_verif)
                                                <a href="{{ route('mitigasi.print', ['id' => $mitigasi->id]) }}"
                                                    role="button" target="_blank" rel="noopener noreferrer"
                                                    class="btn btn-info text-white"><i class="fa-solid fa-print"></i></a>
                                            @endif
                                        @endcan
                                        @can(App\Constants\Permissions::DELETE_MITIGASI)
                                            <form action="{{ route('mitigasi.destroy', $mitigasi->id) }}" method="post"
                                                onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-error text-white"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                                @if ($mitigasi->verif_by_user)
                                    <td>{{ $mitigasi->verif_by_user->name }}</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
