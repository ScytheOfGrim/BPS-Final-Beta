@extends('Template.Main')

@section('content')
    <div class="bg-white rounded-lg">
        <div class="p-8">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-700 hover:text-gray-600">
                    {{ __('Mitigasi') }}</h2>
            </div>
            <div class="divider"></div>
            <form action="{{ route('mitigasi.store') }}" method="post">
                @csrf
                <div class=" gap-2 md:flex-row flex flex-col">
                    <div class="flex-1">
                        <div class="w-full">
                            <label class="label" for="fungsi_id">Fungsi</label>
                            <select class="select select-bordered w-full" name="fungsi_id" id="fungsi_id">
                                <option selected disabled>-- Silahkan pilih fungsi ---</option>
                                @foreach ($fungsis as $fungsi)
                                    <option value="{{ $fungsi->id }}">{{ $fungsi->name }}</option>
                                @endforeach
                            </select>
                            @error('fungsi_id')
                                <div class="alert mt-2 alert-error shadow-lg">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="label" for="kegiatan">Kegiatan</label>
                            <input type="text" id="kegiatan" name="kegiatan" placeholder="Nama kegiatan"
                                class="input input-bordered w-full" />
                            @error('kegiatan')
                                <div class="alert mt-2 alert-error shadow-lg">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="label" for="risk">Resiko</label>
                            <input type="text" id="risk" name="risk" placeholder="Resiko"
                                class="input input-bordered w-full" />
                            @error('risk')
                                <div class="alert mt-2 alert-error shadow-lg">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="label" for="sebab">Sebab</label>
                            <input type="text" id="sebab" name="sebab" placeholder="Sebab"
                                class="input input-bordered w-full" />
                            @error('sebab')
                                <div class="alert mt-2 alert-error shadow-lg">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="label" for="sumber_id">Sumber</label>
                            <select class="select select-bordered w-full" name="sumber_id" id="sumber_id">
                                <option selected disabled>-- Silahkan pilih sumber ---</option>
                                @foreach ($sumbers as $sumber)
                                    <option value="{{ $sumber->id }}">{{ $sumber->name }}</option>
                                @endforeach
                            </select>
                            @error('sumber_id')
                                <div class="alert mt-2 alert-error shadow-lg">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="label" for="dampak">Dampak</label>
                            <input type="text" id="dampak" name="dampak" placeholder="Dampak"
                                class="input input-bordered w-full" />
                            @error('dampak')
                                <div class="alert mt-2 alert-error shadow-lg">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="w-full">
                            <label class="label" for="nilai_peluang">Sebab</label>
                            <input type="range" name="nilai_peluang" min="0" max="100" value="25"
                                class="range" step="25" />
                            <div class="w-full flex justify-between text-xs px-2">
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                            </div>
                            @error('nilai_peluang')
                                <div class="alert mt-2 alert-error shadow-lg">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="label" for="nilai_dampak">Sebab</label>
                            <input type="range" min="0" name="nilai_dampak" max="100" value="25"
                                class="range" step="25" />
                            <div class="w-full flex justify-between text-xs px-2">
                                <span>1</span>
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                            </div>
                            @error('nilai_dampak')
                                <div class="alert mt-2 alert-error shadow-lg">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="flex-1">
                            <div class="w-full">
                                <label class="label" for="mitigasi">Mitigasi</label>
                                <textarea id="mitigasi" name="mitigasi" class="h-48 resize-none textarea textarea-bordered w-full"
                                    placeholder="Masukan mitigasi anda disini"></textarea>
                                @error('mitigasi')
                                    <div class="alert mt-2 alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ $message }}</span>
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="flex justify-end">
                    <button class="btn gap-2 w-full md:w-1/5">
                        Submit
                        <i class="fa-solid fa-floppy-disk"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
